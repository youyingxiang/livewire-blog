@extends('blog.layout',[
'title'=>'个人博客模板,博客模板,博客系统,技术博客,个人博客,ERP,laravel博客,php博客,laravel-admin,dcat-admin,laravel-livewire,livewire',
'desc' => 'yxx的博客,dcat-admin,laravel-admin开发的分享,erp 开发的分享.'
])

@section('content')
    <livewire:hot-post/>
    <livewire:ad/>
    <livewire:partner-list/>
@endsection
