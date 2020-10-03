<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SocialiteUserModel extends Model
{
    use HasDateTimeFormatter;

    const GITHUB = 0;

    const DRIVER = [
        self::GITHUB => 'github'
    ];

    protected $table = 'socialite_users';

    public $guarded = ['id'];

    /**
     * @param $driver
     * @param $openid
     * @return User|null
     */
    public function getUser($driver, $openid): ?User
    {
        $finder = $this->where([
            'driver'  => $driver,
            'open_id' => $openid
        ])->first();

        return $finder ? $finder->user : null;
    }

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,);
    }

    /**
     * @param $userId
     * @param $driver
     * @param $id
     * @return SocialiteUserModel
     */
    public function saveOne($userId, $driver, $id): self
    {
        return $this->create([
            'user_id' => $userId,
            'driver'  => $driver,
            'open_id' => $id
        ]);
    }
}
