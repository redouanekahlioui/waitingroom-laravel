<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckServerCapacity
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->is('waiting-room')) {
            return $next($request);
        }

        if (env('APP_OVERLOADED', false)) {
            // Redirige a la sala de espera si el servidor está sobrecargado
            return redirect()->route('waiting.room');
        }

        return $next($request);
    }
}
