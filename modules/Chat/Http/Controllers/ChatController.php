<?php namespace Modules\Chat\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class ChatController extends Controller {

	public function __construct()
	{
		$this->middleware('guest');
	}
	public function sendMessage(){
		$redis = LRedis::connection();
		$data = ['message' => Request::input('message'), 'user' => Request::input('user')];
		$redis->publish('message', json_encode($data));
		return response()->json([]);
	}
	
}