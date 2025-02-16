<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class PostController extends Controller
{
    /**
     * Display the blog index page.
     *
     * @return View The blog.index.blade.php view
     */
    public function index(): View
    {
        return view('blog.index');
    }

    /**
     * Display the blog posts pages.
     *
     * @param $slug
     * @return View The blog post view or 404 error.
     */
    public function show($slug): View
    {
        if (view()->exists("blog.posts.$slug")) {
            return view("blog.posts.$slug");
        } else {
            abort(404);
        }
    }
}
