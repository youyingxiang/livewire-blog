<div>
    <div class="relative bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="flex justify-between items-center border-b-2 border-gray-100 py-6 md:justify-start md:space-x-10">
                <div class="lg:w-0 lg:flex-1">
                    <a href="/" class="flex">
                        <img class="h-8 w-auto sm:h-10 rounded-full text-white shadow-solid"
                             src="http://wxy.cdn.0736tw.com/images/24e02b5d4d82a6abd3b638e18bac466f.png"
                             alt="Workflow">
                    </a>
                </div>
                <div class="-mr-2 -my-2 md:hidden">
                    <button type="button"
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
                    <a href="https://github.com/tightenco/tallstack" class="ml-6 text-indigo-600 hover:text-indigo-600">
                        <span class="sr-only">GitHub</span>
                        <svg class="h-10 w-10" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                  d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </a>

                </div>
            </div>
        </div>


    </div>


</div>