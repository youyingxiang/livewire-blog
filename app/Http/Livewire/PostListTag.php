<?php

namespace App\Http\Livewire;

use App\Repositories\BlogRepository;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class PostListTag extends Component
{
    use WithPagination;
    /**
     * @var string
     */
    public $tag_name;

    public $tag_id;

    /**
     * 初始化.
     */
    public function mount(Request $request): void
    {
        $tag = explode('-', $request->route()->parameter('tag'));
        [$this->tag_name, $this->tag_id] = $tag;
    }

    /**
     * @return View
     */
    public function render(): View
    {
        $repository = new BlogRepository();

        $posts = $repository->getListByTagPaginate($this->tag_id);

        return view('livewire.post-list-tag', ['posts' => $posts]);
    }
}
