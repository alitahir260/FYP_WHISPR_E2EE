<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\AnonymousUser;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

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
    public function store(Request $request): RedirectResponse
    {

        // $request->authenticate();

        // $request->session()->regenerate();


        $request->validate([
            'phone' => ['required', 'string'],
        ]);

        // Check if the user with the given phone number exists
        $user = User::where('phone', $request->phone)->first();

        if (!$user) {
            return back()->withErrors([
                'phone' => 'The provided phone number does not match our records.',
            ]);
        }

        // Log the user in (without password check)
        Auth::login($user);

        // Regenerate session
        $request->session()->regenerate();

        // return redirect()->intended(route('dashboard', absolute: false));
        return redirect()->route('profile.validate.pin');
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {

        //TemporaryWorkaround
        Auth::guard('web')->logout();
        return redirect('/login');


        //orignal Code
        // Auth::guard('web')->logout();

        // $request->session()->invalidate();

        // $request->session()->regenerateToken();

        // return redirect('/');
    }
}
//REAL or FAKE
