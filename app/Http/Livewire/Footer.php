<?php

namespace App\Http\Livewire;

use App\Models\LinkModel;
use Illuminate\Support\Collection;
use Illuminate\View\View;
use Livewire\Component;

class Footer extends Component
{
    /**
     * @var Collection
     */
    public $links;

    /**
     * 初始化.
     */
    public function mount(): void
    {
        $this->links = LinkModel::get();
    }

    /**
     * @return View
     */
    public function render(): View
    {
        return view('livewire.footer');
    }
}
