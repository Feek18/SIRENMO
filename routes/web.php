<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('admin.pages.dashboard');
});

Route::get('/data-kategori', function () {
    return view('admin.pages.data-kategori');
});

Route::get('/profile', function () {
    return view('admin.pages.profile');
});

// routes/get login
Route::get('/login', [LoginController::class, 'indexlogin'])->name('login.index');
Route::get('/register', [LoginController::class, 'indexRegister']);
