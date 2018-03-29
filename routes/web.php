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


Route::get('/', 'PostsController@index');


// Route::get('/', 'ArticlesController@index');
// Route::get('/article/{article}', 'ArticlesController@show');



// Route::get('/', function () {
// 	// $articles = DB::table('articles')->get();
// 	$articles = App\Articles::all();
// 	return view('welcome', compact('articles'));
// });


// Route::get('article/{article}', function ($id) {
// 	// $post = DB::table('posts')->find($id);
// 	$article = App\Articles::find($id);
// 	dd($article);
// 	return view('welcome.show', compact('article'));
// });

// Route::get('/test', function () {
// 	$nav_list = [
// 		'First',
// 		'Second',
// 		'Last'
// 	];
// 	return view('test', compact('nav_list'));
// });