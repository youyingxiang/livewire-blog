@extends('blog.layout',['title'=>'博客详情'])

@section('content')
    <div class="max-w-3xl mx-auto px-4 sm:px-6 xl:max-w-5xl xl:px-0">
        <main>
            <livewire:post-list/>
        </main>
    </div>

@endsection
