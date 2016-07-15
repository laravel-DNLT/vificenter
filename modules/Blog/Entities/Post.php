<?php namespace Modules\Blog\Entities;
   
use Illuminate\Database\Eloquent\Model;

class post extends Model {

    protected $dates = ['published_at'];

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;

        if (! $this->exists) {
            $this->attributes['slug'] = str_slug($value);
        }
    }

}