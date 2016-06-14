<?php

Route::group(['middleware' => 'web', 'prefix' => 'member', 'namespace' => 'Modules\Member\Http\Controllers'], function()
{
	Route::get('/', 'MemberController@index');
});