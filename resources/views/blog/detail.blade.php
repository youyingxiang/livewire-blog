@extends('blog.layout',['title'=> $post->title,'desc' => $post->introduce])
@section('content')
    <div class="flex">
        <div class="bg-white max-w-3xl xl:px-6 shadow-lg">
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
                    <div class="divide-y xl:divide-y-0 divide-gray-200 pb-16 xl:pb-20"
                         style="grid-template-rows:auto 1fr">
                        <div class="divide-y divide-gray-200 xl:pb-0">
                            <div class="prose max-w-none py-8 px-5">
                                <livewire:markdown :content="$post->content"/>
                            </div>
                        </div>

                    </div>
                </article>
            </main>
        </div>
        <livewire:right-card/>
    </div>


@endsection
