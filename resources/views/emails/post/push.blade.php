@component('mail::message')
# {{ $post->title ?? '' }}
{!! $post->introduce !!}

@component('mail::button', ['url' => route('home.detail',$post->id)])
    点击查看文章详情
@endcomponent

致敬,<br>
{{ config('app.name') }}
@endcomponent
