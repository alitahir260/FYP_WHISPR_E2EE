<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;





Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

     Route::get('login', [AuthenticatedSessionController::class, 'create'])->name("login");


    Route::post('login-post', [AuthenticatedSessionController::class, 'store'])->name("login.fix");

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.store');

});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)
                ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');

                Route::get('validate_pin',[ProfileController::class, 'validate_pin'])->name('profile.validate.pin');
                Route::post('auth_pin',[ProfileController::class, 'auth_pin'])->name('profile.auth.pin');
                Route::get('validate_otp',[ProfileController::class, 'validate_otp'])->name('profile.validate.otp');

                Route::get('/change-pin', [ProfileController::class, 'change_pin'])->name('pin.change');
                Route::put('/update-pin', [ProfileController::class, 'update_pin'])->name('pin.update');



                Route::get('/lock-screen', [ProfileController::class, 'lockScreen'])->name('profile.lock.screen');












                Route::post('/ping', function () {
                    // Update the session validation timestamp to keep the user valid
                    session()->put('pin_validated_at', now());

                    return response()->json(['status' => 'active']);
                })->name('profile.auth.ping');
});
