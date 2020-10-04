<?php

namespace App\Repositories;

use App\Models\CategoryModel;
use App\Models\CommentModel;
use App\Models\PostModel;
use App\Models\TagModel;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class BlogRepository
{
    /**
     * @param int $id
     * @return PostModel
     */
    public function getPostById(int $id): PostModel
    {
        return PostModel::findOrFail($id);
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
        })->paginate($limit);
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
     * @return Collection
     */
    public static function getCommensByPostId(int $post_id): Collection
    {
        return CommentModel::with('user')->where([
            'post_id'   => $post_id,
            'parent_id' => 0,
        ])->orderBy('id', 'desc')->get();
    }
}
