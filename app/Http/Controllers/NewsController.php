<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::orderBy('created_at','desc')->paginate(10);
        $categories=\App\Category::all();
        return view('pages.index', ['news' => $news, 'categories'=>$categories]);
    }
}
