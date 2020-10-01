@extends('blog.layout',[
'title'=>'个人博客模板,博客模板,博客系统,技术博客,个人博客,ERP,laravel博客,php博客,laravel-admin,dcat-admin,laravel-livewire,livewire',
'desc' => 'yxx的博客,dcat-admin,laravel-admin开发的分享,erp 开发的分享.'
])

@section('content')
    <div x-data="{ open: false }">
        <button @click="open = true">展開下拉選單</button>

        <ul
                x-show="open"
                @click.away="open = false"
        >
            下拉選單內容
        </ul>
    </div>

    <div x-data="{ tab: 'foo' }">
        <button :class="{ 'active': tab === 'foo' }" @click="tab = 'foo'">Foo</button>
        <button :class="{ 'active': tab === 'bar' }" @click="tab = 'bar'">Bar</button>

        <div x-show="tab === 'foo'">索引標籤 Foo</div>
        <div x-show="tab === 'bar'">索引標籤 Bar</div>
    </div>

    <h1>SimpleMDE Dome</h1>

    <div class="container">
        <textarea name="" rows="" cols="" id="editor"></textarea>
    </div>


@endsection
@section('js')

    <script type="text/javascript">
        $(function () {


            // Most options demonstrate the non-default behavior
            var simplemde = new SimpleMDE({
                autofocus: true,
                autosave: {
                    enabled: true,
                    uniqueId: "editor01",
                    delay: 1000,
                },
                blockStyles: {
                    bold: "__",
                    italic: "_"
                },
                element: document.getElementById("editor"),
                forceSync: true,
                hideIcons: ["guide", "heading"],
                indentWithTabs: false,
                initialValue: "SimpleMDE Dome",
                insertTexts: {
                    horizontalRule: ["", "\n\n-----\n\n"],
                    image: ["![](http://", ")"],
                    link: ["[", "](http://)"],
                    table: ["", "\n\n| Column 1 | Column 2 | Column 3 |\n| -------- | -------- | -------- |\n| Text     | Text      | Text     |\n\n"],
                },
                lineWrapping: false,
                parsingConfig: {
                    allowAtxHeaderWithoutSpace: true,
                    strikethrough: false,
                    underscoresBreakWords: true,
                },
                placeholder: "placeholder",
                /* previewRender: function(plainText) {
                     console.log(plainText)
                     return customMarkdownParser(plainText); // Returns HTML from a custom parser
                 },
                 previewRender: function(plainText, preview) { // Async method
                     setTimeout(function(){
                         preview.innerHTML = customMarkdownParser(plainText);
                     }, 250);

                     return "Loading...";
                 },*/
                promptURLs: true,
                renderingConfig: {
                    singleLineBreaks: false,
                    codeSyntaxHighlighting: true,
                },
                shortcuts: {
                    drawTable: "Cmd-Alt-T"
                },
                showIcons: ["code", "table"],
                spellChecker: false,
                status: false,
                status: ["autosave", "lines", "words", "cursor"], // Optional usage
                status: ["autosave", "lines", "words", "cursor", {
                    className: "keystrokes",
                    defaultValue: function (el) {
                        this.keystrokes = 0;
                        el.innerHTML = "0 Keystrokes";
                    },
                    onUpdate: function (el) {
                        el.innerHTML = ++this.keystrokes + " Keystrokes";
                    }
                }], // Another optional usage, with a custom status bar item that counts keystrokes
                styleSelectedText: false,
                tabSize: 4,
                //toolbar: flase,
                //toolbarTips: false,
            });
        })
    </script>

@endsection
