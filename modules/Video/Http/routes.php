<?php

Route::group(['middleware' => 'web', 'prefix' => 'video', 'namespace' => 'Modules\Video\Http\Controllers'], function()
{
	Route::get('/{id}', 'VideoController@index');
});