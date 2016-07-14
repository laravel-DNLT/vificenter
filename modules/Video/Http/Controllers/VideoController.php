<?php namespace Modules\Video\Http\Controllers;

use Carbon\CarbonInterval;
use Modules\Video\Entities\Video;
use Alaouy\Youtube\Youtube;
use Pingpong\Modules\Routing\Controller;

class VideoController extends Controller {

	public $youtube;
	public function index($id)
	{
		$TEST_API_KEY = 'AIzaSyA_mW1DiL6iERRSNVQ1N_xdDnQ7cMpIuoA';
		$this->youtube = new Youtube($TEST_API_KEY);
		$video = Video::select('id','Url','Descriptions','idDanhMuc')->orderBy('id', 'DESC')->where('id',$id)->first();
		$video_cate = Video::where('idDanhMuc',$video->idDanhMuc)->get();
		foreach($video_cate as $item) {
			$item->thumbnails = 'https://img.youtube.com/vi/'.$item->Url.'/mqdefault.jpg';
			$item->title= $this->youtube->getVideoInfo($item->Url)->snippet->title;
			$item->time= CarbonInterval::instance(new \DateInterval($this->youtube->getVideoInfo($item->Url)->contentDetails->duration));
			$item->des = $this->youtube->getVideoInfo($item->Url)->snippet->description;
		}
//		$video->thumbnails = $this->youtube->getVideoInfo($video->Url)->snippet->thumbnails->default->url;
		$video->title= $this->youtube->getVideoInfo($video->Url)->snippet->title;
//		$video->time= CarbonInterval::instance(new \DateInterval($this->youtube->getVideoInfo($video->Url)->contentDetails->duration));
		$video->des = $this->youtube->getVideoInfo($video->Url)->snippet->description;
		return view('video.watch',['video' => $video], ['video_cate' => $video_cate]);
	}
	
	
}