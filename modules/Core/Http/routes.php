<?php

Route::group(['middleware' => 'web','namespace' => 'Modules\Core\Http\Controllers'], function()
{
	Route::get('/', 'CoreController@index');
});