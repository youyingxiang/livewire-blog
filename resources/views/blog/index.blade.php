@extends('blog.layout',[
'title'=>'个人博客模板,博客模板,博客系统,技术博客,个人博客,ERP,laravel博客,php博客,laravel-admin,dcat-admin,laravel-livewire,livewire',
'desc' => 'yxx的博客,dcat-admin,laravel-admin开发的分享,erp 开发的分享.'
])

@section('content')
    <div class="mt-5" id="components">
        <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8 py-5 bg-white">
            <livewire:hot-post/>
            <livewire:ad/>
            <livewire:partner-list/>
        </div>
    </div>

@endsection
