<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


//Basic pages route without data
Route::get('/', function () {
    return view('pages.welcome');
});

Route::get('/cross', function () {
    return view('pages.cross');
});

Route::get('/conform', function () {
    return view('pages.conform');
});

Route::get('/settings', function () {
    return view('pages.settings');
});

Route::get('/accessory', function () {
    return view('pages.accessory');
});




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


//auth routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
