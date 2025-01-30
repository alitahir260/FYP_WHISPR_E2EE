<?php

use App\Http\Controllers\AnonymousController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MessageController;
use App\Models\AnonymousUser;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::middleware('auth','check.pin', 'verified')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');


    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', [ProfileController::class, 'dashboard'])->name('dashboard');
    Route::post('/add-contact', [ContactController::class, 'addContact'])->name('add-contact');


    // Route::post('/add-contact2', [ContactController::class, 'store'])->name('add.contact2');
    Route::get('/test2', [ContactController::class, 'profile_view'])->name('profile_view');
    Route::get('/profile/settings', [ProfileController::class, 'show'])->name('profile.settings');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('/profile/update-avatar', [ProfileController::class, 'updateAvatar'])->name('profile.update.avatar');


    Route::get('/messages/{contactUserId}', [MessageController::class, 'getUserMessages']);
    Route::get('/messages/{userId}', [MessageController::class, 'getUserMessages']);


    Route::post('/messages/send', [MessageController::class, 'sendMessage'])->name('messages.send');

});

Route::get('/anonymous-chat/code', [AnonymousController::class, 'showCode'])->name('anonymous.code');
Route::post('/anonymous/messages/send', [AnonymousController::class, 'sendAnonymousMessage'])->name('anonymous.messages.send');
Route::post('/anonymous-chat/connect', [AnonymousController::class, 'connect'])->name('anonymous.chat.connect');

Route::get('/anonymous-chat/disconnect', [AnonymousController::class, 'disconnect'])->name('anonymous.chat.disconnect');

Route::get('/anonymous/chat/{chat_code}', function ($chat_code) {
    $user = AnonymousUser::where('session_id', session()->getId())->first();
    
    if (!$user) {
        return redirect()->route('anonymous.code')->with('error', 'Invalid chat code');
    }

    session()->put('chat_code', $chat_code);
    // Retrieve the other user in the chat session
    $user2 = AnonymousUser::where('code', $chat_code)->where('id', '!=', $user->id)->first();
    $users = [$user2];

    return view('anonymous-chat-panel', compact('user', 'users'));
})->name('anonymous.chat');


require __DIR__.'/auth.php';


Route::get('/test', function () {
    return view('auth.login');
});
Route::get('/test4', function () {
    return view('layouts.login');
});
Route::get('/testu', function () {
    return view('layouts.login');
});
