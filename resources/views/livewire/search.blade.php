<div class="leading-normal">
    <input type="text" wire:model="search"
           class="focus:shadow-outline-indigo focus:text-indigo-600 px-4 py-2 leading-tight form-input"
           placeholder="search">
    @if(!empty($posts) && $posts->count())
        <div class="z-20 absolute -ml-4 mt-3 transform px-2 sm:px-0 lg:ml-0 lg:-left-1/2 lg:-translate-x-1/2">
            <div class="rounded-lg shadow-lg">
                <div class="rounded-lg shadow-xs overflow-hidden">
                    <div class="z-20 relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                        @foreach($posts as $post)
                            <a href="{{ $post->detail_url }}"
                                   class="-m-3 p-3 flex items-start space-x-4 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                                <div class="space-y-1">
                                    <p class="text-base leading-6 font-medium text-gray-900">
                                        {{ $post->title }}
                                    </p>
                                    <p class="text-sm leading-5 text-gray-500">
                                        {{ \Illuminate\Support\Str::limit($post->introduce,100) }}
                                    </p>
                                </div>
                            </a>
                        @endforeach
                        {{$posts->links()}}
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
