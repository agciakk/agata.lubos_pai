<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KalkulatorController;

Route::get('/', [KalkulatorController::class, 'showForm']);
Route::post('/oblicz', [KalkulatorController::class, 'calculate'])->name('kalkulator.oblicz');