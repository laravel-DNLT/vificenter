<?php
//@todo config redis route
use Illuminate\Support\Facades\Redis;

Route::group(['middleware' => 'web', 'prefix' => 'chat', 'namespace' => 'Modules\Chat\Http\Controllers'], function()
{

	Route::get('/', function(){
		//Redis::set('name','Chan Tam');
		//return Redis::get('name');
		//return Redis::hget('preferences','length');
		//Cache::put('foo','bar',10);
		//return Cache::get('foo');
		$data=[
			'event'=> 'UserSignedUp',
			'data'=>[
				'username'=>'ChanTam'
			]
		];
		Redis::publish('test-channel',json_encode($data));
		return view('auth.chat');

	});

});