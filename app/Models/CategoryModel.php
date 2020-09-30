<?php

namespace App\Models;

use Dcat\Admin\Traits\ModelTree;

class CategoryModel extends BaseModel
{
    use ModelTree;

    protected $table = 'category';

    protected $appends = ['parent_name', 'url', 'target_blank'];

    const LINK_YES = 1;
    const LINK_NO = 0;

    const LINK = [
        self::LINK_YES => '是',
        self::LINK_NO  => '否',
    ];

    /**
     * @return string
     */
    public function getParentNameAttribute(): string
    {
        return $this->parent_id === 0 ? '顶级' : self::whereId($this->parent_id)->value('name') ?? '';
    }

    /**
     * @return string
     */
    public function getTitleColumn(): string
    {
        return 'name';
    }

    /**
     * @return string
     */
    public function getUrlAttribute(): string
    {
        return $this->is_link ? $this->link : route('home.category', ['category_slug' => $this->slug]);
    }

    /**
     * @return string
     */
    public function getTargetBlankAttribute(): string
    {
        return $this->is_link ? 'target="_blank"' : '';
    }
}
