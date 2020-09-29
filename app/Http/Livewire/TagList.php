<?php

namespace App\Http\Livewire;

use Illuminate\Support\Collection;
use Livewire\Component;

class TagList extends Component
{
    /**
     * @var Collection
     */
    public $tags;

    /**
     * 初始化.
     */
    public function mount(Collection $tags): void
    {
        $this->tags = $tags;
    }

    public function render()
    {
        return view('livewire.tag-list');
    }
}
