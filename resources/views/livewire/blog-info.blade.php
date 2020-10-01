<div class="bg-white ml-0 py-5 px-5 shadow-lg mt-5">
    <div class="lg:text-left">
        <p class="text-base leading-6 text-gray-600 font-semibold tracking-wide uppercase">博客架构</p>
    </div>
    <div class="py-3 content-center">
        @foreach($infos as $info)
            <a href="{{ $info['url'] }}" target="_blank"
               class="-m-3 p-3 flex items-start space-x-4 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                <div class="space-y-1">
                    <p class="font-normal text-base text-gray-500 hover:underline hover:text-indigo-600">
                        {{ $info['key'] }}：{{ $info['value'] }}
                    </p>
                </div>
            </a>
        @endforeach
    </div>
</div>
