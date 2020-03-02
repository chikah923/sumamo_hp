<?php

namespace App\Http\Middleware;

use Closure;
use PragmaRX\Google2FALaravel\Support\Authenticator;

class Auth2FA
{
    public function handle($request, Closure $next)
    {
        $authenticator = app(Authenticator::class)->boot($request);

        if ($authenticator->isAuthenticated()) {
            return $next($request);
        }

        $user = \Auth::user();

        if ($user->auth2fa) {
            return $authenticator->makeRequestOneTimePasswordResponse();
        } else {
        return $next($request);
        }
    }
}
