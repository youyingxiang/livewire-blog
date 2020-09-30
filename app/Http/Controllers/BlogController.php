<?php

namespace App\Http\Controllers;

use App\Repositories\BlogRepository;
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
     * @param string $category_slug
     * @param int $id
     * @param BlogRepository $repository
     * @return View
     */
    public function detail(string $category_slug, int $id, BlogRepository $repository): View
    {
        $post = $repository->getPostById($id);

        return view('blog.detail', compact('post'));
    }

    /**
     * @param null|string $category_slug
     * @return View
     */
    public function category(?string $category_slug = null): View
    {
        return view('blog.category',compact('category_slug'));
    }
}
