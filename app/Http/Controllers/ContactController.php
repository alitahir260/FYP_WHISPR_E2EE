<?php

namespace App\Http\Controllers;
use Illuminate\Validation\ValidationException;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function addContact(Request $request)
    {


        $request->validate([
            'phone' => 'required|numeric', // Validate phone input
        ]);

        // Check if the phone number exists in the users table
        $user = User::where('phone', $request->phone)->first();

        if ($user) {
            return response()->json(['exists' => true, 'message' => 'Phone number exists.']);
        } else {
            return response()->json(['exists' => false, 'message' => 'Phone number does not exist.']);
        }
    //     $request->validate([
    //         'phone' => 'required|numeric|exists:users,phone',
    //     ]);

    //     $contactUser = User::where('phone', $request->phone)->first();

    //     if (!$contactUser) {
    //         return response()->json(['success' => false, 'message' => 'User with this phone number does not exist.']);
    //     }

    //     $user = auth()->user();

    //     if ($user->contacts()->where('phone', $request->phone)->exists()) {
    //         return response()->json(['success' => false, 'message' => 'This contact is already in your list.']);
    //     }

    //     Contact::create([
    //         'user_id' => $user->id,
    //         'name' => $contactUser->name,
    //         'phone' => $contactUser->phone,
    //     ]);

    //     return response()->json(['success' => true, 'message' => 'Contact added successfully.']);
    }


    public function store(Request $request)
    {
       // Step 1: Validate the phone number


       try {
        // Step 1: Validate the phone number
        $validated = $request->validate([
            'phone' => 'required|string|exists:users,phone', // Ensure the phone exists in the `users` table
        ]);

        // Step 2: Get the logged-in user
        $currentUser = auth()->user();
        if (!$currentUser) {
            return redirect()->back()->with('error', 'You must be logged in to add a contact.');
        }

        // Step 3: Find the contact user
        $contactUser = User::where('phone', $validated['phone'])->first();
        if (!$contactUser) {
            return redirect()->back()->with('error', 'The phone number entered does not match any user.');
        }

        // Step 4: Prevent adding oneself
        if ($currentUser->id === $contactUser->id) {
            return redirect()->back()->with('error', 'You cannot add yourself as a contact.');
        }

        // Step 5: Check if the contact already exists
        $existingContact = Contact::where('user_id', $currentUser->id)
                                  ->where('contact_user_id', $contactUser->id)
                                  ->first();

        if ($existingContact) {
            return redirect()->back()->with('error', 'This contact is already added.');
        }

        // Step 6: Create the contact manually
        $contact = Contact::create([
            'name' => $contactUser->name,
            'phone' => $contactUser->phone,
            'user_id' => $currentUser->id, // The user adding the contact
            'contact_user_id' => $contactUser->id, // The user being added as a contact
        ]);

        // Step 7: Return success
        return redirect()->back()->with('success', 'Contact added successfully!');
    } catch (ValidationException $e) {
        // Return validation errors as a toast notification
        return redirect()->back()->with('error', $e->validator->errors()->first());
    } catch (\Exception $e) {
        // Handle unexpected errors
        return redirect()->back()->with('error', 'An unexpected error occurred. Please try again.');
    }
}


    public function profile_view()
    {
        return view('profile-page');
    }


}
