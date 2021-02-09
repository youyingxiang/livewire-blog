<?php

namespace App\Admin\Actions\Grid;

use Dcat\Admin\Grid\RowAction;

class SendEmail extends RowAction
{
    /**
     * @return string
     */
    public function id()
    {
        return "row-send-mail-{$this->getKey()}";
    }

    public function render()
    {
        parent::render();

        return <<<HTML
<span class="grid-expand">
   <a href="javascript:void(0)" id="{$this->id()}"><i class="feather icon-mail grid-action-icon"></i></a>
</span>
HTML;
    }

    public function action()
    {
        return route('posts.send-mail', $this->getKey());
    }

    public function script()
    {
        return <<<JS
    $("#{$this->id()}").on("click",function(){
        var url = "{$this->action()}"
        Dcat.NP.start();
        $.ajax({
            type: "POST",
            dataType: "json",
            url: url ,
            data: '',
            success: function (data) {
                if (data.status) {
                    Dcat.success(data.message);
                } else {
                    Dcat.error(data.message);
                }
            },
            error : function(a,b,c) {
                Dcat.handleAjaxError(a, b, c);
            },
            complete:function(a,b) {
                Dcat.NP.done();
            }
        });
    });
JS;
    }
}
