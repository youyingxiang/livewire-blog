<?php

namespace App\Http\Livewire;

use App\Models\PartnerModel;
use Illuminate\Support\Collection;
use Illuminate\View\View;
use Livewire\Component;

class PartnerList extends Component
{
    /**
     * @var Collection
     */
    public $partners;

    /**
     * 初始化.
     */
    public function mount(): void
    {
        $this->partners = PartnerModel::orderBy('order', 'desc')->get();
    }

    /**
     * @return View
     */
    public function render(): View
    {
        return view('livewire.partner-list');
    }
}
