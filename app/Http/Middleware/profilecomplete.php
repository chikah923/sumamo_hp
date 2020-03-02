<?php

namespace App\Http\Middleware;

use Closure;

class profilecomplete
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        $user = \Auth::user();

        if (!$user->profile && !in_array(\Route::currentRouteName(), ['dashboard.profile', 'dashboard.profile.update', 'dashboard.user.update', 'profile.storeMedia' ])) {
            session()->flash('swal', 'Your profile is Incomplete please fill in your details to be able to use our system!');
            return redirect()->route('dashboard.profile');
        }

        return $next($request);
    }
}
