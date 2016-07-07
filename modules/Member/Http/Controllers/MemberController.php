<?php namespace Modules\Member\Http\Controllers ;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Modules\Member\Entities\Member;
use Pingpong\Modules\Routing\Controller;

class MemberController extends Controller {
	
	public function index()
	{
		return view('pages.register');
	}

	public function postIndex(Request $request)
	{
		$this->validate($request, [
			'email' => 'email|required|unique:members',
			'password' => ['required','min:4']
		]);

		$member = new Member([
			'email' => $request->input('email'),
			'password' => bcrypt($request->input('password'))
		]);
		$member->save();
		return redirect()->back();
	}

	public function profile()
	{
		return view('pages.profile');
	}

	public function login() {
		return view('pages.login');
	}

	public function postLogin(Request $request) {
		$this->validate($request, [
			'email' => 'email|required',
			'password' => 'required|min:4'
		]);
		if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
			return redirect()->route('pages.profile');
		}
		return redirect()->route('pages.register');
	}
	
}