<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\LinkModel.
 *
 * @property int $id
 * @property string $name 名称
 * @property string $url 链接
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|LinkModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LinkModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LinkModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|LinkModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinkModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinkModel whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinkModel whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinkModel whereUrl($value)
 * @mixin \Eloquent
 */
class LinkModel extends Model
{
    use HasDateTimeFormatter;
    protected $table = 'link';
}
