<li class="py-5">
    <article class="space-y-2  xl:grid xl:grid-cols-4 xl:space-y-0 xl:items-baseline">
        <dl>
            <dt class="sr-only">Published on</dt>
            <dd class="text-base leading-6 font-medium text-gray-500">
                <time datetime="2020-09-23T18:30:00.000Z">{{ $post->created_at }}</time>
            </dd>
            <div class="py-4">
                <livewire:tag-list :tags="$post->tag"/>
            </div>
        </dl>

        <div class="space-y-5 xl:col-span-3">
            <div class="space-y-6"><h2 class="text-2xl leading-8 font-bold tracking-tight"><a
                            class="text-gray-500 hover:text-indigo-600"
                            href="{{ $post->detail_url }}">{{ $post->title }}</a></h2>
                <div class="prose max-w-none text-gray-500">
                    <p>{{ $post->introduce }}</p>
                </div>
            </div>
            <div class="text-base leading-6 font-medium"><a
                        class="text-gray-500 hover:text-indigo-600"
                        aria-label="{{ $post->title }}"
                        href="{{ $post->detail_url }}">Read more →</a></div>
        </div>
    </article>
</li>
