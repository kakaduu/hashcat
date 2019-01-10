<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;

class SearchController extends Controller
{
    public function index()
    {
        return view('posts.search');
    }

    public function search(Request $request)
    {
    $categories = \App\Category::all();
    $query = $request->input('search');
    $articles = Post::select("title")->where('title', 'LIKE', '%' . $query . '%')->paginate(5);

    return view('posts.search', compact('articles', 'query', 'categories'));
    }
}
