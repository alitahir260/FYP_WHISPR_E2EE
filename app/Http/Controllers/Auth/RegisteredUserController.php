<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([

            'phone' => ['required', 'string', 'size:11', 'unique:users,phone'],
            // 'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', 'regex:/^[0-9]{6}$/'],
        ]);

        $user = User::create([

            // dd($request->toarray()),
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);
        // dd($request->toarray());
        event(new Registered($user));

        Auth::login($user);

        session()->flash('success', 'You have successfully created an account!');

        // return redirect(route('validate_pin', absolute: false));
        return redirect()->route('profile.validate.pin');

    }
}
