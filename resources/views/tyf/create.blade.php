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
<div class="page">
    <div class="weui-form">
        <div class="weui-form__text-area">
            <h2 class="weui-form__title">食谱登记</h2>
        </div>
    </div>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div id="warnToast" style="display: block;">
                <div class="weui-mask_transparent"></div>
                <div class="weui-toast">
                    <i class="weui-icon-warn weui-icon_toast"></i>
                    <p class="weui-toast__content">{{ $error }}</p>
                </div>
            </div>
        @endforeach
    @endif

    <form action="{{route('tyfs.store')}}" method="Post">
        @csrf
        <div class="weui-form__control-area">
            <div class="weui-cells__group weui-cells__group_form" id="showDatePicker">
                <div class="weui-cells__title">日期</div>
                <div class="weui-cells weui-cells_form">
                    <div class="weui-cell">
                        <div class="weui-cell__bd">
                            <input class="weui-input" name="created_at" id="created_at"
                                   placeholder="请选择时间" readonly value="{{$now}}"/>
                        </div>
                    </div>
                </div>
            </div>


            <div class="weui-cells__group weui-cells__group_form">
                <div class="weui-cells__title">早餐</div>
                <div class="weui-cells weui-cells_form">
                    <div class="weui-cell ">
                        <div class="weui-cell__bd">
                            <textarea class="weui-textarea" name="breakfast" placeholder="请输入早餐食谱"
                                      rows="3">{{old('breakfast')}}</textarea>
                        </div>
                    </div>
                </div>
            </div>


            <div class="weui-cells__group weui-cells__group_form">
                <div class="weui-cells__title">午餐</div>
                <div class="weui-cells weui-cells_form">
                    <div class="weui-cell ">
                        <div class="weui-cell__bd">
                            <textarea class="weui-textarea" name="lunch" placeholder="请输入午餐食谱"
                                      rows="3">{{old('lunch')}}</textarea>

                        </div>
                    </div>
                </div>
            </div>


            <div class="weui-cells__group weui-cells__group_form">
                <div class="weui-cells__title">晚餐</div>
                <div class="weui-cells weui-cells_form">
                    <div class="weui-cell ">
                        <div class="weui-cell__bd">
                            <textarea class="weui-textarea" name="dinner" placeholder="请输入晚餐食谱"
                                      rows="3">{{old('dinner')}}</textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="weui-cells__group weui-cells__group_form">
                <div class="weui-cells__title">体重（kg）</div>
                <div class="weui-cells weui-cells_form">
                    <div class="weui-cell">
                        <div class="weui-cell__bd">
                            <input class="weui-input" name="weight" placeholder="请输入体重(kg)"
                                   value="{{old('weight')?? 0.00}}"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="button-sp-area">
            <input type="submit" class="weui-btn weui-btn_primary">
            <a href="{{ route('tyfs.index') }}" class="weui-btn weui-btn_disabled weui-btn_default" style="margin-bottom: 24px">返回列表</a>
        </div>
    </form>

</div>
</body>
<script src="{{asset('js/zepto.min.js')}}"></script>
<script type="text/javascript" src="https://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script src="https://res.wx.qq.com/open/libs/weuijs/1.2.1/weui.min.js"></script>
<script type="text/javascript">
    $('#showDatePicker').on('click', function () {
        weui.datePicker({
            start: 1990,
            end: new Date().getFullYear(),
            defaultValue: [new Date().getFullYear(), new Date().getMonth() + 1, new Date().getDate()],
            onChange: function (result) {
                console.log(result);
            },
            onConfirm: function (result) {
                var year = result[0].value;
                var month = result[1].value < 10 ? "0" + result[1].value : result[1].value;
                var date = result[2].value < 10 ? "0" + result[2].value : result[2].value;

                $('#created_at').val(year + '-' + month + '-' + date);
            },
            title: '时间选择'
        });
    });

    $(function () {
        var $warnToast = $('#warnToast');
        if ($warnToast) {
            setTimeout(function () {
                $warnToast.fadeOut(100);
            }, 2000);
        }
    });
</script>
</html>
