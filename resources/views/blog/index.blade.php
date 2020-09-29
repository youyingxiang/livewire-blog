@extends('blog.layout',['title'=>'博客首页'])

@section('content')
    <div class="pb-16 bg-white" id="components">
        <div class="bg-white">
            <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8 py-5">
                <livewire:hot-post/>
                <livewire:ad/>
                <livewire:partner-list/>
            </div>

        </div>
    </div>

@endsection
