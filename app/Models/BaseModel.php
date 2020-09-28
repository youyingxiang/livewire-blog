<?php
/**
 * Created by PhpStorm.
 * User: youxingxiang
 * Date: 2020/9/28
 * Time: 9:51 PM.
 */

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BaseModel extends Model
{
    use HasDateTimeFormatter;
    use SoftDeletes;
}
