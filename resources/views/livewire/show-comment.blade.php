<div class="shadow-lg bg-white mt-5  py-3 px-3 lg:py-5 lg:px-5">
    {{--<div>--}}
        {{--<div class="mt-2 flex flex-wrap justify-center divide-y divide-gray-200">--}}
            {{--<div class="w-2/12 sm:w-1/12 flex justify-start">--}}
                {{--<img class="h-10 w-10 rounded"--}}
                     {{--src="{{ user_img() }}">--}}

            {{--</div>--}}
            {{--<div class="w-10/12 sm:w-11/12">--}}
                {{--<p class="prose rounded py-3 font-normal text-base text-indigo-600">--}}
                    {{--<span>youxingxiang</span><span> •  </span><span>一年前：</span>--}}
                {{--</p>--}}
                {{--<p class="prose rounded py-3 font-normal text-base text-gray-500">--}}
                    {{--换成 SimpleMDE 编辑器 @用户就不管用了。你这个@还有也有问题了，你这评论里可以上传图片吗？考虑也换换SimpleMDE 吧--}}
                {{--</p>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<ul>--}}
            {{--<li class="ml-10">--}}
                {{--<div class="mt-2 flex flex-wrap justify-center divide-y divide-gray-200">--}}
                    {{--<div class="w-2/12 sm:w-1/12 flex justify-start">--}}
                        {{--<img class="h-10 w-10 rounded"--}}
                             {{--src="{{ user_img() }}">--}}

                    {{--</div>--}}
                    {{--<div class="w-10/12 sm:w-11/12">--}}
                        {{--<p class="prose rounded py-3 font-normal text-base text-indigo-600">--}}
                            {{--<span>youxingxiang</span><span> •  </span><span>一年前：</span>--}}
                        {{--</p>--}}
                        {{--<p class="prose rounded py-3 font-normal text-base text-gray-500">--}}
                            {{--换成 SimpleMDE 编辑器 @用户就不管用了。你这个@还有也有问题了，你这评论里可以上传图片吗？考虑也换换SimpleMDE 吧--}}
                        {{--</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</li>--}}
        {{--</ul>--}}
    {{--</div>--}}
    @foreach($comments as $comment)
    <div class="mt-2 flex flex-wrap justify-center divide-y divide-gray-200" x-data="{show_reply:false}" x-on:mouseover="show_reply = true" x-on:mouseout="show_reply = false">
        <div class="w-2/12 sm:w-1/12  py-3 flex justify-start">
            <img class="h-10 w-10 rounded"
                 src="{{ $comment->user->profile_photo_path ?? '' }}">

        </div>
        <div class="w-10/12 sm:w-11/12 py-3">
            <p class="prose rounded font-normal text-base text-indigo-600 flex">
                <span>{{ $comment->user->name ?? '' }}</span><span> •  </span><span>{{ $comment->created_at->diffForHumans() }}：</span>
                <span class="hidden lg:block ml-1 mt-1 hover:bg-indigo-300 " x-show="show_reply" style="display: none">
                   <svg t="1601798224278" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="16833" width="20" height="20"><path d="M437.76 365.056v-167.424l-296.448 256c-19.968 17.408-19.968 45.568 0 62.464l296.448 256V604.16c167.424 0 323.072 35.84 455.168 215.552-60.416-335.36-311.808-454.656-455.168-454.656" fill="#999999" p-id="16834"></path></svg>
                </span>

                <span class="ml-1 mt-1 hover:bg-indigo-300 lg:hidden">
                   <svg t="1601798224278" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="16833" width="20" height="20"><path d="M437.76 365.056v-167.424l-296.448 256c-19.968 17.408-19.968 45.568 0 62.464l296.448 256V604.16c167.424 0 323.072 35.84 455.168 215.552-60.416-335.36-311.808-454.656-455.168-454.656" fill="#999999" p-id="16834"></path></svg>
                </span>
            </p>
            <div class="prose rounded divide-y max-w-none divide-gray-200 mt-3 text-base text-gray-500">
                {!! $comment->content_str !!}
            </div>

        </div>
    </div>
    @endforeach

</div>
