<?php namespace Modules\Member\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class MemberController extends Controller {
	
	public function index()
	{
		return view('member::index');
	}
	
}