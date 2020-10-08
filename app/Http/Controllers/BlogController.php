<?php

namespace App\Http\Controllers;

use App\Repositories\BlogRepository;
use Illuminate\Database\Query\Builder;
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
     * @param int $id
     * @param BlogRepository $repository
     * @return View
     */
    public function detail(int $id, BlogRepository $repository): View
    {
        $post = $repository->getPostById($id);
        $prev = $post->where(function (Builder $builder) use ($id, $post) {
            $builder->where('category_id', $post->category_id);
            $builder->where('id', '>', $id);


        })->orderBy('id', 'asc')->first(['id', 'title']);
        $next = $post->where(function (Builder $builder) use ($id, $post) {
            $builder->where('category_id', $post->category_id);
            $builder->where('id', '<', $id);

        })->orderBy('id', 'desc')->first(['id', 'title']);
        return view('blog.detail', compact('post', 'prev', 'next'));
    }

    /**
     * @param null|string $category_slug
     * @return View
     */
    public function category(?string $category_slug = null): View
    {
        return view('blog.category', compact('category_slug'));
    }

    /**
     * @param string $tag
     * @return View
     */
    public function tag(string $tag): View
    {
        return view('blog.tag', compact('tag'));
    }

    /**
     * @return View
     */
    public function test(): View
    {
        return view('blog.test');
    }
}
