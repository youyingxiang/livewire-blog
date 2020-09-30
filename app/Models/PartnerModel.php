<?php

namespace App\Models;

/**
 * App\Models\PartnerModel.
 *
 * @property int $id
 * @property string $name 名称
 * @property string $introduce 介绍
 * @property string $image 图片
 * @property int $order 排序
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|PartnerModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PartnerModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PartnerModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|PartnerModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartnerModel whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartnerModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartnerModel whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartnerModel whereIntroduce($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartnerModel whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartnerModel whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartnerModel whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PartnerModel extends BaseModel
{
    protected $table = 'partner';
}
