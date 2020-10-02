<li>
    <div class="flex mt-5 md:mt-0">
        <div class="flex-shrink-0">
            <div class="flex items-center justify-center h-12 w-12 rounded-md  text-white">
                <img class="h-10 w-10"
                     src="{{ Storage::url($partner->image) }}">
            </div>
        </div>
        <div class="ml-4">
            <h4 class="text-lg leading-6 font-medium text-gray-900">{{ $partner->name }}</h4>
            <p class="mt-2 text-base leading-6 text-gray-500">
                {{ $partner->introduce }}
            </p>
        </div>
    </div>
</li>
