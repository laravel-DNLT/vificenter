<?php

Route::group(['middleware' => 'web', 'prefix' => 'admin', 'namespace' => 'Modules\Auth\Http\Controllers'], function()
{
	Route::auth();
	Route::get('/', 'AuthController@index');
	Route::group(['prefix' => 'danhmuc'], function() {
		Route::get('/', ['as' => 'admin.danhmuc.index', 'uses' => 'AuthController@danhmuc']);
		Route::get('/them',['as' => 'admin.danhmuc.create', 'uses' => 'AuthController@getThem']);
		Route::post('/them',['as' => 'admin.danhmuc.create', 'uses' => 'AuthController@postThem']);
		Route::get('/sua/{id}',['as' => 'admin.danhmuc.edit', 'uses' => 'AuthController@getSua']);
		Route::post('/sua/{id}',['as' => 'admin.danhmuc.edit', 'uses' => 'AuthController@postSua']);
		Route::get('/xoa/{id}','AuthController@getDelete');
	});
	
	Route::group(['prefix' => 'video'], function() {
		Route::get('/', ['as' => 'admin.video.index', 'uses' => 'AuthController@youtube']);
		Route::get('/them', ['as' => 'admin.video.create', 'uses' => 'AuthController@ThemVideo']);
		Route::post('/them', ['as' => 'admin.video.create', 'uses' => 'AuthController@postVideo']);
	});
});