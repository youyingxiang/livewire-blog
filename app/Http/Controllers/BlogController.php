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
     * @param string $category
     * @param int $id
     * @param BlogRepository $repository
     * @return View
     */
    public function detail(string $category, int $id, BlogRepository $repository): View
    {
        $post = $repository->getPostById($id);
        return view('blog.detail',compact('post'));
    }

    public function category(string $category = null)
    {

    }
}
