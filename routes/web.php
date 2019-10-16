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
    return view('cv');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/cv', 'CvController@index')->name('cv');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
