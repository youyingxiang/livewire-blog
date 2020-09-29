<?php

namespace App\Repositories;

use App\Models\PostModel;

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
}
