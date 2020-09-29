<?php

namespace App\Http\Livewire;

use App\Models\PartnerModel;
use Illuminate\View\View;
use Livewire\Component;

class Partner extends Component
{
    /**
     *  var PartnerModel.
     */
    public $partner;

    /**
     * 初始化.
     */
    public function mount(PartnerModel $partner): void
    {
        $this->partner = $partner;
    }

    /**
     * @return View
     */
    public function render(): View
    {
        return view('livewire.partner');
    }
}
