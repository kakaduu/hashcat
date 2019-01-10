<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
use App\News;

class CategoryController extends Controller
{
    public function index()
    {
        $news = \App\News::orderBy('created_at','desc')->paginate(10);
        $categories = \App\Category::all();
        return view('pages.index', compact('categories','news'));
    }

    public function show($id)
    {
        $category=\App\Category::find($id);
    }

    public function create()
    {
        $categories= DB::table('categories')->select('name', 'id')->get();
        return view('posts.create', compact('categories', $categories));
    }

    public function edit()
    {
        $categories= DB::table('categories')->select('name', 'id')->get();
        return view('posts.edit', compact('categories', $categories));
    }
}
