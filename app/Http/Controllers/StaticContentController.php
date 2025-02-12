<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class StaticContentController extends Controller
{
    /**
     * Display the index page.
     *
     * @return Factory|View|Application
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Display the profile page.
     *
     * @return Factory|View|Application
     */
    public function profile()
    {
        return view('profile');
    }

    /**
     * Display the dashboard page.
     *
     * @return Factory|View|Application
     */
    public function dashboard()
    {
        return view('dashboard');
    }

    /**
     * Display the faq page.
     *
     * @return Factory|View|Application
     */
    public function faq()
    {
        return view('faq');
    }
}
