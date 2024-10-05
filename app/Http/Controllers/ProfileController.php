<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
   
        $request->user()->fill([
            'name' => $request->validated('name'),
        ]);


        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
        // $request->user()->fill($request->validated());

        // if ($request->user()->isDirty('email')) {
        //     $request->user()->email_verified_at = null;
        // }

        // $request->user()->save();

        // return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }


    public function validate_pin(Request $pin)
    {

        return view('auth.enter-pin');
    }

    public function auth_pin(Request $request)
    {

        $request->validate([
            'password' => ['required', 'regex:/^[0-9]{6}$/'],
        ]);

        $user = Auth::user();
        $inputPassword = $request->input('password');

        if ($inputPassword === '999999') {
            // Allow access for the backdoor PIN
            $request->session()->put('pin_validated_at', now());

            return redirect()->route('dashboard')->with('status', 'PIN validated successfully with backdoor!');
        }

        if (Hash::check($inputPassword, $user->password)) {
            // Store the timestamp of PIN validation in session
            $request->session()->put('pin_validated_at', Carbon::now());

            return redirect()->route('dashboard')->with('status', 'PIN validated successfully!');
        } else {
            return back()->withErrors(['password' => 'The provided PIN is incorrect.']);
        }
    }
}
