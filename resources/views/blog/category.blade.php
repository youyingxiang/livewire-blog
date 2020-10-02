@extends('blog.layout')

@section('content')
    <main>
        <div class="block md:flex break-all">
        <livewire:post-list-category/>
        <livewire:right-card/>
        </div>
    </main>
@endsection
