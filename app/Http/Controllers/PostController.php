<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('blog.index');
    }

    public function show($slug)
    {
        if (view()->exists("blog.posts.$slug")) {
            return view("blog.posts.$slug");
        } else {
            abort(404);
        }
    }
}
