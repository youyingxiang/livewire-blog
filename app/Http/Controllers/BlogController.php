<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class BlogController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('blog.index');
    }

    /**
     * @return View
     */
    public function detail(): View
    {
        return view('blog.detail');
    }

    public function list(): View
    {
        return view('blog.list');
    }
}
