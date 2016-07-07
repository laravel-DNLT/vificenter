<?php namespace Modules\Member\Entities;
   
use Illuminate\Database\Eloquent\Model;

class Member extends Model {

    protected $fillable = ['email','password'];

    protected $hidden = ['password', 'remember_token'];
}