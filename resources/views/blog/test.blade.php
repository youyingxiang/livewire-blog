@extends('blog.layout')
@section('css')
    <style>

        blockquote {
            border-left:#eee solid 5px;
            padding-left:20px;
        }

         ul li {
             line-height: 20px;
         }


         code {
             color:#D34B62;
             background: #F6F6F6;
         }
        }
    </style>
@endsection
@section('js')
    <script src="{{ asset('js/showdown.js') }}"></script>
    <script type="text/javascript">
        function convert(){
            var text = document.getElementById("oriContent").value;
            var converter = new showdown.Converter();
            var html = converter.makeHtml(text);
            document.getElementById("result").innerHTML = html;
        }
    </script>
@endsection
@section('content')
    {{--<div x-data="{ open: false }">--}}
    {{--<button @click="open = true">展開下拉選單</button>--}}

    {{--<ul--}}
    {{--x-show="open"--}}
    {{--@click.away="open = false"--}}
    {{-->--}}
    {{--下拉選單內容--}}
    {{--</ul>--}}
    {{--</div>--}}

    {{--<div x-data="{ tab: 'foo' }">--}}
    {{--<button :class="{ 'active': tab === 'foo' }" @click="tab = 'foo'">Foo</button>--}}
    {{--<button :class="{ 'active': tab === 'bar' }" @click="tab = 'bar'">Bar</button>--}}

    {{--<div x-show="tab === 'foo'">索引標籤 Foo</div>--}}
    {{--<div x-show="tab === 'bar'">索引標籤 Bar</div>--}}
    {{--</div>--}}

    {{--<h1>SimpleMDE Dome</h1>--}}

    {{--<div class="container">--}}
    {{--<textarea name="" rows="" cols="" id="editor"></textarea>--}}
    {{--</div>--}}


    {{--<div x-data @test-event.window="console.log($event.detail)"></div>--}}

    {{--<button x-data @click="$dispatch('test-event', 'Hello World!')">1212</button>--}}

    {{--<div x-data="{ fruit: 'apple' }">--}}
    {{--<button--}}
    {{--x-on:click="--}}
    {{--fruit = 'pear';--}}
    {{--$nextTick(() => { console.log($event.target.innerText) });--}}
    {{--"--}}
    {{--x-text="fruit"--}}
    {{--></button>--}}
    {{--</div>--}}


    {{--<div x-data="{show_login:false}" @test-event.window="console.log($event.detail.show_login)" x-show="show_login">ssss</div>--}}

    {{--<button x-data @click="$dispatch('test-event', { show_login: true })">22222</button>--}}

    {{--<div x-ref="foo"></div><button x-on:click="$refs.foo.innerText = 'bar'">你好啊</button></button>--}}
    {{--<div x-data="{open:true,login:false}">--}}
    {{--<div>--}}
    {{--<div x-show="open">--}}
    {{--你好啊--}}
    {{--</div>--}}
    {{--<button @click="login = true">--}}
    {{--登陆--}}
    {{--</button>--}}

    {{--</div>--}}
    {{--<button @click="open = false">--}}
    {{--点击--}}
    {{--</button>--}}

    {{--</div>--}}
    {{--<div x-show="login">--}}
    {{--登陆--}}
    {{--</div>--}}
@endsection
