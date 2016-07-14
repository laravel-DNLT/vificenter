<?php

namespace Modules\Auth\Http\Controllers;

use Alaouy\Youtube\Youtube;
use App\User;
use Carbon\CarbonInterval;
use Modules\Video\Entities\DanhMuc;
use Modules\Video\Entities\Video;
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
	public $youtube;
	//DANH MỤC
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

	//VIDEO
	public function youtube() {
		$video = Video::all();
		$TEST_API_KEY = 'AIzaSyA_mW1DiL6iERRSNVQ1N_xdDnQ7cMpIuoA';
		$this->youtube = new Youtube($TEST_API_KEY);
		foreach($video as $item) {
			$item->thumbnails = $this->youtube->getVideoInfo($item->Url)->snippet->thumbnails->default->url;
			$item->title= $this->youtube->getVideoInfo($item->Url)->snippet->title;
			$item->time= CarbonInterval::instance(new \DateInterval($this->youtube->getVideoInfo($item->Url)->contentDetails->duration));
			$item->des = $this->youtube->getVideoInfo($item->Url)->snippet->description;
		}
		return view('admin.video.index', ['video' => $video]);
	}

	public function ThemVideo() {
		$danhmuc = DanhMuc::all();
		return view('admin.video.create',['danhmuc' => $danhmuc]);
	}

	public function postVideo(Request $request) {
		 $TEST_API_KEY = 'AIzaSyA_mW1DiL6iERRSNVQ1N_xdDnQ7cMpIuoA';
		 $this->youtube = new Youtube($TEST_API_KEY);
		 $this->validate($request, [
			 'url' => 'required|unique:video',
		 ],[
			'url.required' => 'Đường Dẫn Không Được Bỏ Trống',
			'url.unique' => 'Đường Dẫn Đã Tồn Tại, Vui Lòng Nhập Đường Dẫn Khác ',
		 ]);
		 $video = new Video();
		 $video->idDanhMuc = $request->danhmuc;
		 $video->Url = $this->youtube->parseVIdFromURL($request->url);
		 $video->Descriptions = "";
		 $video->public = $request->rdo;
		 $video->sort = $request->sort;
		 $video->save();

		 return redirect('admin/video/them')->with('thongbao', 'Thêm Thành Công');
	 }
	
	public function getSuaVideo($id){
		$video = Video::find($id);
		$danhmuc = DanhMuc::all();
		return view('admin.video.edit', ['video' => $video], ['danhmuc' =>$danhmuc]);
	}

	public function postSuaVideo(Request $request,$id) {
		 $video = Video::find($id);
		 $TEST_API_KEY = 'AIzaSyA_mW1DiL6iERRSNVQ1N_xdDnQ7cMpIuoA';
		 $this->youtube = new Youtube($TEST_API_KEY);
		 $this->validate($request, [
			 'url' => 'required|unique:video',
		 ],[
			 'url.required' => 'Đường Dẫn Không Được Bỏ Trống',
			 'url.unique' => 'Đường Dẫn Đã Tồn Tại, Vui Lòng Nhập Đường Dẫn Khác ',
		 ]);
		 $video->idDanhMuc = $request->danhmuc;
		 $video->Url = $this->youtube->parseVIdFromURL($request->url);
		 $video->Descriptions = $request->description;
		 $video->public = $request->rdo;
		 $video->sort = $request->sort;
		 $video->save();


		 return redirect('admin/video/sua/'.$id)->with('thongbao', 'Sửa Thành Công');
	 }

	public function xoaVideo($id) {
		$video = Video::find($id);
		$video->delete();

		return redirect('admin/video')->with('thongbao', 'Bạn Đã Xóa Thành Công');
	}
}
