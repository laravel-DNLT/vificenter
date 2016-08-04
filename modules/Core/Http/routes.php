<?php

use Illuminate\Support\Facades\DB;

Route::group(['middleware' => 'web','namespace' => 'Modules\Core\Http\Controllers'], function()
{
	
//	Route::get('/', function() {
//		$products = DB::table('products')->select('id','title')->get();
////		dd($nproduct);
//		return view('pages.home', compact('products'));
//	});
//	Route::get('/about', 'CoreController@about');
//	Route::get('/gallery', 'CoreController@gallery');
//	Route::get('/services', 'CoreController@services');
//	Route::get('/contact', 'CoreController@contact');
//	Route::group(['prefix' => 'video'], function() {
////		Route::get('/game-show', 'CoreController@gameshow');
////		Route::get('/truong-giang', 'CoreController@truonggiang');
////		Route::get('/hoai-linh', 'CoreController@hoailinh');
////		Route::get('/tran-thanh', 'CoreController@tranthanh');
////		Route::get('/haha-tv', 'CoreController@hahatv');
////		Route::get('/fap-tv', 'CoreController@faptv');
//		Route::get('/tat-ca-video', 'CoreController@allvideo');
//	});
//
//	Route::get('/danh-muc', 'CoreController@category');
//	Route::get('/danh-muc/{id}','CoreController@danhmuc');
//	Route::get('/gioi-thieu', function() {
//		return view('pages.about');
//	});
//	Route::get('/lien-he', function() {
//		return view('pages.contact');
//	});
});