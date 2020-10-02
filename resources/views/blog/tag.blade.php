@extends('blog.layout')

@section('content')
    <div class="block md:flex break-all">
        <livewire:post-list-tag/>
        <livewire:right-card/>
    </div>
@endsection
