<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureCorrectPanelAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $panel): Response
    {
        $user = auth()->user();

        if ($panel === 'admin' && !$user->is_admin) {
            abort(403, 'Unauthorized');
        }

        if ($panel === 'user' && $user->is_admin) {
            abort(403, 'Unauthorized');
        }

        return $next($request);
    }
}