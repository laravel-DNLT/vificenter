<?php namespace Modules\Core\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class CoreController extends Controller {
	
	public function index()
	{
		return view('pages.home');
	}
	public function about()
	{
		return view('pages.about');
	}
	public function gallery()
	{
		return view('pages.gallery');
	}
	public function services()
	{
		return view('pages.services');
	}
	public function contact()
	{
		return view('pages.contact');
	}

}