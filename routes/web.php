<?php

Route::get('/', 'BaseController@getIndex');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/news', 'TypeController@getNews');
Route::get('/media', 'TypeController@getMedia');

Route::get('/news/{id}/{url?}', 'TypeController@getNewsDetail')->where(['id' => '[0-9]+', 'name' => '[A-z0-9_]+']);
Route::get('/media/{id}/{url?}', 'TypeController@getMediaDetail')->where(['id' => '[0-9]+', 'name' => '[A-z0-9_]+']);