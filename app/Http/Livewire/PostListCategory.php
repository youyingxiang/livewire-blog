<?php

namespace App\Http\Livewire;

use App\Repositories\BlogRepository;
use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithPagination;

class PostListCategory extends Component
{
    use WithPagination;
    /**
     * @var string
     */
    public $category_slug;

    /**
     * 初始化.
     */
    public function mount(Request $request): void
    {
        $this->category_slug = $request->route()->parameter('category_slug');
    }

    public function render()
    {
        $repository = new BlogRepository();
        $posts = $repository->getListByCategoryPaginate($this->category_slug, 10);

        return view('livewire.post-list-category', ['posts' => $posts]);
    }
}
