<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\NewPasswordController;

// Public home page
Route::get('/', [PublicController::class, 'index']);

// Dashboard (auth + verified)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profile routes (auth middleware)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Password Reset Routes (guest middleware)
Route::middleware('guest')->group(function () {
    // Show form to request password reset link
    Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');

    // Handle sending the reset link email
    Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');

    // Show password reset form (via token link)
    Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])->name('password.reset');

    // Handle resetting the password
    Route::post('/reset-password', [NewPasswordController::class, 'store'])->name('password.update');
});

// Include other auth routes (login, register, etc.)
require __DIR__.'/auth.php';

