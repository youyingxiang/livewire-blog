<?php

/*
 * // +----------------------------------------------------------------------
 * // | erp
 * // +----------------------------------------------------------------------
 * // | Copyright (c) 2006~2020 erp All rights reserved.
 * // +----------------------------------------------------------------------
 * // | Licensed ( LICENSE-1.0.0 )
 * // +----------------------------------------------------------------------
 * // | Author: yxx <1365831278@qq.com>
 * // +----------------------------------------------------------------------
 */

namespace App\Admin\Extensions\Grid;

use Dcat\Admin\Admin;
use Dcat\Admin\Grid\Displayers\Editable;

class Edit extends Editable
{
    protected function addScript()
    {
        $script = <<<JS
$(".{$this->selector}").on("click focus", function() {
    $(this).next().removeClass("hidden");
}).on('blur', function () {
    var icon = $(this).next();
    setTimeout(function () {
        icon.addClass("hidden")
    }, 200)
});
$('.{$this->selector}+.save').on("click",function() {
    var obj = $(this),
        url = obj.data('url'),
        name = obj.data('name'),
        refresh = obj.data('refresh'),
        old_value = obj.data('value'),
        value = obj.prev().html(),
        tmp = obj.next();
    
    tmp.html(value);

    value = tmp.text().replace(new RegExp("<br>","g"), '').replace(new RegExp("&nbsp;","g"), '').trim();
    
    var data = {
        _method: 'PUT',
        _token: Dcat.token,
    };
    if (name.indexOf('.') === -1) {
        data[name] = value;
    } else {
        name = name.split('.');
        
        data[name[0]] = {};
        data[name[0]][name[1]] = value;
    }
    
    Dcat.NP.start();
    $.ajax({
        url: url,
        type: "POST",
        data: data,
        success: function (data) {
            if (data.status) {
                obj.attr('data-value',value).addClass("hidden").prev().html(value);
                Dcat.success(data.message);
                
                refresh && Dcat.reload()
            } else {
                obj.prev().html(old_value);
                Dcat.error(data.message);
            }
        },
        error:function(a,b,c) {
            obj.prev().html(old_value);
            Dcat.handleAjaxError(a, b, c);
        },
        complete:function(a,b) {
            Dcat.NP.done();
        }
    });
    
    return false;
})
JS;

        Admin::script($script);
    }
}
