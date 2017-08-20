<?php

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

Route::get('/', 'HomeController@index');

Route::group([
    'prefix' => 'admin',
], function () {
    Route::get('/', 'AdminController@index');
    Route::post('login', 'AdminController@login');
    Route::post('signup', 'AdminController@signup');

    Route::get('dashboard', 'AdminController@dashboard');
//    Route::post('facebook-connect', 'UserController@facebookConnect');
//    Route::get('facebook-callback', 'UserController@facebookCallback');
//    Route::post('forgot-password', 'UserController@forgotPassword');
});

Route::group([
    'prefix' => 'agent',
], function () {
    Route::get('login', 'AgentController@login');
    Route::get('logout', 'UserController@logout');
//    Route::post('signup', 'UserController@signup');
//    Route::post('facebook-connect', 'UserController@facebookConnect');
//    Route::get('facebook-callback', 'UserController@facebookCallback');
//    Route::post('forgot-password', 'UserController@forgotPassword');
});

Route::group([
    'prefix' => 'retail',
], function () {
    Route::get('login', 'AgentController@login');
    Route::get('logout', 'UserController@logout');
//    Route::post('signup', 'UserController@signup');
//    Route::post('facebook-connect', 'UserController@facebookConnect');
//    Route::get('facebook-callback', 'UserController@facebookCallback');
//    Route::post('forgot-password', 'UserController@forgotPassword');
});

