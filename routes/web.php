<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AccountController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('settings', function () {
    return Inertia::render('Settings/Settings');
})->middleware(['auth', 'verified'])->name('settings');

Route::get('/dashboard',
[DashboardController::class, 'index']   
)->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/gif-library', function () {
    return Inertia::render('giflibrary/Library');
})->middleware(['auth', 'verified'])->name('gif-library');

Route::get('/leaderboard', function () {
    return Inertia::render('Profile/Leaderboard');
})->middleware(['auth', 'verified'])->name('leaderboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/account',[AccountController::class,'show'])->middleware(['auth', 'verified'])->name('account');

require __DIR__.'/auth.php';

