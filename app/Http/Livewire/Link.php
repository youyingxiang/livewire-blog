<?php

namespace App\Http\Livewire;

use App\Models\LinkModel;
use Illuminate\View\View;
use Livewire\Component;

class Link extends Component
{
    /**
     * @var LinkModel
     */
    public $link;

    /**
     * @param LinkModel $link
     */
    public function mount(LinkModel $link): void
    {
        $this->link = $link;
    }

    /**
     * @return View
     */
    public function render(): View
    {
        return view('livewire.link');
    }
}
