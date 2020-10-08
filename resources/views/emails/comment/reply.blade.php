@component('mail::message')
# {{ $comment->post->title ?? '' }}
{!! $comment->content_str !!}

@component('mail::button', ['url' => $url])
    点击查看详情
@endcomponent

致敬,<br>
{{ config('app.name') }}
@endcomponent
