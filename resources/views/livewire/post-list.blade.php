<div class="divide-y divide-gray-200">
    <div class="pt-6 pb-8 space-y-2 md:space-y-5">
        <h1 class="text-2xl leading-9 font-extrabold text-indigo-600 tracking-tight sm:text-3xl sm:leading-10 md:text-3xl md:leading-14">
            文章列表</h1>
        <p class="text-lg leading-7 text-gray-500">顺序按发布时间排列</p>
    </div>

    <ul class="divide-y divide-gray-200">
        @foreach($posts as $post)
            <livewire:post :post="$post" :key="$post->id"/>
        @endforeach
    </ul>
    <div class="pt-6 pb-8 space-y-2 md:space-y-5">
        {{ $posts->links() }}
    </div>
</div>



