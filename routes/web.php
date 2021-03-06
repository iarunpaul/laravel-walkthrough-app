<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/welcome', function () {

    return [ 'foo' => 'bar'];
});

Route::get('/test', function () {

	$name = request('name');
	return view('test', [
	 'name' => $name
		]);
});

/* Route::get('/post/{post}', function ($post){
	$posts = [
		'my-first-post' => 'This is my first post',
		'my-second-post' => 'This is my my-second-post'
	];
	if ( ! array_key_exists($post, $posts)) {
		abort(404, 'Sorry the requested page does not exist!');
	};
	return view('post', [
		'post' => $posts[$post]
	]);
});
*/
Route::get('/post/{post}', 'PostsController@show');