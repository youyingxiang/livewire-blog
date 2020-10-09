<?php

namespace App\Models;

use App\Traits\Markdown;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;

/**
 * App\Models\PostModel.
 *
 * @property int $id
 * @property string $title 标题
 * @property string|null $content 内容
 * @property int $category_id 分类id
 * @property int $is_hot 是否热门
 * @property string $hot_image 热门图片
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property int $view 浏览次数
 * @property int $order 排序
 * @property string $introduce 介绍
 * @property-read \App\Models\CategoryModel $category
 * @property-read string $content_str
 * @property-read string $detail_url
 * @property-read string $tag_str
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\TagModel[] $tag
 * @property-read int|null $tag_count
 * @method static \Illuminate\Database\Eloquent\Builder|PostModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PostModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PostModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|PostModel whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostModel whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostModel whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostModel whereHotImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostModel whereIntroduce($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostModel whereIsHot($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostModel whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostModel whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostModel whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostModel whereView($value)
 * @mixin \Eloquent
 */
class PostModel extends BaseModel
{
    use Markdown;
    protected $table = 'post';

    const HOT_YES = 1;
    const HOT_NO = 0;
    const HOT = [
        self::HOT_YES => '是',
        self::HOT_NO  => '否',
    ];
    const HOT_COLOR = [
        self::HOT_YES => 'success',
        self::HOT_NO  => 'red',
    ];

    protected $with = ['category', 'tag'];

    protected $appends = ['tag_str'];

    /**
     * @return string
     */
    public function getTagStrAttribute(): string
    {
        return $this->tag->pluck('name')->implode(',') ?? '';
    }

    /**
     * @return string
     */
    public function getContentStrAttribute(): string
    {
        return $this->toHtml($this->content);
    }

    /**
     * @return string
     */
    public function getDetailUrlAttribute(): string
    {
        return route('home.detail', ['id' => $this->id]);
    }

    /**
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(CategoryModel::class);
    }

    /**
     * @return HasMany
     */
    public function comments(): HasMany
    {
        return $this->hasMany(CommentModel::class, 'post_id');
    }

    /**
     * @return BelongsToMany
     */
    public function tag(): BelongsToMany
    {
        return $this->belongsToMany(TagModel::class, PostTagModel::class, 'post_id', 'tag_id');
    }

    /**
     * @return string
     */
    public function getHotImageUrlAttribute(): string
    {
        return url()->isValidUrl($this->hot_image) ? $this->hot_image : Storage::disk(config('admin.upload.disk'))->url($this->hot_image);
    }
}
