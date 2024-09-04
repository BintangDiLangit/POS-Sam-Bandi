<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UrlMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $path = $request->path();

        $firstSegment = explode('/', $path)[0];

        if ($firstSegment === 'pos' && env('APP_URL') == 'https://pos.sambandi.id/pos') {
            return $next($request);
        }
        if ($firstSegment === 'chain' && env('APP_URL') == 'https://pos.sambandi.id/chain') {
            return $next($request);
        }
        abort(403, 'Forbidden');
    }
}
