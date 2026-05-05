<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout.get');

use App\Http\Controllers\OpinionController;

Route::get('/', [OpinionController::class, 'index']);
Route::get('/opinie', [OpinionController::class, 'wszystkie'])->name('opinie.wszystkie');

// Opinie
Route::get('/', [OpinionController::class, 'index'])->name('home');
Route::get('/opinie', [OpinionController::class, 'wszystkie'])->name('opinie.wszystkie');
Route::post('/dodaj-opinie', [OpinionController::class, 'store'])->name('opinie.store');

require __DIR__.'/auth.php';
