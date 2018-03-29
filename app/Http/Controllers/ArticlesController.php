<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class ArticlesController extends Controller
{
	public function index() {
		$articles = App\Articles::all();
		return view('welcome', compact('articles'));
	}

	public function show($id) {
		$article = App\Articles::find($id);
		return dd($article);
		// return view('welcome', compact('article'));
	}
}