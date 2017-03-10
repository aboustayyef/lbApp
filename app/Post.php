<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $primaryKey = 'post_id';

	public function blog(){
		return $this->belongsTo('App\Blog', 'blog_id');
	}
}
