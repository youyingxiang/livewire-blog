<div x-data="{ open: false }">
    <div class="relative bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div
                    class="flex justify-between items-center border-b-2 border-gray-100 py-6 md:justify-start md:space-x-10">
                <div class="lg:w-0 lg:flex-1">
                    <a href="/" class="flex">
                        <img class="h-8 w-auto sm:h-10 rounded-full text-white shadow-solid"
                             src="{{ asset('images/logo.png') }}" alt="yxx的个人博客">
                    </a>
                </div>
                <div class="md:hidden">
                    <livewire:search/>
                </div>

                <div class="-mr-2 -my-2 md:hidden">

                    <button @click="open = true" type="button"
                            class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                        <!-- Heroicon name: menu -->
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
                <nav class="hidden md:flex space-x-10">
                    @foreach($categorys as $category)
                        <livewire:category :category="$category" :key="$category->id"/>
                    @endforeach
                </nav>


                <div class="hidden md:flex items-center justify-end space-x-8 md:flex-1 lg:w-0">

                    <livewire:search/>
                    <span class="inline-flex rounded-md shadow-sm">
                        <a href="#"
                           class="whitespace-no-wrap inline-flex items-center justify-center px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">
                          登陆
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden"
         style="z-index: 999;display: none" x-show="open">
        <div class="rounded-lg shadow-lg">
            <div class="rounded-lg shadow-xs bg-white divide-y-2 divide-gray-50">
                <div class="pt-5 pb-6 px-5 space-y-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <a href="/" class="flex">
                                <img class="h-8 w-auto sm:h-10 rounded-full text-white shadow-solid"
                                     src="{{ asset('images/logo.png') }}" alt="yxx的个人博客">
                            </a>
                        </div>
                        <div class="-mr-2">
                            <button @click="open = false" type="button"
                                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                                <!-- Heroicon name: x -->
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div>
                        <nav class="grid gap-y-8">
                            @foreach($categorys as $category)
                                <livewire:category :category="$category" :key="$category->id"/>
                            @endforeach
                        </nav>
                    </div>
                </div>
                <div class="py-6 px-5 space-y-6">

                    <div class="space-y-6">
                        <span class="w-full flex rounded-md shadow-sm">
                            <a href="#"
                               class="w-full flex items-center justify-center px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">
                                登陆
                            </a>
                        </span>
                        <p class="text-center text-base leading-6 font-medium text-gray-500">
                            没有账号?
                            <a href="#"
                               class="text-indigo-600 hover:text-indigo-500 transition ease-in-out duration-150">
                                注册
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{--<livewire:login/>--}}


