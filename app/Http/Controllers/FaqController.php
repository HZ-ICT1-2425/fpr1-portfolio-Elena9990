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
     * @return View The FAQ view or 404 error.
     */
    public function index()
    {
        $faqs = Faq::all();
        return view('faqs.index', ['faqs' => $faqs]);
    }

    /**
     * Display a specific FAQ page.
     *
     * @param Faq $faq
     * @return View The FAQ view.
     */

    public function show(Faq $faq)
    {
        return view('faqs.show', [
            'faq' => $faq
        ]);
    }

    public function create()
    {
        return view('faqs.create');
    }

    /**
     * Store FAQ.
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
