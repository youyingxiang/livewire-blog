@extends('blog.layout',['title'=> $tag,'desc'=>$tag])

@section('content')
    <div class="flex">
        <livewire:post-list-tag/>
        <livewire:right-card/>
    </div>
@endsection
