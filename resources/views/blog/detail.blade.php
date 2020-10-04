@extends('blog.layout',['title'=> $post->title,'desc' => $post->introduce])
@section('content')
    <div class="block md:flex break-all">
        <div class="md:w-3/4">
            <main>
                <article class="xl:divide-y xl:divide-gray-200 shadow-lg bg-white">
                    <header class="pt-5 xl:pb-2">
                        <div class="space-y-1 text-center">
                            <dl class="space-y-10">
                                <div>
                                    <dt class="sr-only">发布日期</dt>
                                    <dd class="text-base leading-6 font-medium text-gray-500">
                                        <time datetime="2020-08-25T13:00:00.000Z">{{ $post->created_at }}</time>
                                    </dd>
                                </div>
                            </dl>
                            <div>
                                <h1 class="text-2xl leading-9 font-extrabold text-gray-900 tracking-tight px-2 sm:leading-10 md:leading-14">{{ $post->title }}</h1>
                            </div>
                            <div class="mt-1">
                                <livewire:tag-list :tags="$post->tag"/>
                            </div>
                        </div>
                    </header>
                    <div class="divide-y xl:divide-y-0 divide-gray-200"
                         style="grid-template-rows:auto 1fr">
                        <div class="divide-y divide-gray-200 xl:pb-0">
                            <div class="prose max-w-none py-3 px-5">
                                {!! $post->content_str !!}
                            </div>
                        </div>

                    </div>
                </article>
                <div class="xl:divide-y xl:divide-gray-200 shadow-lg bg-white mt-5 flex flex-wrap justify-center py-3 px-3 lg:py-5 lg:px-5">
                    <div class="w-2/12 sm:w-1/12 flex justify-start">
                        <img class="h-10 w-10 rounded "
                             src="{{ user_img() }}">

                    </div>
                    <div class="w-10/12 sm:w-11/12">
                        <textarea id="comment-composing-box"
                                  class="w-full h-24 resize-none focus:shadow-outline-indigo focus:text-indigo-600 leading-tight form-input"
                                  onkeyup="convert()"></textarea>
                        <div id="preview-box"
                             class="hidden prose max-w-none mt-5 rounded py-3 px-5 markdown border border-dashed border-indigo-400"></div>
                        <div class="flex justify-end mt-5">
                            <button class="whitespace-no-wrap inline-flex items-center justify-center px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">
                                提交
                            </button>
                        </div>
                    </div>
                </div>

                <div class="shadow-lg bg-white mt-5  py-3 px-3 lg:py-5 lg:px-5">
                    <div>
                        <div class="mt-2 flex flex-wrap justify-center divide-y divide-gray-200">
                            <div class="w-2/12 sm:w-1/12 flex justify-start">
                                <img class="h-10 w-10 rounded"
                                     src="{{ user_img() }}">

                            </div>
                            <div class="w-10/12 sm:w-11/12">
                                <p class="prose rounded py-3 font-normal text-base text-indigo-600">
                                    <span>youxingxiang</span><span> •  </span><span>一年前：</span>
                                </p>
                                <p class="prose rounded py-3 font-normal text-base text-gray-500">
                                    换成 SimpleMDE 编辑器 @用户就不管用了。你这个@还有也有问题了，你这评论里可以上传图片吗？考虑也换换SimpleMDE 吧
                                </p>
                            </div>
                        </div>
                        <ul>
                            <li class="ml-10">
                                <div class="mt-2 flex flex-wrap justify-center divide-y divide-gray-200">
                                    <div class="w-2/12 sm:w-1/12 flex justify-start">
                                        <img class="h-10 w-10 rounded"
                                             src="{{ user_img() }}">

                                    </div>
                                    <div class="w-10/12 sm:w-11/12">
                                        <p class="prose rounded py-3 font-normal text-base text-indigo-600">
                                            <span>youxingxiang</span><span> •  </span><span>一年前：</span>
                                        </p>
                                        <p class="prose rounded py-3 font-normal text-base text-gray-500">
                                            换成 SimpleMDE 编辑器 @用户就不管用了。你这个@还有也有问题了，你这评论里可以上传图片吗？考虑也换换SimpleMDE 吧
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="mt-2 flex flex-wrap justify-center divide-y divide-gray-200">
                        <div class="w-2/12 sm:w-1/12 flex justify-start">
                            <img class="h-10 w-10 rounded"
                                 src="{{ user_img() }}">

                        </div>
                        <div class="w-10/12 sm:w-11/12">
                            <p class="prose rounded py-3 font-normal text-base text-indigo-600">
                                <span>youxingxiang</span><span> •  </span><span>一年前：</span>
                            </p>
                            <p class="prose rounded py-3 font-normal text-base text-gray-500">
                                换成 SimpleMDE 编辑器 @用户就不管用了。你这个@还有也有问题了，你这评论里可以上传图片吗？考虑也换换SimpleMDE 吧
                            </p>
                        </div>
                    </div>

                    <div class="mt-2 flex flex-wrap justify-center divide-y divide-gray-200">
                        <div class="w-2/12 sm:w-1/12 flex justify-start">
                            <img class="h-10 w-10 rounded"
                                 src="{{ user_img() }}">

                        </div>
                        <div class="w-10/12 sm:w-11/12">
                            <p class="prose rounded py-3 font-normal text-base text-indigo-600">
                                <span>youxingxiang</span><span> •  </span><span>一年前：</span>
                            </p>
                            <p class="prose rounded py-3 font-normal text-base text-gray-500">
                                换成 SimpleMDE 编辑器 @用户就不管用了。你这个@还有也有问题了，你这评论里可以上传图片吗？考虑也换换SimpleMDE 吧
                                换成 SimpleMDE 编辑器 @用户就不管用了。你这个@还有也有问题了，你这评论里可以上传图片吗？考虑也换换SimpleMDE 吧
                                换成 SimpleMDE 编辑器 @用户就不管用了。你这个@还有也有问题了，你这评论里可以上传图片吗？考虑也换换SimpleMDE 吧
                            </p>
                        </div>
                    </div>
                </div>
            </main>

        </div>
        <livewire:right-card/>
    </div>
@endsection

@section('js')
    <script src="{{ asset('js/showdown.js') }}"></script>
    <script type="text/javascript">
        function convert() {
            var text = document.getElementById("comment-composing-box").value;
            var converter = new showdown.Converter();
            var html = converter.makeHtml(text);
            document.getElementById("preview-box").style = html ? "display:block" : "display:none";
            document.getElementById("preview-box").innerHTML = html;
        }
    </script>
@endsection
