<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class TagModel extends BaseModel
{
    protected $table = 'tag';

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
