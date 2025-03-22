<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        // Check if the user is authenticated with any of the specified guards
        if (!Auth::guard($guards[0] ?? null)->check()) {
            return $this->unauthenticated($request);
        }

        return $next($request);
    }

    /**
     * Handle unauthenticated users.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    protected function unauthenticated(Request $request)
    {
        if ($request->expectsJson()) {
            return response()->json(['message' => 'Unauthenticated.'], 401);
        }

        return redirect()->guest(route('login'));
    }
}
