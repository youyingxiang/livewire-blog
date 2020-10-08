<li>
    <div class="max-w-sm rounded overflow-hidden shadow-xl hover:scale-105 transition duration-300 ease-in-out transform">
        <img class="w-full h-64 px-6 py-8 flex-shrink-0" src="{{ $post->hot_image_url }}"
             alt="{{ $post->title }}">
        <div class="px-6 py-4">
            <a href="{{ $post->detail_url }}">
                <div class="font-normal text-xl text-gray-500 hover:underline hover:text-indigo-600 ">{{ $post->title }}</div>
            </a>
        </div>
        <div class="px-6 pb-6">
            <livewire:tag-list :tags="$post->tag"/>
        </div>
    </div>
</li>
