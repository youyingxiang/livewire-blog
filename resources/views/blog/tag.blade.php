@extends('blog.layout',['title'=> $tag,'desc'=>$tag])

@section('content')
    <div class="max-w-3xl mx-auto px-4 sm:px-6 xl:max-w-5xl xl:px-4 bg-white mt-5">
        <main>
            <livewire:post-list-tag/>
        </main>
    </div>
@endsection
