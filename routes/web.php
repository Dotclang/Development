<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::group(['middleware' => ['role:admin|super-admin']], function () {
        //
        Route::get('/dashboard',function () {
            return view('pages.dashboard');
        });

        // Route::resource([
        //     'roles' => 'RoleController',
        //     'users' => 'UserController'
        // ]);
        Route::resource('roles','RoleController');
        Route::resource('users','UserController');
    });

    Route::group(['middleware' => ['can:read']], function () {
        //
        Route::resource('moduls','ModulController');
    });
});
