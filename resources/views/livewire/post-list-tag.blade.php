<div class="divide-y divide-gray-200 bg-white px-4 xl:px-6 md:w-3/4">
    <div class="pt-6 pb-8 space-y-2 md:space-y-5">
        <p class="text-lg leading-7 text-gray-500">{{ $tag_name }}</p>
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



