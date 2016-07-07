<?php

Route::group(['middleware' => 'web', 'prefix' => 'member', 'namespace' => 'Modules\Member\Http\Controllers'], function()
{
	Route::get('/', ['as' => 'pages.register','uses' => 'MemberController@index']);
	Route::post('/', ['as' => 'pages.register','uses' =>'MemberController@postIndex']);
	Route::get('/profile', ['as' => 'pages.profile','uses' => 'MemberController@profile', 'middleware' => 'auth']);
	Route::get('/login', ['as' => 'pages.login','uses' => 'MemberController@login']);
	Route::post('/login', ['as' => 'pages.login','uses' => 'MemberController@postLogin']);

});