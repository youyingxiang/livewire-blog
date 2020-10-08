<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? blog_default_title() }}</title>
    <meta property="og:title" content="{{ $title ?? blog_default_title()}}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ request()->url() }}">
    <meta property="og:image" content="{{ asset('images/logo.png') }}">
    <meta property="og:image:width" content="500">
    <meta property="og:image:height" content="500">
    <meta property="og:description" content="{{ $desc ?? blog_default_desc() }}">
    <meta property="og:site_name" content="游兴祥的个人博客">
    <meta name="keywords" content="{{ $title ?? blog_default_title() }}"/>
    <meta name="description" content="{{ $desc ?? blog_default_desc() }}"/>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,800,800i,900,900i&v1.7.4">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('css')
    <script src="{{ asset('js/app.js')  }}" defer></script>
    @livewireStyles

</head>
<body class="bg-gray-100 antialiased leading-none" x-data="{ mobile_menu: false,show_login : false}">

<livewire:nav/>
<div class="mt-0 md:mt-5 pt-24 md:pt-0" id="components">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-4 lg:px-8 py-5 bg-gray">
        @yield('content')
    </div>
</div>
@if(empty($hidden_footer))
    <livewire:footer/>
@endif
@livewireScripts
</body>
<script>
    var _hmt = _hmt || [];
    (function () {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?911cd34390e03fb45567e521bff89398";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>
@yield('js')
</html>
