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
     * @var Collection
     */
    public $comments;

    protected $listeners = ['create' => 'getCommens'];

    /**
     * @param $postIds
     */
    public function mount(int $postId): void
    {
        $this->postId = $postId;
        $this->getCommens();
    }

    /**
     * $params
     */
    public function getCommens(): void
    {
        $this->comments = BlogRepository::getCommensByPostId($this->postId);
    }

    /**
     * @return View
     */
    public function render(): View
    {
        return view('livewire.show-comment');
    }


}
