<?php

namespace App\Http\Controllers\Auth;

use Illuminate\View\View;
use App\Models\ProductItem;
use App\Jobs\MigrateCartJob;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\Auth\LoginRequest;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        if (Auth::check() && session('cart')) {
            // Migrate all cart item in the session
            MigrateCartJob::dispatch(auth()->id())->onQueue('cart_migration');
        }

        //return redirect()->intended(RouteServiceProvider::HOME);
        return back();
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return back();
    }
}
