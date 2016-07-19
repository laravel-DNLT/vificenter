<?php namespace Modules\Auth\Http\Controllers;

use App\User;
use DB;
use Pingpong\Modules\Routing\Controller;

class UserController extends Controller {
	
	public function index()
	{
		$users = DB::table('users')->paginate(10);

		return view('admin.users.index', ['users' => $users]);
	}


	public function create()
	{
		return View('admin.users.create');
	}
	
}