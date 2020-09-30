@extends('blog.layout',[
'title'=>'个人博客模板,博客模板,博客系统,技术博客,个人博客,ERP,laravel博客,php博客,laravel-admin,dcat-admin,laravel-livewire,livewire',
'desc' => 'yxx的博客,dcat-admin,laravel-admin开发的分享,erp 开发的分享.'
])

@section('content')
    <div x-data="{ open: false }">
        <button @click="open = true">展開下拉選單</button>

        <ul
                x-show="open"
                @click.away="open = false"
        >
            下拉選單內容
        </ul>
    </div>

    <div x-data="{ tab: 'foo' }">
        <button :class="{ 'active': tab === 'foo' }" @click="tab = 'foo'">Foo</button>
        <button :class="{ 'active': tab === 'bar' }" @click="tab = 'bar'">Bar</button>

        <div x-show="tab === 'foo'">索引標籤 Foo</div>
        <div x-show="tab === 'bar'">索引標籤 Bar</div>
    </div>
@endsection
