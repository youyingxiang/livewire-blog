<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class LinkModel extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'link';
    
}
