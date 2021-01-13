<?php

namespace App\Services;

use App\Models\SocialiteUserModel;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Socialite;

class OauthService
{
    public function callback(string $driver): void
    {
        $user = Socialite::driver($driver)->user();

        $finder = SocialiteUserModel::newModelInstance()->getUser(config('socialite.github.flag', 0), $user->id);

        if (! $finder) {
            $finder = DB::transaction(function () use ($finder, $user) {
                $socialiteUser = SocialiteUserModel::newModelInstance();
                $socialiteUser->driver = config('socialite.github.flag', 0);
                $socialiteUser->open_id = $user->id;
                $finder = User::firstOrCreate(
                    ['email' => $user->email],
                    [
                        'name'               => $user->username,
                        'profile_photo_path' => $user->avatar,
                    ]
                );
                $socialiteUser->user_id = $finder->id;
                $socialiteUser->save();

                return $finder;
            });
        }
        Auth::login($finder);
    }
}
