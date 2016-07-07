<?php

Route::group(['middleware' => 'web', 'prefix' => 'admin', 'namespace' => 'Modules\Auth\Http\Controllers'], function()
{
	Route::auth();
	Route::get('/', 'AuthController@index');
});