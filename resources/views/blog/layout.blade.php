<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title }}</title>
    <meta property="og:title" content="{{ $title }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ request()->url() }}">
    <meta property="og:image" content="{{ asset('images/logo.png') }}">
    <meta property="og:image:width" content="500">
    <meta property="og:image:height" content="500">
    <meta property="og:description" content="{{ $desc }}">
    <meta property="og:site_name" content="yxx的个人博客">
    <meta name="keywords" content="{{ $title }}" />
    <meta name="description" content="{{ $desc }}"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,800,800i,900,900i&v1.7.4">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('css')
    <script src="{{ asset('js/app.js')  }}" defer></script>
    @livewireStyles

</head>
<body class="bg-gray-100 h-screen antialiased leading-none">
<livewire:nav/>
@yield('content')
<livewire:footer/>
@livewireScripts
</body>
@yield('js')
</html>
