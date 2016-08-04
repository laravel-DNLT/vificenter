<?php namespace Modules\Product\Entities;
   
use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    protected  $table = 'products';
    protected $fillable = ['imagePath','title','description','price','cate_id'];

    public function cate() {
        return $this->belongsToMany('Modules\Product\Entities\Cate');
    }
    

//    public function setTitleAttribute($value)
//    {
//        $this->attributes['title'] = $value;
//
//        if (! $this->exists) {
//            $this->setUniqueSlug($value, '');
//        }
//    }
//
//    protected function setUniqueSlug($title, $extra)
//    {
//        $slug = str_slug($title.'-'.$extra);
//
//        if (static::whereSlug($slug)->exists()) {
//            $this->setUniqueSlug($title, $extra + 1);
//            return;
//        }
//
//        $this->attributes['slug'] = $slug;
//    }
//
//    public function url(Tag $tag = null)
//    {
//        $url = url('product/'.$this->slug);
//        if ($tag) {
//            $url .= '?tag='.urlencode($tag->tag);
//        }
//
//        return $url;
//    }
}