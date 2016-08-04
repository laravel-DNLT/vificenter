<?php namespace Modules\Product\Entities;
   
use Illuminate\Database\Eloquent\Model;

class Cate extends Model {
    protected $table = 'cates';
    protected $fillable = ['id','title','alias','parent_id'];
    
    public function product() {
        return $this->hasMany('Modules\Product\Entitites\Product');
    }

}