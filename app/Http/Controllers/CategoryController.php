<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    function index()
    {
        return view('categories',[
            "title"=>"Category",
            "categories"=>Category::all(),
        ]);
    }

    function show(Category $category)
    {
        return view('home',[
            "title"=>"Category ".$category->name,
            "posts"=>$category->post,
        ]);
    }
}
