<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/registrasi', [AuthController::class, 'showRegistration']) ->name('registrasi.show');

Route::get('/', function () {
    return view('testcard');
});

Route::get('/test-f', function () {
    return view('test_F');
});

