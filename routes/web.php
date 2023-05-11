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

Route::get('/', function () {
    return view('welcome');
});

route::get('login', 'App\Http\Controllers\AuthController@index')->name('login');
route::post('proses_login', 'App\Http\Controllers\AuthController@proses_login')->name('proses_login');
route::get('logout', 'App\Http\Controllers\AuthController@logout')->name('logout');

//auth
//auth -> admin || User
Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::get('admin', 'App\Http\Controllers\AdminController@index')->name('admin');
    });

    Route::group(['middleware' => ['cek_login:user']], function () {
        Route::get('user', 'App\Http\Controllers\UserController@index')->name('user');
    });
});
