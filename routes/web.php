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

Route::middleware('throttle:10,1')->get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware('throttle:rate_limit,1')->get('/home', 'HomeController@index')->name('home');

Route::get('/logoutOthers/{password}', 'HomeController@logoutOthers')->name('logoutOthers');
