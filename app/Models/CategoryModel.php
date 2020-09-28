<?php

namespace App\Models;

use Dcat\Admin\Traits\ModelTree;

class CategoryModel extends BaseModel
{
    use ModelTree;

    protected $table = 'category';

    public function getTitleColumn(): string
    {
        return 'name';
    }

}
