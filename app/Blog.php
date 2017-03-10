<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $primaryKey = 'blog_id';
    public $incrementing = false;

	public function posts(){
      return $this->hasMany('App\Post','blog_id');
    }
}
