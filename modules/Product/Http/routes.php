<?php

Route::group(['middleware' => 'web', 'prefix' => 'product', 'namespace' => 'Modules\Product\Http\Controllers'], function()
{
	Route::get('/', ['as' => 'pages.shop-list','uses' => 'ProductController@index']);
	Route::get('/add-to-cart/{id}', ['as' => 'pages.cart', 'uses' => 'ProductController@AddToCart']);
});