<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $faqs = Faq::all();
        return view('faqs.index', ['faqs' => $faqs]);
    }

    /**
     * Display the blog posts pages.
     *
     * @return View The FAQ view or 404 error.
     */
    public function show(Faq $faq): View
    {
        return view('faqs.show', [
            'faq' => $faq
        ]);
    }

    /**
     * Create a new post.
     *
     * @return View
     */
    public function create(): View
    {
        return view('faqs.create');
    }

    /**
     * Store a newly created Post in storage.
     */
    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'question' => 'required',
            'answer' => 'required'
        ]);

        // Create a new Post model object, mass-assign its attributes with
        // the validated data and store it to the database
        $faq = Faq::create($validated);

        // Redirect to the blog index page
        return redirect()->route('faqs.index')->with('success_create', 'FAQ created successfully.');
    }

    /**
     * Edit a FAQ.
     */
    public function edit(Faq $faq)
    {
        return view('faqs.edit', [
            'faq' => $faq
        ]);
    }

    /**
     * @param Request $request
     * @param Faq $faq
     * @return RedirectResponse
     */
    public function update(Request $request, Faq $faq)
    {
        // Validate the request
        $validated = $request->validate([
            'question' => 'required',
            'answer' => 'required'
        ]);

        // Use `update` to mass (re)assign updated attributes
        $faq->update($validated);

        // Redirect to the blog show page
        return redirect()->route('faqs.index', $faq)->with('success_update', 'FAQ updated successfully.');
    }

    /**
     * Delete a FAQ.
     */
    public function destroy(Faq $faq)
    {
        $faq->delete();

        return redirect()->route('faqs.index')->with('success', 'FAQ deleted successfully.');
    }
}
