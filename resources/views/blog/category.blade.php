@extends('blog.layout',['title'=> $category_slug])

@section('content')
    <main>
        <div class="flex">
        <livewire:post-list-category/>
        <livewire:right-card/>
        </div>
    </main>
@endsection
