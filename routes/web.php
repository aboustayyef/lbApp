<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('app');
});

// Apis

Route::group(['prefix'=>'api'], function(){
	
	// All Posts
	Route::get('posts/all/{from}/{howmany}', function($from, $howmany){
		return App\Post::with('blog')->orderBy('post_timestamp','desc')->skip($from)->take($howmany)->get();
	});

	Route::get('posts/top/{howmany?}', function($howmany=5){
		return getTopPosts($howmany);
	});

});


