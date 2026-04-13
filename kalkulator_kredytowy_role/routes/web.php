<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KalkulatorController;
use App\Http\Controllers\AuthController;

// Strona glowna - kalkulator
Route::get('/', [KalkulatorController::class, 'showForm'])->name('home');

// Obliczenia
Route::post('/oblicz', [KalkulatorController::class, 'calculate'])->name('kalkulator.oblicz');

// Logowanie
Route::get('/logowanie', [AuthController::class, 'showLogin'])->name('login');
Route::post('/logowanie', [AuthController::class, 'login'])->name('login.submit');
Route::get('/wyloguj', [AuthController::class, 'logout'])->name('logout');