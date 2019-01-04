<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\News;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Welcome To Hashcat Forum';
        return view('pages.index')->with('title', $title);
        /*
        $news = 'this is a test';
        //$categories=\App\Category::all();
        return view('pages.index', compact(['news'=>$news]));

        /*
        $title = 'Welcome To Hashcat Forum';
        $news = \App\News::with('title')->orderBy('created_at','desc')->paginate(10);
        //$category=\App\Category::where('id','=',$id)->first();
        $categories=\App\Category::all();
        return view('pages.index', ['news' => $news, 'categories'=>$categories, 'title'=> $title]);
        //return view('pages.index')->with('news', 'categories', 'title');
                //return view('pages.index', compact('title'));
        //return view('pages.index')->with('title', $title);*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=\App\Category::all()->sortBy('name');
        return view('posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
