<?php namespace Modules\Video\Entities;
   
use Illuminate\Database\Eloquent\Model;
use Pingpong\Modules\Facades\Module;

class DanhMuc extends Model {

    protected $table = 'danhmuc';
    
    protected $fillable = ['Ten'];
    
    public function video() {
        return $this->hasMany('Module\Video\Entities\Video');
    }
    
}