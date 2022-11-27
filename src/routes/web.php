<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\CarController;

Route::get('/', function () {
    return view('index');
});

Route::get('/models', [CarController::class, 'index'])->name('models');
Route::get('/models/{model}/single', [CarController::class, 'single'])->name('single');

require __DIR__ . '/auth.php';
