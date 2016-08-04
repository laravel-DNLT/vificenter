<?php

Route::group(['middleware' => 'web', 'namespace' => 'Modules\Product\Http\Controllers'], function()
{
//	Route::get('/', ['as' => 'pages.shop-list','uses' => 'ProductController@index']);
//	Route::get('/add-to-cart/{id}', ['as' => 'pages.cart', 'uses' => 'ProductController@AddToCart']);
	Route::get('product/{id}/{title}',['as' => 'pages.cate', 'uses' => 'ProductController@cate']);
	Route::get('detail/{id}/{title}',['as' => 'pages.product', 'uses' => 'ProductController@product']);
	Route::get('/','ProductController@index');
});

Route::group([
	'middleware' => 'web',
	'prefix' => 'admin',
	'namespace' => 'Modules\Product\Http\Controllers\Admin',
], function () {

	Route::auth();
	Route::resource('product', 'ProductsController', ['except' => 'show']);
	Route::resource('cate', 'CateController', ['except' => 'show']);


});
