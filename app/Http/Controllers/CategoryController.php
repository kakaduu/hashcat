<?php

namespace Hashcat\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories=\Hashcat\Models\Category::all()->sortBy('name');         
        return view('welcome', compact('categories')); 
        
    }
}
