<div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8 py-10 bg-white mt-10">
    <div class="lg:text-center ">
        <p class="text-base leading-6 text-gray-600 font-semibold tracking-wide uppercase">合作案列</p>
    </div>

    <div class="py-1 mt-10">
        <ul class="md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
            @foreach($partners as $partner)
                <livewire:partner :partner="$partner" :key="$partner->id"/>
            @endforeach
        </ul>
    </div>
</div>
