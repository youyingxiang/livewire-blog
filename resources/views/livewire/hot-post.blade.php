<div class="bg-white py-8">
    <div class="lg:text-center px-4">
        <span class="text-base leading-6 text-gray-600 font-semibold tracking-wide uppercase">技术博文</span>
    </div>
    <div class="">
        <ul class="md:grid md:grid-cols-3 md:col-gap-8 md:row-gap-10">
            @foreach($hot_posts as $hot_post)
                <livewire:card :post="$hot_post" :key="$hot_post->id"/>
            @endforeach
        </ul>
        <div class="lg:text-center mt-2">
            <a href="{{ route('home.category') }}"
               class="mr-5 float-right text-base leading-6 text-gray-500 font-semibold tracking-wide uppercase hover:underline hover:text-indigo-600">查看更多</a>
        </div>
    </div>
</div>
