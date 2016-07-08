<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::auth();

Route::get('/home', 'HomeController@index');
//
Route::get('/danh-muc', function() {
   return view('video.categories');
});
Route::get('/gioi-thieu', function() {
   return view('pages.about');
});
Route::get('/lien-he', function() {
   return view('pages.contact');
});
Route::get('/blog', function() {
   return view('pages.blog');  
});
Route::get('/blog/single-blog', function() {
   return view('pages.single-blog'); 
});
Route::group(['prefix' => 'video'], function() {
   Route::get('/tat-ca-video', function() {
        return view('video.all-video');
   });
   Route::get('/game-show', function () {
       return view('video.game-show');
   });
    Route::get('/truong-giang', function() {
       return view('video.truong-giang');
    });
    Route::get('/hoai-linh', function() {
        return view('video.hoai-linh');
    });
    Route::get('/tran-thanh', function() {
        return view('video.tran-thanh');
    });
    Route::get('/haha-tv', function() {
        return view('video.haha-tv');
    });
    Route::get('/fap-tv', function() {
        return view('video.fap-tv');
    });
});