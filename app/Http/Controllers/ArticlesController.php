<?php

namespace App\Http\Controllers;

use Request;
use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $articles = Article::latest()->get();
        return view('articles.index')->with('articles', $articles);
    }

    public function show($id) {
        $article = Article::findOrFail($id);
        return view('articles.show', compact('article'));
    }

    public function create() {
        return view('articles.create');
    }

    public function store() {
        $input = Request::all();
        $input['published_at'] = Carbon::now();

        $article = Article::create($input);

        return redirect('articles');
    }

}
