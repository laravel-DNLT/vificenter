<?php namespace Modules\Blog\Http\Controllers\Admin;

use Pingpong\Modules\Routing\Controller;

class UploadController extends Controller {
	
	public function index()
	{
		return view('blog::index');
	}
	
}