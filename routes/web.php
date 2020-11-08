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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::post('/dashboard','LoginController@login');

Route::get('/login', 'LoginController@index');

Route::get('/myprofile', 'UserController@myProfile')->name('profile');

Route::get('/dashboard','UserController@dashBoard')->name('dashboard');

Route::get('/change_password','UserController@changePassword')->name('change-password');

Route::get('/home', 'HomeController@index')->name('home');
