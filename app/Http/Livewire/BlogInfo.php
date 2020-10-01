<?php

namespace App\Http\Livewire;

use Illuminate\View\View;
use Livewire\Component;

class BlogInfo extends Component
{
    /**
     * @var array
     */
    public $infos = [
        ['key' => '后端框架', 'value' => 'Laravel-8.0', 'url' => 'https://laravel.com/docs/8.x'],
        ['key' => '资源文件', 'value' => 'Tailwindcss', 'url' => 'https://tailwindcss.com/'],
        ['key' => '资源文件', 'value' => 'Alpine.js', 'url' => 'https://github.com/alpinejs/alpine/'],
        ['key' => '后台管理', 'value' => 'Dcat-Admin', 'url' => 'http://www.dcatadmin.com/'],
        ['key' => '项目工具', 'value' => 'Laravel-livewire', 'url' => 'https://laravel-livewire.com/'],

    ];

    /**
     * @return View
     */
    public function render(): View
    {
        return view('livewire.blog-info');
    }
}
