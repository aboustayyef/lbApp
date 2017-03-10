<?php 

	function getTopPosts($howmany = 5){
		return (new App\TopPostsGetter($howmany))->get();
	}

?>