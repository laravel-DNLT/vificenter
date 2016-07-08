<?php

namespace Modules\Auth\Http\Controllers;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
	public function index()
	{
		return view('admin.dashboard');
	}
}
