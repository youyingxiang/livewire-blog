<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\Model;

class RecipesModel extends Model
{
    use HasDateTimeFormatter;
    protected $table = 'recipes';
    protected $guarded = [];
}
