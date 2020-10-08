@component('mail::message')
    {{ $comment->target->content ?? $comment->post->title }}:
    {{ $comment->content }}

    @component('mail::button', ['url' => $url])
        点击查看详情
    @endcomponent

    致敬,<br>
    {{ config('app.name') }}
@endcomponent
