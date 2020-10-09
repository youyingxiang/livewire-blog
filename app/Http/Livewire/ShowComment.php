<?php

namespace App\Http\Livewire;

use App\Models\PostModel;
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
    public function mount(PostModel $post): void
    {
        $this->postId = $post->id;
        $this->comments = $post->comments;
        $this->comments_count = $post->comments->count() ?? 0;
    }

    /**
     * $params.
     */
    public function getCommens(int $postId): void
    {
        $post = BlogRepository::getPostById($postId);
        $this->comments = $post->comments;
        $this->comments_count = $post->comments->count() ?? 0;
    }

    /**
     * @return View
     */
    public function render(): View
    {
        return view('livewire.show-comment');
    }
}
