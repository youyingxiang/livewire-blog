@extends('blog.layout',['title'=>'博客详情'])

@section('css')
    <link rel="stylesheet" href="{{ asset('vendors/dcat-admin/dcat/plugins/editor-md/css/editormd.preview.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/dcat-admin/dcat/extra/markdown.css') }}">
@endsection

@section('js')
    <script src="https://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="{{ asset('vendors/dcat-admin/dcat/plugins/editor-md/lib/raphael.min.js') }}"></script>
    <script src="{{ asset('vendors/dcat-admin/dcat/plugins/editor-md/lib/marked.min.js') }}"></script>
    <script src="{{ asset('vendors/dcat-admin/dcat/plugins/editor-md/lib/prettify.min.js') }}"></script>
    <script src="{{ asset('vendors/dcat-admin/dcat/plugins/editor-md/lib/underscore.min.js') }}"></script>
    <script src="{{ asset('vendors/dcat-admin/dcat/plugins/editor-md/lib/sequence-diagram.min.js') }}"></script>
    <script src="{{ asset('vendors/dcat-admin/dcat/plugins/editor-md/lib/flowchart.min.js') }}"></script>
    <script src="{{ asset('vendors/dcat-admin/dcat/plugins/editor-md/lib/jquery.flowchart.min.js') }}"></script>
    <script src="{{ asset('vendors/dcat-admin/dcat/plugins/editor-md/editormd.min.js') }}"></script>
    <script>
        editormd.markdownToHTML("content-markdown", {
            htmlDecode: "style,script,iframe",
            emoji: true,
            taskList: true,
            tex: true,  // 默认不解析
            flowChart: true,  // 默认不解析
            sequenceDiagram: true  // 默认不解析
        });
    </script>
@endsection

@section('content')
    <div id="test-editor">
    <textarea style="display:none;">### 关于 Editor.md

**Editor.md** 是一款开源的、可嵌入的 Markdown 在线编辑器（组件），基于 CodeMirror、jQuery 和 Marked 构建。
    </textarea>
    </div>


    <div class="bg-white max-w-3xl mx-auto px-4 sm:px-6 xl:max-w-5xl xl:px-0 mt-5">
        <main>
            <article class="xl:divide-y xl:divide-gray-200">
                <header class="pt-5 xl:pb-2">
                    <div class="space-y-1 text-center">
                        <dl class="space-y-10">
                            <div>
                                <dt class="sr-only">发布日期</dt>
                                <dd class="text-base leading-6 font-medium text-gray-500">
                                    <time datetime="2020-08-25T13:00:00.000Z">{{ $post->created_at }}</time>
                                </dd>
                            </div>
                        </dl>
                        <div>
                            <h1 class="text-2xl leading-9 font-extrabold text-gray-900 tracking-tight sm:leading-10  md:leading-14">
                                {{ $post->title }}</h1>
                        </div>
                        <div class="mt-1">
                            <livewire:tag-list :tags="$post->tag"/>
                        </div>
                    </div>
                </header>
                <div class="divide-y xl:divide-y-0 divide-gray-200 xl:grid xl:grid-cols-4 xl:col-gap-6 pb-16 xl:pb-20"
                     style="grid-template-rows:auto 1fr">

                    <div class="divide-y divide-gray-200 xl:pb-0 xl:col-span-4 xl:row-span-2">
                        <div class="prose max-w-none pt-10 pb-8 pl-5 pr-5 shadow-lg">
                            <div id="content-markdown">
                                <textarea style="display:none;">{{ $post->content }}</textarea>
                            </div>
                        </div>
                    </div>

                </div>
            </article>
        </main>
    </div>
@endsection
