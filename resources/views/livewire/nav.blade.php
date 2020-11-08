<div class="fixed md:relative inset-x-0 z-10">
    <div class="relative bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div
                    class="flex justify-between items-center border-gray-100 py-6 md:justify-start md:space-x-10">
                <div class="lg:w-0 lg:flex-1">
                    <a href="/" class="flex">
                        <img class="h-8 w-auto sm:h-10 rounded-full text-white shadow-solid"
                             src="{{ user_img() }}" alt="游兴祥的个人博客">
                    </a>
                </div>
                <div class="md:hidden">
                    <livewire:search/>
                </div>

                <div class="-mr-2 -my-2 md:hidden">

                    <button @click="mobile_menu = true" type="button"
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
                    @if(Auth::check())
                        <a href="{{ route('profile.show') }}"
                           class="whitespace-no-wrap text-base leading-6 font-medium text-gray-500 hover:border-indigo-500 focus:outline-none focus:text-gray-900">
                            <svg t="1601901616616" class="icon" viewBox="0 0 1024 1024" version="1.1"
                                 xmlns="http://www.w3.org/2000/svg" p-id="3441" width="20" height="20">
                                <path d="M608.188 557.902H434.715c-161.213 0-292.327 131.238-292.327 292.602v17.361c0 84.354 129.017 84.354 292.327 84.354h173.474c156.884 0 292.356 0 292.356-84.354v-17.361c0-161.333-131.148-292.602-292.357-292.602z m-95.403-22.333c127.658 0 231.524-104.015 231.524-231.894 0-127.873-103.866-231.895-231.524-231.895-127.654 0-231.53 104.044-231.53 231.9 0 127.846 103.876 231.889 231.53 231.889z m0 0"
                                      p-id="3442"></path>
                            </svg>
                        </a>

                        <span class="whitespace-no-wrap text-base leading-6 font-medium text-gray-500 hover:border-indigo-700 focus:outline-none focus:text-gray-900">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-jet-dropdown-link href="{{ route('logout') }}"
                                                     onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                    {{ __('Logout') }}
                                </x-jet-dropdown-link>
                            </form>
                         </span>
                    @else
                        <a href="{{ route('register') }}"
                           class="whitespace-no-wrap text-base leading-6 font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900">
                            注册
                        </a>
                        <span class="inline-flex rounded-md shadow-sm">
                          <a href="{{ route('home.tologin') }}"
                             class="whitespace-no-wrap inline-flex items-center justify-center px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">
                            登陆
                          </a>
                        </span>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="absolute top-0 inset-x-0 p-2 transition z-30 transform origin-top-right md:hidden"
         style="display: none" x-show="mobile_menu">
        <div class="rounded-lg shadow-lg">
            <div class="rounded-lg shadow-xs bg-white divide-y-2 divide-gray-50">
                <div class="pt-5 pb-6 px-5 space-y-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <a href="/" class="flex">
                                <img class="h-8 w-auto sm:h-10 rounded-full text-white shadow-solid"
                                     src="{{ user_img() }}" alt="游兴祥的个人博客">
                            </a>
                        </div>
                        <div class="-mr-2">
                            <button @click="mobile_menu = false" type="button"
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
                        @if(Auth::check())
                            <span class="w-full flex rounded-md shadow-sm">

                                <a href="{{ route('profile.show') }}"
                                   class="w-full flex items-center justify-center px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">
                            个人信息
                        </a>
                        </span>

                        <span class="w-full flex rounded-md shadow-sm">

                                <a href="{{ route('tyfs.index') }}"
                                   class="w-full flex items-center justify-center px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">
                            食谱计
                        </a>
                        </span>


                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="w-full flex items-center justify-center px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150"
                                   href="{{ route('logout') }}
                                           "
                                   onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                    {{ __('Logout') }}</a>
                            </form>
                        @else
                            <span class="w-full flex rounded-md shadow-sm">
                                <a href="{{ route('home.tologin') }}"
                                   class="w-full flex items-center justify-center px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">
                                登陆
                            </a>
</span>
                        @endif

                        <p class="text-center text-base leading-6 font-medium text-gray-500">
                            账户不存在?
                            <a href="{{ route('register') }}"
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
<div style="display: none" x-show="show_login">
    <livewire:login/>
</div>




