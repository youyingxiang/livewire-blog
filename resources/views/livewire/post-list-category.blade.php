<div class="divide-y divide-gray-200 bg-white px-5">
    <div class="pt-6 pb-8 space-y-2 md:space-y-5">
        <p class="text-lg leading-7 text-gray-500">{{ $category_slug ? $category_slug . ' 相关分类'  : '文章列表'}}</p>
    </div>

    <ul class="divide-y divide-gray-200">
        @foreach($posts as $post)
            <livewire:post :post="$post" :key="$post->id"/>
        @endforeach
        @if($posts->count() === 0)
            <li class="py-5">
                <article class="space-y-2 xl:grid xl:grid-cols-4 xl:space-y-0 xl:items-baseline">
                    <div class="prose max-w-none text-gray-500 px-5">
                        <p>没有找到查询结果</p>
                    </div>
                </article>
            </li>
        @endif
    </ul>

    <div class="pt-6 pb-8 space-y-2 md:space-y-5">
        {{ $posts->links() }}
    </div>
</div>



