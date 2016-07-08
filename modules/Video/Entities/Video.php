<?php namespace Modules\Video\Entities;
   
use Illuminate\Database\Eloquent\Model;

class Video extends Model {

    protected $table = 'video';
    
    protected $fillable = [];

    public function danhmuc() {
        return $this->belongsTo('Modules\Video\Entities\DanhMuc');
    }
    
}