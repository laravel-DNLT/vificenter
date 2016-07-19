<?php namespace Modules\Lms\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class LmsController extends Controller {
	public function __construct()
	{
		$this->middleware('auth');
	}
	public function index()
	{
		return view('lms::index');
	}
	
}