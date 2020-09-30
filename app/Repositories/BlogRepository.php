<?php

namespace App\Repositories;

use App\Models\CategoryModel;
use App\Models\PostModel;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;

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
}
