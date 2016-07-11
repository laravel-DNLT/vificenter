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
		Route::get('/xoa/{id}',['as' => 'admin.danhmuc.xoa', 'uses' => 'AuthController@getDelete']);
	});
	
});