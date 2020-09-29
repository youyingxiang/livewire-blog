<?php

namespace App\Http\Livewire;

use App\Admin\Repositories\Post;
use App\Models\PostModel;
use Illuminate\View\View;
use Livewire\Component;

class Card extends Component
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

    /**
     * @return View
     */
    public function render(): View
    {
        return view('livewire.card');
    }
}
