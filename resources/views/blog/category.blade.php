@extends('blog.layout',['title'=> $category_slug,'desc'=>$category_slug])

@section('content')
    <div class="max-w-3xl mx-auto px-4 sm:px-6 xl:max-w-5xl xl:px-0">
        <main>
            <livewire:post-list/>
        </main>
    </div>
@endsection
