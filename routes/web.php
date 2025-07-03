<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Berikut adalah daftar rute web untuk otentikasi dan fitur booking.
| Dibagi menjadi:
| - Guest (belum login)
| - Authenticated user (sudah login)
| - Booking room
*/

// ==================== TAMU (BELUM LOGIN) ====================
Route::middleware('guest')->group(function () {
    // Halaman login
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);

    // Halaman registrasi
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

// ==================== USER LOGIN ====================
Route::middleware('auth')->group(function () {
    // Halaman utama
    Route::get('/', function () {
        return view('home'); // Pastikan file resources/views/home.blade.php ada
    })->name('home');

    // Logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

// ==================== BOOKING (boleh tanpa login) ====================
Route::post('/book-room', [BookingController::class, 'store'])->name('book.room');
