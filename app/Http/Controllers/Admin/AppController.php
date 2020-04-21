<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Http\Controllers\Controller;

class AppController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin', [
            'only' => 'index',
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('admin.dashboard', compact('users'));
    }

}
