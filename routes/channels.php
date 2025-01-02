<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

//
//Broadcast::channel('chat.{receiverId}', function ($user, $receiverId) {
//    return (int) $user->id === (int) $receiverId || $user->isFriendWith($receiverId);
//});
//
//
//Broadcast::channel('chat', function ($user) {
//    return Auth::check(); // Adjust based on your requirements
//});
