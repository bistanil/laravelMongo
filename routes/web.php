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

Route::get('/home', 'HomeController@index')->name('home');

/*Route::post('user/store', 'UserControllerMongo@store')->name('user.store');
Route::post('user/store', 'UserControllerMongo@store')->name('user.store');
Route::get('register', function(){
	return view('register');
})->name('register.user');

Route::get('login', function(){
	return view('login');
})->name('login.user');*/