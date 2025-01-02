<?php

namespace App\Http\Controllers;

use App\Events\MessageSent;
use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function sendMessage(Request $request)
    {
        $validated = $request->validate([
            'receiver_id' => 'required|exists:users,id',
            'message' => 'required|string|max:1000',
        ]);

        $message = Message::create([
            'sender_id' => Auth::id(),
            'receiver_id' => $validated['receiver_id'],
            'message' => $validated['message'],
            'is_read' => false,
        ]);

        broadcast(new MessageSent($message))->toOthers();

        return response()->json(['success' => true, 'message' => $message]);
    }


    public function getMessages($userId)
    {
        $messages = Message::where(function ($query) use ($userId) {
            $query->where('sender_id', auth()->id())
                  ->where('receiver_id', $userId);
        })->orWhere(function ($query) use ($userId) {
            $query->where('sender_id', $userId)
                  ->where('receiver_id', auth()->id());
        })->orderBy('created_at', 'asc')->get();

        return response()->json(['messages' => $messages], 200);
    }

    public function markAsRead($messageId)
    {
        $message = Message::where('id', $messageId)->where('receiver_id', auth()->id())->firstOrFail();
        $message->update(['is_read' => true]);

        return response()->json(['message' => 'Message marked as read.'], 200);
    }




    public function getUserMessages($contactUserId)
{
    $currentUserId = auth()->id();

    // Fetch messages between current user and selected contact
    $messages = Message::where(function ($query) use ($currentUserId, $contactUserId) {
            $query->where('sender_id', $currentUserId)
                  ->where('receiver_id', $contactUserId);
        })
        ->orWhere(function ($query) use ($currentUserId, $contactUserId) {
            $query->where('sender_id', $contactUserId)
                  ->where('receiver_id', $currentUserId);
        })
        ->orderBy('created_at', 'asc')
        ->get(['sender_id', 'receiver_id', 'message', 'created_at']);



    return response()->json([
        'messages' => $messages,
        'current_user_id' => $currentUserId
    ]);
}




}
