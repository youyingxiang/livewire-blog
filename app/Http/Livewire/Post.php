<?php

namespace App\Http\Livewire;

use App\Models\PostModel;
use Livewire\Component;

class Post extends Component
{
    /**
     * @var PostModel
     */
    public $post;

    /**
     * @param Post $post
     */
    public function mount(PostModel $post): void
    {
        $this->post = $post;
    }

    public function render()
    {
        return view('livewire.post');
    }
}
