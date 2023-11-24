<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function indexlogin()
    {
        // Logika untuk halaman selanjutnya
        return view('login');
    }
    public function indexRegister()
    {
        // Logika untuk halaman selanjutnya
        return view('register');
    }
}
