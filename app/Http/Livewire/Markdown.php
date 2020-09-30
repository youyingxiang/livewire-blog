<?php

namespace App\Http\Livewire;

use Illuminate\Support\Str;
use Illuminate\View\View;
use Livewire\Component;

class Markdown extends Component
{
    /**
     * @var string
     */
    public $content;
    /**
     * @var string
     */
    public $em_id;

    /**
     * 初始化.
     */
    public function mount(string $content): void
    {
        $this->em_id = 'mdk-'.Str::random(10);
        $this->content = $content;
    }

    /**
     * @return View
     */
    public function render(): View
    {
        return view('livewire.markdown');
    }
}
