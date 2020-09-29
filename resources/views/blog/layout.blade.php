<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{$title}}</title>
    <meta property="og:title" content="">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="https://tallstack.dev/images/tallstack-og.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:description" content="">
    <meta property="og:site_name" content="">
    <meta name="description" content="" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('css')
    <script src="{{ asset('js/app.js')  }}" defer></script>
    @livewireStyles

</head>
<body class="bg-gray-100 h-screen antialiased leading-none">
<livewire:nav/>
@yield('content')
@include('blog.footer')
@livewireScripts
</body>
@yield('js')
</html>
