<div class="px-6 pt-1 py-3">
    @foreach($tags as $tag)
    <span class="inline-block bg-gray-200 rounded-full px-3 py-2 text-sm font-semibold text-gray-700 mr-2">#{{ $tag->name }}</span>
    @endforeach
</div>
