<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MessageController;
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
    Route::get('/profile/settings', [ProfileController::class, 'sh  ow'])->name('profile.settings');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('/profile/update-avatar', [ProfileController::class, 'updateAvatar'])->name('profile.update.avatar');


    Route::get('/messages/{contactUserId}', [MessageController::class, 'getUserMessages']);
    Route::get('/messages/{userId}', [MessageController::class, 'getUserMessages']);


    Route::post('/messages/send', [MessageController::class, 'sendMessage'])->name('messages.send');




});

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
