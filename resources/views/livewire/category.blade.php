<a href="{{ $category->url }}"
   {{ $category->target_blank }} class="text-lg @if($slug === $category->slug) text-indigo-600 font-bold underline @endif leading-6 font-medium text-gray-500 hover:text-indigo-600 hover:font-bold hover:underline focus:outline-none focus:text-indigo-600 transition ease-in-out duration-150">
    {{ $category->name }}
</a>

