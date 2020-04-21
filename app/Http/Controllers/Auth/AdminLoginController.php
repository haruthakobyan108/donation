<?php

namespace App\Http\Controllers\Auth;

use Auth;
use Validator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AdminLoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin/dashboard';

    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       $this->middleware('guest:admin')->except('logout');
    }

    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('admin.login');
    }

    /**
     * Attempt to log the user in
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function loginAdmin(Request $request)
    {
      $validator = Validator::make($request->all(), [
          'email'   => 'required|email',
          'password' => 'required|min:6'
      ]);

      if ($validator->fails()) {
         return back()
                  ->withErrors($validator)
                  ->withInput();
      }

      if ($this->guard()->attempt(['email' => $request->email, 'password' => $request->password], $request->remember_me)) {
          return redirect()->intended(route('admin.dashboard'));
      }

      return redirect()
                ->back()
                ->withInput($request->only('email', 'remember'));
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        $this->guard()->logout();

        return redirect()->route('admin.login');
    }

}
