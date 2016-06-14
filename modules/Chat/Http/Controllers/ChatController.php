<?php namespace Modules\Chat\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class ChatController extends Controller {
	
	public function index()
	{
		return view('chat::index');
	}
	
}