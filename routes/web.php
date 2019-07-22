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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'BaseController@getIndex');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/news', 'TypeController@getNews');
Route::get('/media', 'TypeController@getMedia');

Route::get('/news/{id}/{url?}', 'TypeController@getItem');