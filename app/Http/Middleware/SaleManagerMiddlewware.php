<?php

namespace App\Http\Middleware;

use App\Enums\RoleEnum;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class SaleManagerMiddlewware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            if (Auth::user()->role == RoleEnum::SALE_MANAGER) {
                return $next($request);
            } else {
                return redirect('/')->with('message', 'Access denied as you are not manager!');
            }
        } else {
            return redirect('/')->with('message', 'Login to access dashboard!');
        }
    }
}
