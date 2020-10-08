@foreach($comments as $key => $comment)
    @php
        $key_add_comment = \Illuminate\Support\Str::random(10);
        $show_reply = 'show_reply' . $time;
    @endphp
    <div x-data="{ {{ $show_reply }}:false}" id="comment-{{ $comment->id }}">
        <div class="mt-2 flex flex-wrap justify-center divide-y divide-gray-200">
            <div class="w-2/12 sm:w-1/12  py-3 flex justify-start">
                <img class="h-10 w-10 rounded-full"
                     src="{{ $comment->user->image ?? '' }}">

            </div>
            <div class="w-10/12 sm:w-11/12 py-3">
                <p class="prose rounded font-light text-base text-gray flex">
                    <span>{{ $comment->user->name ?? '' }}</span> <span class="mx-2"></span><span class="mr-2">{{ $comment->created_at->diffForHumans() }}
                        </span>
                    @if(Auth::check())
                        <span class="ml-1 bg-gray-100 px-3 transition ease-in-out duration-150 hover:bg-indigo-500 hover:text-white leading-6 rounded-md text-gray-500 whitespace-no-wrap inline-flex text-sm items-center"
                              @click="{{ $show_reply }} = !{{ $show_reply }}">
                        回复
                    </span>
                    @endif
                </p>
                <div class="prose rounded divide-y max-w-none divide-gray-200 mt-3 text-base text-gray-500">
                    {!! $comment->content_str !!}
                </div>

            </div>
        </div>

        <div class="ml-10">
            <div style="display: none" x-show="{{ $show_reply }}">
                <livewire:add-comment :postId="$postId"
                                      :comment="$comment"
                                      :time="$time"
                                      :key="$key_add_comment"/>
            </div>
            @include('blog.comment',['comments' => $comment->replys,'time' => $time + 1])
        </div>


    </div>
@endforeach

