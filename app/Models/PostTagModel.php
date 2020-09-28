<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class PostTagModel extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'post_tag';
    
}
