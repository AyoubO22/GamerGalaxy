<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/support', [SupportController::class, 'index']);    

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//voor home.blade
use App\Http\Controllers\HomeController;

Route::get('/home', [HomeController::class, 'index']);
Route::get('/gamelist', [HomeController::class, 'gamelist']);
Route::get('/support', [HomeController::class, 'support']);
Route::get('/profile', [HomeController::class, 'profile']);
