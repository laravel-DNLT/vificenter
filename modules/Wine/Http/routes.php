<?php

Route::group(['middleware' => 'web', 'namespace' => 'Modules\Wine\Http\Controllers'], function()
{
	Route::get('/', 'WineController@index');
	Route::get('/contact', 'WineController@contact');
	Route::get('/sale-contact', 'WineController@salecontact');
	Route::get('/change-order', 'WineController@changeorder');
	Route::get('/change-request', 'WineController@changerequest');
	Route::get('/purchase-order', 'WineController@purchase');
	Route::get('/request-quote', 'WineController@request');
	Route::get('/supply-form', 'WineController@supply');
	Route::get('/vendor', 'WineController@vendor');
	Route::get('/cognac', 'WineController@cognac');
	Route::get('/champagne', 'WineController@champagne');
	Route::get('/red-wine', 'WineController@redwine');
	Route::group(['prefix' => 'cognac'], function(){
		Route::get('/selection', 'WineController@selection');
		Route::group(['prefix' => 'selection'], function() {
			Route::get('/cognac-seguinot-sélection', 'WineController@cognacseguinotsélection');
		});
		Route::get('/VSOP', 'WineController@vsop');
		Route::group(['prefix' => 'VSOP'], function() {
			Route::get('VSOP-seguinot', 'WineController@VSOPseguinot');
			Route::get('tour-eiffel', 'WineController@toureiffel');
			Route::get('XO', 'WineController@XO');
			Route::get('age-inconnu', 'WineController@ageinconnu');
			Route::get('reserve', 'WineController@reserve');
			Route::get('vincemus', 'WineController@vincemus');
		});
	});
	
});