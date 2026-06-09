<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ReturnTypeWillChange;

class AuthController extends Controller
{
    public function showRegistration() {
        return view('registrasi');
    } 
}
