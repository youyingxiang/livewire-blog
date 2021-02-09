@extends('blog.layout',['title'=> $category_slug . '-' . blog_default_title(),'desc' => $category_slug])

@section('content')
    <main>
        <div class="block md:flex break-all">
        <livewire:post-list-category/>
        <livewire:right-card/>
        </div>
    </main>
@endsection
