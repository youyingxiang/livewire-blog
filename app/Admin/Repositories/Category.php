<?php

namespace App\Admin\Repositories;

use App\Models\CategoryModel as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Category extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
