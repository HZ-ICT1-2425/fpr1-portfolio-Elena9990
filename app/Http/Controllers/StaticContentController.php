<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Contracts\View\View;

class StaticContentController extends Controller
{
    /**
     * Display the index page.
     *
     * @return View The blog.blade.php view
     */
    public function index(): View
    {
        return view('index');
    }

    /**
     * Display the profile page.
     *
     * @return View The profile.blade.php view
     */
    public function profile(): View
    {
        return view('profile');
    }

    /**
     * Display the dashboard page.
     *
     * @return View The dashboard.blade.php view
     */
    public function dashboard(): View
    {
        return view('dashboard');
    }
}
