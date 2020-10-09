<?php

namespace App\Models;

use App\Traits\Markdown;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\RoutesNotifications;

/**
 * App\Models\CommentModel.
 *
 * @property int $id
 * @property int $post_id 文章id
 * @property int $parent_id 评论人id
 * @property int $target_id 被回复人的id
 * @property int $user_id 回复人id
 * @property string $content 内容
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read string $content_str
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|CommentModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CommentModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CommentModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|CommentModel whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommentModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommentModel whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommentModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommentModel whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommentModel wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommentModel whereTargetId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommentModel whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommentModel whereUserId($value)
 * @mixin \Eloquent
 */
class CommentModel extends BaseModel
{
    use Markdown, RoutesNotifications;

    protected $table = 'comment';

    public $guarded = ['id'];

    protected $appends = ['content_str'];

    protected $with = ['user', 'replys'];

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * @return string
     */
    public function getContentStrAttribute(): string
    {
        return $this->toHtml($this->content);
    }

    /**
     * @return HasMany
     */
    public function replys(): HasMany
    {
        return $this->hasMany(CommentModel::class, 'parent_id')->orderBy('id', 'desc');
    }

    /**
     * @return BelongsTo
     */
    public function post(): BelongsTo
    {
        return $this->belongsTo(PostModel::class, 'post_id');
    }

    /**
     * @return BelongsTo
     */
    public function target(): BelongsTo
    {
        return $this->belongsTo(CommentModel::class, 'target_id');
    }
}
