<?php

use App\Http\Controllers\CustomersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\DriversController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\PesananDriversController;

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

Route::get('/dashboard-admin', function () {
    return view('admin.pages.dashboard');
})->middleware('auth');

Route::resource('/data-kendaraan', KendaraanController::class)->middleware('auth');
Route::resource('/data-pengguna', UsersController::class)->middleware('auth');
Route::resource('/data-kategori', KategoriController::class)->middleware('auth');
Route::resource('/data-customers', CustomersController::class)->middleware('auth');
Route::resource('/data-drivers', DriversController::class)->middleware('auth');

Route::get('/profile', function () {
    return view('admin.pages.profile');
});

// routes/get login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/register', [LoginController::class, 'register'])->middleware('guest');
Route::post('/register', [LoginController::class, 'store']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/driver', [DriversController::class, 'register']);
Route::get('/driver-main', [DriversController::class, 'index']);

// driver
Route::get('/dashboard', function () {
    return view('drivers.pages.dashboard');
})->middleware('auth');

Route::resource('/pesanan', PesananDriversController::class)->middleware('auth');
