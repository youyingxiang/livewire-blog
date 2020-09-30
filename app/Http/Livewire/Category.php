<?php

namespace App\Http\Livewire;

use App\Models\CategoryModel;
use Illuminate\View\View;
use Livewire\Component;

class Category extends Component
{
    /**
     * @var CategoryModel
     */
    public $category;

    public $slug;

    /**
     * @param CategoryModel $category
     */
    public function mount(CategoryModel $category): void
    {
        $this->slug = request()->route()->parameter('category_slug');
        $this->category = $category;
    }

    /**
     * @return View
     */
    public function render(): View
    {
        return view('livewire.category');
    }
}
