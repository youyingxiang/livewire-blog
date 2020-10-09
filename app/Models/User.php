<?php

namespace App\Models;

use App\Jobs\SendResetPasswordEmailJob;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    /**
     * @return string
     */
    public function getImageAttribute(): string
    {
        if ($this->profile_photo_path) {
            if (url()->isValidUrl($this->profile_photo_path)) {
                return $this->profile_photo_path;
            } else {
                return Storage::url($this->profile_photo_path);
            }
        } else {
            return 'https://ui-avatars.com/api/?name='.$this->name.'color=7F9CF5&background=EBF4FF';
        }
    }

    public function sendPasswordResetNotification($token): void
    {
        SendResetPasswordEmailJob::dispatch($this, $token)->onQueue(config('queue.queue_name.high'));
    }
}
