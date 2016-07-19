<?php

Route::group(['middleware' => 'web', 'prefix' => 'lms', 'namespace' => 'Modules\Lms\Http\Controllers'], function()
{
	Route::auth();
	Route::get('/', 'LmsController@index');
});