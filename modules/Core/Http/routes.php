<?php

Route::group(['middleware' => 'web','namespace' => 'Modules\Core\Http\Controllers'], function()
{
	Route::get('/', 'CoreController@index');
	Route::get('/about', 'CoreController@about');
	Route::get('/gallery', 'CoreController@gallery');
	Route::get('/services', 'CoreController@services');
	Route::get('/contact', 'CoreController@contact');
});