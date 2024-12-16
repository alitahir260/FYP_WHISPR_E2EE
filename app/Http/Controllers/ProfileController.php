<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Container\Attributes\Storage;
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

        public function dashboard()
        {
            $user = Auth::user();
            $userId = 1;


                // Fetch users the authenticated user has chatted with
                $users = User::whereIn('id', function ($query) use ($userId) {
                    $query->select('sender_id')
                        ->from('messages')
                        ->where('receiver_id', $userId);
                })->orWhereIn('id', function ($query) use ($userId) {
                    $query->select('receiver_id')
                        ->from('messages')
                        ->where('sender_id', $userId);
                })->where('id', '!=', $userId) // Exclude the logged-in user
                ->distinct()
                ->get(['id', 'name']);


            // dd($user->toArray());
            $contacts = $user->contacts()->with('contactUser')->get();
                // Pass user data to the view
                return view('chat-panel', compact('user','contacts','users'));
        }



    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    // public function update(ProfileUpdateRequest $request): RedirectResponse
    // {
    //     dd($request->all());
    //     $request->user()->fill([
    //         'name' => $request->validated('name'),
    //     ]);

    //     $request->user()->save();

    //     return Redirect::route('profile.edit')->with('status', 'profile-updated');



    //     $request->user()->fill($request->validated());

    //     if ($request->user()->isDirty('email')) {
    //         $request->user()->email_verified_at = null;
    //     }

    //     $request->user()->save();

    //     return Redirect::route('profile.edit')->with('status', 'profile-updated');
    // }

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

    public function validate_otp()
    {

        return view('auth.enter-otp');
    }

    public function show()
    {
        $user = Auth::user();
        return view('profile.profile-settings',compact('user'));
    }


    public function update(Request $request)
    {

        // Validate the request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'required|string|max:500',
        ]);

        // dd($request->toarray());
        // Get the authenticated user
        $user = Auth::user();

        // Update user data
        $user->update([
            'name' => $validatedData['name'],
            'status' => $validatedData['status'],
        ]);

        // Return success response
        return redirect()->back()->with('success', 'Profile updated successfully!');
    }


    public function change_pin()
        {
            return view('profile.change-pin');
        }

        public function update_pin(Request $request)
{
    // Validate input fields
    $request->validate([
        'old_password' => 'required',
        'new_password' => 'required|min:4|confirmed',
    ]);

    $user = auth()->user();

    // Verify old password
    if (!Hash::check($request->old_password, $user->password)) {
        return redirect()->back()->with('error', 'Old password is incorrect.');
    }

    // Update password
    $user->update([
        'password' => Hash::make($request->new_password),
    ]);

    return redirect()->back()->with('success', 'Password updated successfully!');
}


    public function updateAvatar(Request $request)
    {
        $request->validate([
            'profile_picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Image validation rules
        ]);

        $user = Auth::user();

        // Handle file upload
        if ($request->hasFile('profile_picture')) {
            // Delete the old profile picture if it exists
            if ($user->profile_picture && Storage::exists('public/' . $user->profile_picture)) {
                Storage::delete('public/' . $user->profile_picture);
            }

            // Store the new profile picture
            $filePath = $request->file('profile_picture')->store('images', 'public');

            // Update the user profile picture field with relative path
            $user->update([
                'profile_picture' => $filePath, // Store the path relative to 'public/'
            ]);
        }

        return redirect()->back()->with('success', 'Profile picture updated successfully.');
    }
}
