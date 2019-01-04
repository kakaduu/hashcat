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

    public function listPostsByID($id)
    {
        $posts=\App\Post::where('category_id','=',$id)->get();
        $category=\App\Category::where('id','=',$id)->first();
        $categories=\App\Category::all();
        return view('posts.index', ['posts' => $posts,'category'=> $category, 'categories'=>$categories]);
    }

    public function show($id)
    {
        $category=\App\Category::find($id);
    }

    /*
    public function blog_posts_count()
    {
        return $this->hasOne('App\Post', 'category_id')
            ->selectRaw('category_id, count(*) as aggregate')
            ->groupBy('category_id');
    }

    public function getBlogPostsCountAttribute() {
        if(!array_key_exists('blog_posts_count', $this->relations))
            $this->load('blog_posts_count');

        $related = $this->getRelation('blog_posts_count');
        return $related ? (int) $related->aggregate : 0;
    }*/

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
