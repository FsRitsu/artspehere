<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('testcard');
});

Route::get('/test-f', function () {
    return view('test_F');
});

