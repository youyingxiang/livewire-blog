<?php

namespace App\Models;

use App\Extensions\Parsedown;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;

class PostModel extends BaseModel
{
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

    protected $appends = ['tag_str', 'describe', 'content_str'];

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
        return (Parsedown::instance())->parse($this->content);
    }

    /**
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(CategoryModel::class);
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
    public function getDescribeAttribute(): string
    {
        $parsedown = new Parsedown();

        return $parsedown->line(Str::limit($this->content, 300));
    }
}
