<?php

namespace App\Http\Livewire;

use App\Repositories\BlogRepository;
use Illuminate\Support\Collection;
use Illuminate\View\View;
use Livewire\Component;

class ShowComment extends Component
{
    /**
     * @var int
     */
    public $postId;
    /**
     * @var
     */
    public $parentId;
    /**
     * @var Collection
     */
    public $comments;
    /**
     * @var int
     */
    public $comments_count = 0;
    /**
     * @var array
     */
    protected $listeners = ['create' => 'getCommens'];

    /**
     * @param $postIds
     */
    public function mount(int $postId, int $parentId): void
    {
        $this->getCommens($postId, $parentId);
    }

    /**
     * $params
     */
    public function getCommens(int $postId, int $parentId): void
    {
        $this->postId   = $postId;
        $this->parentId = $parentId;
        $this->comments = BlogRepository::getCommensByPostId($postId, $parentId);
        $this->comments_count = $this->comments->count();
    }



    /**
     * @return View
     */
    public function render(): View
    {
        return view('livewire.show-comment');
    }


}
