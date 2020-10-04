<?php

namespace App\Admin\Repositories;

use App\Models\CommentModel as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Comment extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
