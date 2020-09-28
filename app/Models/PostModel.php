<?php

namespace App\Models;

use Dcat\Admin\Widgets\Markdown;

class PostModel extends BaseModel
{
    protected $table = 'post';

    const HOT_YES = 1;
    const HOT_NO = 0;
    const HOT = [
        self::HOT_YES => '是',
        self::HOT_NO  => '否',
    ];

    /**
     * @param string $value
     * @return string
     */
    public function getContentStrAttribute(): string
    {
        return Markdown::make($this->content) ?? '';
    }
}
