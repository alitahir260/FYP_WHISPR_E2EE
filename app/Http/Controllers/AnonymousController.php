<?php

namespace App\Http\Controllers;

use App\Events\AnonymousChatConnected;
use App\Events\AnonymousMessageSent;
use App\Events\MessageSent;
use App\Models\AnonymousUser;
use Illuminate\Http\Request;

class AnonymousController extends Controller
{
    public function showCode()
    {
        $sessionId = session()->getId();

        AnonymousUser::where('session_id', $sessionId)->delete();
        do {
            $code = rand(100000, 999999);
        } while (AnonymousUser::where('code', $code)->exists());

        $anonymousUser = AnonymousUser::create([
            'session_id' => $sessionId,
            'code' => $code,
        ]);
        return view('anonymous-chat-connect', compact('code'));
    }

    public function chat()
    {
        return view('anonymous-chat-connect');
    }

    public function connect(Request $request)
    {
        $request->validate([
            'connect_code' => 'required|numeric',
        ]);

        $sessionId = session()->getId();
        $enteredCode = $request->connect_code;

        // Fetch the current anonymous user
        $currentUser = AnonymousUser::where('session_id', $sessionId)->first();

        if (!$currentUser) {
            return redirect()->back()->with('error', 'Please generate your anonymous code first.');
        }

        // Prevent self-connection
        if ($currentUser->code === $enteredCode) {
            return redirect()->back()->with('error', 'Cannot connect to yourself.');
        }

        $connectedUser = AnonymousUser::where('code', $enteredCode)->first();

        if (!$connectedUser) {
            return redirect()->back()->with('error', 'No user found with the entered code.');
        }

        $newChatCode = \Illuminate\Support\Str::uuid(16);
        session()->put('chat_code', $newChatCode);

        $currentUser->update(['code' => $newChatCode]);
        $connectedUser->update(['code' => $newChatCode]);

        broadcast(new AnonymousChatConnected($enteredCode, $newChatCode))->toOthers();

        return redirect()->route('anonymous.chat', ['chat_code' => $newChatCode])->with('success', 'Connected to anonymous chat!');

    }



    public function sendAnonymousMessage(Request $request)
    {

        $validated = $request->validate([
            'code' => 'required',
            'receiver_id' => 'required',
            'message' => 'required|string|max:1000',
        ]);

        $data = [
            'code' => session('chat_code'),
            'receiver_id' => $validated['receiver_id'],
            'message' => $validated['message'],
            'time' => now(),
        ];

        broadcast(new AnonymousMessageSent($data))->toOthers();

        return response()->json(['success' => true, 'message' => $data]);
    }

    public function disconnect()
    {
        logger('dissconecting');
        logger(session('chat_code'));
        $users = AnonymousUser::where('code', session('chat_code'))->get();
        logger($users);
        foreach ($users as $user) {
            $user->delete();
        }
        session()->forget('chat_code');
        return redirect()->route('profile.validate.pin');
    }
}
