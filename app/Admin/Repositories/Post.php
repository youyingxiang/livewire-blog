<?php

namespace App\Admin\Repositories;

use App\Models\PostModel as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Post extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
