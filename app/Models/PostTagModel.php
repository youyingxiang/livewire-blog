<?php

namespace App\Models;

/**
 * App\Models\PostTagModel.
 *
 * @property int $id
 * @property int $post_id 文章id
 * @property int $tag_id 标签id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PostTagModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PostTagModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PostTagModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|PostTagModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostTagModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostTagModel wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostTagModel whereTagId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostTagModel whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PostTagModel extends BaseModel
{
    protected $table = 'post_tag';
}
