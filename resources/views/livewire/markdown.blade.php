@section('css')
    <link rel="stylesheet" href="{{ asset('vendors/dcat-admin/dcat/plugins/editor-md/css/editormd.preview.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/dcat-admin/dcat/extra/markdown.css') }}">
@endsection

@section('js')
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('vendors/dcat-admin/dcat/plugins/editor-md/lib/marked.min.js') }}"></script>
    <script src="{{ asset('vendors/dcat-admin/dcat/plugins/editor-md/lib/prettify.min.js') }}"></script>
    <script src="{{ asset('vendors/dcat-admin/dcat/plugins/editor-md/lib/raphael.min.js') }}"></script>
    <script src="{{ asset('vendors/dcat-admin/dcat/plugins/editor-md/lib/underscore.min.js') }}"></script>
    <script src="{{ asset('vendors/dcat-admin/dcat/plugins/editor-md/lib/sequence-diagram.min.js') }}"></script>
    <script src="{{ asset('vendors/dcat-admin/dcat/plugins/editor-md/lib/flowchart.min.js') }}"></script>
    <script src="{{ asset('vendors/dcat-admin/dcat/plugins/editor-md/lib/jquery.flowchart.min.js') }}"></script>
    <script src="{{ asset('vendors/dcat-admin/dcat/plugins/editor-md/editormd.min.js') }}"></script>
    <script>
        $(function () {
            editormd.markdownToHTML("{{ $em_id }}", {
                htmlDecode: "style,script,iframe",
                emoji: true,
                taskList: true,
                tex: true,  // 默认不解析
                flowChart: true,  // 默认不解析
                sequenceDiagram: true  // 默认不解析
            });
        })

    </script>
@endsection
<div id="{{ $em_id }}">
    <textarea style="display:none;">{{ $content }}</textarea>
</div>
