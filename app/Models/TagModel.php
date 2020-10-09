<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * App\Models\TagModel.
 *
 * @property int $id
 * @property string $name 名称
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read string $tag_list_url
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\PostModel[] $post
 * @property-read int|null $post_count
 * @method static \Illuminate\Database\Eloquent\Builder|TagModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TagModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TagModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|TagModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TagModel whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TagModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TagModel whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TagModel whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class TagModel extends BaseModel
{
    protected $table = 'tag';

    protected $guarded = ['id'];

    /**
     * @return BelongsToMany
     */
    public function post(): BelongsToMany
    {
        return $this->belongsToMany(PostModel::class, PostTagModel::class, 'tag_id', 'post_id');
    }

    public function getTagListUrlAttribute(): string
    {
        return route('home.tag', ['tag' => $this->name.'-'.$this->id]);
    }
}
