<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;

class ArticlesController extends Controller
{
    public function index()
    {
    	$articles = Article::latest()->get();
    	return view('articles.index', ['articles' => $articles]);
    }

    public function show($Id)
    {
    	$article = Article::find($Id);
    	return view('articles.show', ['article' => $article]);
    }

    public function create()
    {
    	return view('articles.create');
    }

    public function store()
    {
    	dump(request()->all());
    }


}

