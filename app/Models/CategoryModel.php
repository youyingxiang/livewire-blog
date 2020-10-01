<?php

namespace App\Models;

use Dcat\Admin\Traits\ModelTree;

/**
 * App\Models\CategoryModel.
 *
 * @property int $id
 * @property string $name 标题
 * @property int $parent_id 上级id
 * @property int $order 排序
 * @property string $slug 名称别名
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property int $is_link 是否链接
 * @property string $link 外链地址
 * @property-read \Illuminate\Database\Eloquent\Collection|CategoryModel[] $children
 * @property-read int|null $children_count
 * @property-read string $parent_name
 * @property-read string $target_blank
 * @property-read string $url
 * @property-read CategoryModel $parent
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryModel ordered($direction = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryModel whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryModel whereIsLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryModel whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryModel whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryModel whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryModel whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryModel whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryModel whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
        return url()->isValidUrl($this->link) ? 'target="_blank"' : '';
    }
}
