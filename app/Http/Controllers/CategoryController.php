<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories=\App\Models\Category::all()->sortBy('name');         
        return view('welcome', compact('categories')); 
        
    }
}
