<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display the blog index page.
     *
     * @return View The blog.blog.blade.php view
     */
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::orderBy('created_at', 'desc')->get()
        ]);
    }

    /**
     * Display the blog posts pages.
     *
     * @return View The blog post view or 404 error.
     */
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('posts.show', [
            'post' => $post
        ]);
    }

    /**
     * Create a new Post.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created Post in storage.
     */
    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'body' => 'required',
            'summary' => 'required',
        ]);

        // Create a new Post model object, mass-assign its attributes with
        // the validated data and store it to the database
        Post::create($validated);

        // Redirect to the blog index page
        return redirect()->route('posts.index')->with('success_create', 'Post created successfully.');
    }

    /**
     * Edit the Post.
     */
    public function edit($slug)
    {
        // Find the post by its slug
        $post = Post::where('slug', $slug)->firstOrFail();

        return view('posts.edit', ['post' => $post]);
    }

    /**
     * @param Request $request
     * @param Post $post
     * @return RedirectResponse
     */
    public function update(Request $request, string $slug)
    {
        // Validate the request
        $validated = $request->validate([
            'title' => 'required | min:10',
            'slug' => 'required|unique:posts,slug|min:10',
            'body' => 'required | min:10',
            'summary' => 'required',
        ]);

        // Use `update` to mass (re)assign updated attributes
        $post = Post::where('slug', $slug)->firstOrFail();
        $post->update($validated);

        // Redirect to the blog show page
        return redirect()->route('posts.index')->with('success_update', 'Post updated successfully');
    }

    /**
     * Delete a post.
     */
    public function destroy($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        $post->delete();

        return redirect()->route('posts.index', $post)->with('success', 'Post deleted successfully.');
    }
}
