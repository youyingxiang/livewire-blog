<?php

namespace App\Http\Livewire;

use App\Models\PostModel;
use Illuminate\Support\Collection;
use Livewire\Component;

class RandPosts extends Component
{
    /**
     * @var Collection
     */
    public $posts;

    /**
     * 初始化.
     */
    public function mount(): void
    {
        $this->posts = PostModel::latest()->limit(5)->get();
    }

    public function render()
    {
        return view('livewire.rand-posts');
    }
}
