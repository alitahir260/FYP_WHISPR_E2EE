<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {

//     $user = Auth::user();
//     dd($user);
//     // Pass user data to the view
//     return view('chat-panel', compact('user'));
// })->middleware(['auth', 'verified','check.pin'])->name('dashboard');

Route::middleware('auth','check.pin', 'verified')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', [ProfileController::class, 'dashboard'])->name('dashboard');
    Route::post('/add-contact', [ContactController::class, 'addContact'])->name('add-contact');
    Route::post('/add-contact2', [ContactController::class, 'store'])->name('add.contact2');
    Route::get('/test2', [ContactController::class, 'profile_view'])->name('profile_view');
    Route::get('/profile/settings', [ProfileController::class, 'show'])->name('profile.settings');

});

require __DIR__.'/auth.php';


Route::get('/test', function () {
    return view('layouts.login');
});
Route::get('/test4', function () {
    return view('layouts.login');
});
Route::get('/testu', function () {
    return view('layouts.login');
});
