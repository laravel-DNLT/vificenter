<?php

Route::group(['middleware' => 'web', 'prefix' => 'blog', 'namespace' => 'Modules\Blog\Http\Controllers'], function()
{
	Route::get('/', 'BlogController@index');

	Route::get('/{slug}', 'BlogController@showPost');


});

Route::group([
	'middleware' => 'web',
	'prefix' => 'admin',
	'namespace' => 'Modules\Blog\Http\Controllers\Admin',
], function () {

		Route::auth();
		Route::resource('post', 'PostController', ['except' => 'show']);
		Route::resource('tag', 'TagController', ['except' => 'show']);
		Route::get('upload', 'UploadController@index');

});