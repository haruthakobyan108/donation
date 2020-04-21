<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('admin')->group(function () {
    Route::namespace('Auth')->group(function () {
        Route::get('login', 'AdminLoginController@showLoginForm')->name('admin.login');
        Route::post('login', 'AdminLoginController@loginAdmin')->name('admin.login.request');
        Route::post('logout', 'AdminLoginController@logout')->name('admin.logout');
    });

    Route::middleware('auth:admin')->group(function () {
        Route::namespace('Admin')->group(function () {
            Route::get('dashboard', 'AppController@index')->name('admin.dashboard');
            Route::resource('users', 'UserController')->only(['create', 'store']);
        });
    });
});
