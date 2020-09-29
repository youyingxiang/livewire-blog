<li>
    <div class="max-w-sm rounded overflow-hidden shadow-lg">
        <img class="w-full" src="https://www.tailwindcss.cn/img/card-top.jpg"
             alt="Sunset in the mountains">
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2 hover:underline hover:text-indigo-600 ">{{ $post->title }}</div>
            <p class="text-gray-700 text-base hover:underline">
                {!! $post->content_str !!}
            </p>
        </div>
        <div class="px-6 py-4">
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#photography</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#travel</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">#winter</span>
        </div>
    </div>
</li>
