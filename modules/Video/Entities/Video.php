<?php namespace Modules\Video\Entities;
   
use Alaouy\Youtube\Youtube;
use Illuminate\Database\Eloquent\Model;

class Video extends Model {

    protected $table = 'video';
    protected $fillable = [];
    public function thumbnails(){
        return 'https://img.youtube.com/vi/'.$this->fillable->Url.'/mqdefault.jpg';
    }

    public static function getTitle($url){
        $TEST_API_KEY = 'AIzaSyA_mW1DiL6iERRSNVQ1N_xdDnQ7cMpIuoA';
        $youtube = new Youtube($TEST_API_KEY);
        $title= $youtube->getVideoInfo($url)->snippet->title;
        return $title;
    }

    public function danhmuc() {
        return $this->belongsTo('Modules\Video\Entities\DanhMuc');
    }
    
}