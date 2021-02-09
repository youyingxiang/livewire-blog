<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
    <title>食谱记</title>
    <!-- 引入 WeUI CDN 链接 -->
    <link rel="stylesheet" href="https://res.wx.qq.com/open/libs/weui/2.3.0/weui.min.css"/>
</head>
<body>
<!-- 使用 -->
<div class="page">
    <div class="page__hd">
        <a href="{{route('tyfs.create')}}" class="weui-btn_cell weui-btn_cell-primary">添加食谱登记</a>
    </div>
    <div class="page__bd">
        @if (session('status'))
            <div id="toast">
                <div class="weui-mask_transparent"></div>
                <div class="weui-toast">
                    <i class="weui-icon-success-no-circle weui-icon_toast"></i>
                    <p class="weui-toast__content">{{ session('status') }}</p>
                </div>
            </div>
        @endif
        @if ($recipes->count() > 0)
            @foreach($recipes as $recipe)
                <div class="weui-panel weui-panel_access">
                    <a href="{{route('tyfs.edit',$recipe->id)}}">
                        <div class="weui-panel__hd weui-cell weui-cell_active weui-cell_access weui-cell_link">
                            <div class="weui-cell__bd">{{ $recipe->created_at->format('Y-m-d') }}</div>
                            <span class="weui-cell__ft"></span>
                        </div>
                    </a>
                    <div class="weui-panel__bd">
                        <div class="weui-media-box weui-media-box_text">
                            <h4 class="weui-media-box__title">早餐</h4>
                            <p class="weui-media-box__desc">{{ $recipe->breakfast }}</p>
                        </div>
                        <div class="weui-media-box weui-media-box_text">
                            <h4 class="weui-media-box__title">午餐</h4>
                            <p class="weui-media-box__desc">{{ $recipe->lunch }}</p>
                        </div>
                        <div class="weui-media-box weui-media-box_text">
                            <h4 class="weui-media-box__title">晚餐</h4>
                            <p class="weui-media-box__desc">{{ $recipe->dinner }}</p>
                        </div>
                    </div>

                </div>
            @endforeach
        @else
            <div class="weui-loadmore weui-loadmore_line">
                <span class="weui-loadmore__tips">暂无数据</span>
            </div>
        @endif





        {{--<div class="page__bd">--}}
        {{--<div class="weui-loadmore">--}}
        {{--<span class="weui-loadmore__tips">加载更多</span>--}}
        {{--</div>--}}

        {{--</div>--}}


    </div>
</div>
<script src="{{asset('js/zepto.min.js')}}"></script>
<script type="text/javascript" src="https://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script src="https://res.wx.qq.com/open/libs/weuijs/1.2.1/weui.min.js"></script>
<script>
    $(function () {
        var $toast = $('#toast');
        if ($toast) {
            setTimeout(function () {
                $toast.fadeOut(100);
            }, 2000);
        }
    });
</script>
</body>
</html>
