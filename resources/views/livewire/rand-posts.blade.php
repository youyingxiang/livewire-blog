<div class="bg-white ml-0 py-5 px-5 shadow-lg">
    <div class="lg:text-left">
        <p class="text-base leading-6 text-gray-600 font-semibold tracking-wide uppercase">推荐文章</p>
    </div>
    <div class="py-3">
        @foreach($posts as $post)
            <a href="{{ $post->detail_url }}"
               class="-m-3 p-3 flex items-start space-x-4 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                <div class="space-y-1">
                    <p class="font-normal text-base text-gray-500 hover:underline hover:text-indigo-600">
                        {{ $post->title }}
                    </p>
                </div>
            </a>
        @endforeach
    </div>
</div>
