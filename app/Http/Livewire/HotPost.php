<?php

namespace App\Http\Livewire;

use App\Models\PostModel;
use Illuminate\Support\Collection;
use Illuminate\View\View;
use Livewire\Component;

class HotPost extends Component
{
    /**
     * @var Collection
     */
    public $hot_posts;

    /**
     * 初始化.
     */
    public function mount(): void
    {
        $this->hot_posts = PostModel::where('is_hot', PostModel::HOT_YES)->limit(3)->get();
    }

    /**
     * @return View
     */
    public function render(): View
    {
        return view('livewire.hot-post');
    }
}
