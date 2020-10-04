<form wire:submit.prevent="submit">
    <div class="xl:divide-y xl:divide-gray-200 shadow-lg bg-white mt-5 flex flex-wrap justify-center py-3 px-3 lg:py-5 lg:px-5">
        <div class="w-2/12 sm:w-1/12 flex justify-start">
            <img class="h-10 w-10 rounded "
                 src="{{ user_img() }}">

        </div>
        <div class="w-10/12 sm:w-11/12">
            <div>
                        <textarea x-on:input="convert()" wire:model.lazy="content" id="comment-composing-box"
                                  class="w-full h-24 resize-none focus:shadow-outline-indigo focus:text-indigo-600 leading-tight form-input"></textarea>
                @error('content')
                <div class="mt-3"><span
                            class="text-red-500">{{ $message }}</span></div>
                @enderror

            </div>
            <div id="preview-box"
                 class="hidden prose max-w-none mt-5 rounded py-3 px-5 markdown border border-dashed border-indigo-400"></div>
            <div class="flex justify-end mt-5">
                @if (session()->has('message'))
                    <div class="alert alert-success px-4 py-2 leading-6 text-indigo-500">
                        {{ session('message') }}
                    </div>
                @endif
                <button type="submit"
                        class="whitespace-no-wrap inline-flex items-center justify-center px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">
                    提交
                </button>

            </div>
        </div>
    </div>
</form>

@section('js')
    <script src="{{ asset('js/showdown.js') }}"></script>
    <script type="text/javascript">
        function convert() {
            var text = document.getElementById("comment-composing-box").value;
            var converter = new showdown.Converter();
            var html = converter.makeHtml(text);
            var err = document.getElementById("comment-composing-box").nextElementSibling
            err ? err.style = 'display:none' : '';
            document.getElementById("preview-box").style = text ? "display:block" : "display:none";
            document.getElementById("preview-box").innerHTML = html;
        }
    </script>
@endsection
