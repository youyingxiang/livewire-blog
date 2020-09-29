<div class="px-6 py-4">
    @foreach($tags as $tag)
    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#{{ $tag->name }}</span>
    @endforeach
</div>
