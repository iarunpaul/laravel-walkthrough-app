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

    public function show(Article $article)
    {
    	// $article = Article::find($Id);
    	return view('articles.show', ['article' => $article]);
    }

    public function create()
    {
    	return view('articles.create');
    }

    public function store()
    {
    	request()->validate([
    		'Title' => 'required',
    		'Excerpt' => 'required',
    		'Body' => 'required'
    	]);
    	$article = new Article;
    	$article->title = request('Title');
    	$article->excerpt = request('Excerpt');
    	$article->body = request('Body');
    	$article->save();
    	return redirect('/articles');

    }

    public function edit(Article $article)
    {
    	// $article = Article::find($Id);
    	return view('articles.edit', compact('article') );
    }

    public function update(Article $article)
    {
    	request()->validate([
    		'Title' => 'required',
    		'Excerpt' => 'required',
    		'Body' => 'required'
    	]);
    	// $article = Article::find($Id);
    	$article->title = request('Title');
    	$article->excerpt = request('Excerpt');
    	$article->body = request('Body');
    	$article->save();
    	return redirect('/articles/'.$article->id);

    }


}

