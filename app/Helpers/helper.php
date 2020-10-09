<?php

if (! function_exists('blog_default_title')) {
    function blog_default_title(): string
    {
        return '游兴祥博客,技术博客,个人博客,laravel博客系统,php博客系统';
    }
}

if (! function_exists('blog_default_desc')) {
    function blog_default_desc(): string
    {
        return '个人博客模板,博客模板,博客系统,技术博客,个人博客,ERP,laravel博客,php博客,laravel-admin,dcat-admin,laravel-livewire,livewire';
    }
}

if (! function_exists('user_img')) {
    /**
     * @return string
     */
    function user_img(): string
    {
        if (Auth::check()) {
            return Auth::user()->image;
        } else {
            $src = asset('images/logo.png');
        }

        return $src;
    }
}

if (! function_exists('user_comment_limit_key')) {
    function user_comment_limit_key(): string
    {
        return config('cache.user_comment_limit.cache_key').'u:'.Auth::id();
    }
}
