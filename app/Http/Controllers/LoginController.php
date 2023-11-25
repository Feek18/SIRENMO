<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        // Logika untuk halaman selanjutnya
        return view('login');
    }
    public function register()
    {
        // Logika untuk halaman selanjutnya
        return view('register');
    }
    public function store(Request $request)
    {
        echo $request;
        $validatedData = $request->validate([
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'password' => 'required|min:5|max:255'
        ]);

        // $validatedData['password'] = Hash::make($validatedData['password']);

        // User::create($validatedData);

        // return redirect('/login')->with('success', 'Registration successfull! Please login');
    }

    public function authenticate(Request $request)
    {
        $validate = $request->validate([
            'username' => 'required',
            'password' => 'required|min:3'
        ]);

        if (Auth::attempt($validate)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        return back()->with('loginError', 'Login Failed!');
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/login');
    }
}
