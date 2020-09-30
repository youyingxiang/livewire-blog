@foreach($tags as $tag)
    <a href="{{ $tag->tag_list_url }}"><span
                class="inline-block bg-gray-200 rounded-full px-3 py-2 text-sm font-semibold text-gray-700 mr-2">#{{ $tag->name }}</span></a>
@endforeach

