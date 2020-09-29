<?php

namespace App\Admin\Repositories;

use App\Models\PartnerModel as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Partner extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
