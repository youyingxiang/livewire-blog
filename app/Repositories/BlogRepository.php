<?php

namespace App\Repositories;

use App\Models\CategoryModel;
use App\Models\CommentModel;
use App\Models\PostModel;
use App\Models\TagModel;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class BlogRepository
{
    /**
     * @param int $id
     * @return PostModel
     */
    public static function getPostById(int $id): PostModel
    {
        return PostModel::with(['comments' => function (HasMany $hasMany) {
            $hasMany->where('parent_id', 0);
            $hasMany->orderBy('id', 'desc');
        }])->findOrFail($id);
    }

    /**
     * @param null|string $category_slug
     * @param int $limit
     * @return LengthAwarePaginator
     */
    public function getListByCategoryPaginate(?string $category_slug, int $limit = 10): LengthAwarePaginator
    {
        $category = $category_slug ? $this->getCategoryBySlug($category_slug) : null;

        return PostModel::where(function (Builder $builder) use ($category) {
            $category && $builder->where('category_id', $category->id);
        })->latest()->paginate($limit);
    }

    /**
     * @param string $slug
     * @return CategoryModel
     */
    public function getCategoryBySlug(string $slug): CategoryModel
    {
        return CategoryModel::where('slug', $slug)->first();
    }

    /**
     * @param int $tag_id
     * @param int $limit
     * @return LengthAwarePaginator
     */
    public function getListByTagPaginate(int $tag_id, int $limit = 10): LengthAwarePaginator
    {
        return $this->getTagById($tag_id)->post()->paginate($limit);
    }

    /**
     * @param int $tag_id
     * @return TagModel
     */
    public function getTagById(int $tag_id): TagModel
    {
        return TagModel::find($tag_id);
    }

    /**
     * @param int $post_id
     * @param int $parent_id
     * @return Collection
     */
    public static function getCommensByPostId(int $post_id, int $parent_id): Collection
    {
        return CommentModel::where([
            'post_id'   => $post_id,
            'parent_id' => $parent_id,
        ])->orderBy('id', 'desc')->get();
    }

    /**
     * @param int $comment_id
     * @return Collection
     */
    public static function getReplysByCommentId(int $comment_id): Collection
    {
        return CommentModel::where('parent_id', $comment_id)->orderBy('id', 'desc')->get();
    }
}
