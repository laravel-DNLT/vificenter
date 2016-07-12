<?php namespace Modules\Video\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class VideoController extends Controller {
	
	public function index()
	{
		return view('video.watch');
	}
	
}