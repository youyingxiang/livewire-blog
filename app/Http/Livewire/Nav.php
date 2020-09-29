<?php

namespace App\Http\Livewire;

use App\Models\CategoryModel;
use Illuminate\Support\Collection;
use Illuminate\View\View;
use Livewire\Component;

class Nav extends Component
{
    /**
     * @var Collection
     */
    public $categorys;

    /**
     * 初始化.
     */
    public function mount(): void
    {
        $this->categorys = CategoryModel::orderBy('order', 'desc')->get();
    }

    /**
     * @return View
     */
    public function render(): View
    {
        return view('livewire.nav');
    }
}
