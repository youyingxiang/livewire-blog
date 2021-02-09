<?php

namespace App\Http\Controllers;

use App\Services\OauthService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Socialite;
use Symfony\Component\HttpFoundation\RedirectResponse;

class AuthController extends Controller
{
    /**
     * @return RedirectResponse
     */
    public function redirectToProvider(string $driver, Request $request): RedirectResponse
    {
//        session()->flash('referer_url', $request->server('HTTP_REFERER'));

        return Socialite::driver($driver)->redirect();
    }

    /**
     * @return RedirectResponse
     */
    public function handleProviderCallback(string $driver, OauthService $oauthService): RedirectResponse
    {
        if (! request()->input('error')) {
            $oauthService->callback($driver);
        }

        return redirect(session()->pull('url.intended') ?? route('home.index'));
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(): \Illuminate\Http\RedirectResponse
    {
        Auth::logout();

        return redirect()->back();
    }
}
