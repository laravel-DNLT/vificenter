<?php namespace Modules\Core\Http\Controllers;

use Alaouy\Youtube\Youtube;
use Pingpong\Modules\Routing\Controller;

class CoreController extends Controller {

	public $youtube;
	public function index()
	{
//		$TEST_API_KEY = 'AIzaSyDDefsgXEZu57wYgABF7xEURClu4UAzyB8';
//		$this->youtube = new Youtube($TEST_API_KEY);
//		$vID = ['aSlZMXBGr7g', 'YCsfuCcsQ1Y','FU5X-MwL7hc','y6xlof32F94','lLO2-XaO9Xc','64FoFqx4W8c','EDaD0xb_wvI','m6Z2YoxwBq8','pd-Syinsrpk','OvtlVBp5eaw'];
//		$response = $this->youtube->getVideoInfo($vID);

//		return view('pages.home',['response' => $response],['vID' => $vID]);
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
	public function gameshow() {
		$TEST_API_KEY = 'AIzaSyDDefsgXEZu57wYgABF7xEURClu4UAzyB8';
		$this->youtube = new Youtube($TEST_API_KEY);
		$vID = ['YCsfuCcsQ1Y', '64FoFqx4W8c','QUj7ubxXLT8','oyW7yhQdyZk','WPBXl44a-1U','0_3fHvu1mIE','yT25o_6pJfg','lQQTgPeEClU','JAJD8A48KOU','nGiUOh4XkY8','sW1Jf9RwT5M','39py9I5BqWU'];
		$response = $this->youtube->getVideoInfo($vID);
		return view('video.game-show',['response' => $response],['vID' => $vID]);
	}
	public function truonggiang() {
		$TEST_API_KEY = 'AIzaSyDDefsgXEZu57wYgABF7xEURClu4UAzyB8';
		$this->youtube = new Youtube($TEST_API_KEY);
		$vID = ['FU5X-MwL7hc', 'EDaD0xb_wvI','usc4RBGdbjk','vSZBgs-igL8','xDxav1erukg','Fs4d8lLPaB0','70Q6mm543yI','6R7eAe_yaNg','TWvaBWifTOw','sC9O8GaDuXg','5e4rhMyeDkg','SBYSKIGfNqU'];
		$response = $this->youtube->getVideoInfo($vID);

		return view('video.truong-giang',['response' => $response],['vID' => $vID]);
	}
	public function hoailinh() {
		$TEST_API_KEY = 'AIzaSyDDefsgXEZu57wYgABF7xEURClu4UAzyB8';
		$this->youtube = new Youtube($TEST_API_KEY);
		$vID = ['Q8EtgvkUJKs', 'm6Z2YoxwBq8','exZNGXQej_M','PEANpqNeuP8','JZiJQZDMb74','4SFnaMeokbo','_hoBRcE5TFo','tdCACS02qkI','DgMDvophnEw','YAcF7pwcnQk'];
		$response = $this->youtube->getVideoInfo($vID);

		return view('video.hoai-linh',['response' => $response],['vID' => $vID]);
	}
	public function tranthanh() {
		$TEST_API_KEY = 'AIzaSyDDefsgXEZu57wYgABF7xEURClu4UAzyB8';
		$this->youtube = new Youtube($TEST_API_KEY);
		$vID = ['aSlZMXBGr7g', 'JVUQxd777UY','uGlhD1QjPkw','_1Exy1Mw4h4','JutHAuE5CLc','reAmVLexLV8','i5unXxta86Q','KJRszyB9Gzs','pd-Syinsrpk','OvtlVBp5eaw'];
		$response = $this->youtube->getVideoInfo($vID);

		return view('video.tran-thanh',['response' => $response],['vID' => $vID]);
	}
	public function hahatv() {
		$TEST_API_KEY = 'AIzaSyDDefsgXEZu57wYgABF7xEURClu4UAzyB8';
		$this->youtube = new Youtube($TEST_API_KEY);
		$vID = ['y6xlof32F94', 'dOzGk6svm4U','Y4MH0vVtjhg','SEgk2JHFgZg','mYYe94C6kY0','ePBp2-HUad0','r4OfW3exejE','Y14AmnAuBvE','3E4kkic8kCo','9E0ZJtdCD-k'];
		$response = $this->youtube->getVideoInfo($vID);

		return view('video.haha-tv',['response' => $response],['vID' => $vID]);
	}
	public function faptv() {
		$TEST_API_KEY = 'AIzaSyDDefsgXEZu57wYgABF7xEURClu4UAzyB8';
		$this->youtube = new Youtube($TEST_API_KEY);
		$vID = ['lLO2-XaO9Xc', '6UR1X1UlHv0','DMjoypnARKs','4H6PeCmmabo','-k_UI4_g5-c','iFaNW37rbzk','Pb07yPQ1Rp8','_KtB_YoUwj8','vgCyUPW30R0','TF4O9_zOG0E'];
		$response = $this->youtube->getVideoInfo($vID);

		return view('video.fap-tv',['response' => $response],['vID' => $vID]);
	}
	public function allvideo() {
		return view('video.all-video');
	}
}