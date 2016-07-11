<?php

namespace Modules\Auth\Http\Controllers;

use App\User;
use Modules\Video\Entities\DanhMuc;
use Symfony\Component\HttpFoundation\Request;
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
	
	public function danhmuc() {
		$danhmuc = DanhMuc::all();
		return view('admin.danhmuc.index',['danhmuc' => $danhmuc]);
	}

	public function getThem() {
		return view('admin.danhmuc.create');
	}

	public function postThem(Request $request) {
		$this->validate($request,[
			'Ten' => 'required|min:3|max:100'
		],[
			'Ten.required' => 'Không Được Để Trống',
			'Ten.min' => 'Ít Nhất 3 Ký Tự',
			'Ten.max' => 'Nhiều Nhất 100 Ký Tự'
		]);
		$danhmuc = new DanhMuc();
		$danhmuc->Ten = $request->Ten;
		$danhmuc->save();
		return redirect()->route('admin.danhmuc.index')->with('thongbao', 'Thêm Thành Công');
	}

	public function getSua($id) {
		$danhmuc = DanhMuc::find($id);
		return view('admin.danhmuc.edit', ['danhmuc' => $danhmuc]);
	}

	public function postSua(Request $request,$id) {
		$danhmuc = DanhMuc::find($id);
		$this->validate($request,[
			'Ten' => 'required|min:3|max:100|unique:danhmuc'
		],[
			'Ten.required' => 'Không Được Để Trống',
			'Ten.min' => 'Ít Nhất 3 Ký Tự',
			'Ten.max' => 'Nhiều Nhất 100 Ký Tự',
			'Ten.unique' => 'Không Được Trùng'
		]);
		$danhmuc->Ten = $request->Ten;
		$danhmuc->save();
		return redirect('admin/danhmuc/sua/'.$id)->with('thongbao', 'Sửa Thành Công');
	}

	public function getDelete($id) {
		$danhmuc = DanhMuc::find($id);
		$danhmuc->delete();

		return redirect('admin/danhmuc')->with('thongbao', 'Bạn Đã Xóa Thành Công');
	}

}
