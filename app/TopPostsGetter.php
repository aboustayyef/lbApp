<?php

namespace App;
use App\Post;

class TopPostsGetter {
	private $posts;
	public function __construct($howmany = 5){

		$estimatedPostsPerPeriod= 30; 
		
		/*
			How this works
			1- get the latest X posts, where X is the estimated posts per period
			2- from those, take the 5 most popular
		*/
		
		$temp = Post::orderBy('post_timestamp', 'desc')->take($estimatedPostsPerPeriod)->with('blog')->get()->sortByDesc('post_socialScore');

		$temp->splice($howmany);

		$this->posts = $temp;
	}
	public function get(){
		return $this->posts;
    }
}
