<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\CarController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\FileController;

Route::get('/', function () {
    return view('index');
});

Route::get('/models', [CarController::class, 'index'])->name('models');
Route::get('/models/{model}/single', [CarController::class, 'single'])->name('single');
Route::post('/testDrive', [FileController::class, 'write']);
Route::get('/service', [CarController::class, 'service'])->name('service');
Route::get('/placeholder', [CarController::class, 'placeholder']);
Route::get('/mail', [MailController::class, 'send']);

require __DIR__ . '/auth.php';
