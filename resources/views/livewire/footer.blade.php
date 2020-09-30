<div class="bg-white mt-5">
    <div class="max-w-screen-xl mx-auto py-12 px-4 overflow-hidden sm:px-6 lg:px-8">
        <nav class="-mx-5 -my-2 flex flex-wrap justify-center">
            <div class="py-2 text-base leading-6 text-gray-700 hover:text-gray-900">友情链接：</div>
            @foreach ($links as $link)
                <livewire:link :link="$link" :key="$link->id"/>
            @endforeach

        </nav>

        <div class="mt-8">
            <p class="text-center text-base leading-6 text-gray-700">
                <a href="https://beian.miit.gov.cn/#/Integrated/index" target="_blank" class="underline hover:text-indigo-600">备案号：湘ICP备2020019075号</a> &copy; 2020 <a href="/" class="underline hover:text-indigo-600">yxx</a> All rights reserved. | <a target="_blank" href="https://github.com/youyingxiang" class="underline hover:text-indigo-600">my github</a>
            </p>
        </div>
    </div>
</div>
