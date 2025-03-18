<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Menampilkan daftar produk
Route::get('/products', function () {
    return "Daftar Produk";
});

Route::get('/category', function () {
    return "Daftar category";
});

Route::get('/Detail-category', function () {
    return "Detail Category";
});

// Menampilkan detail produk
Route::get('/products/{id}', function ($id) {
    return "Detail Produk dengan ID: " . $id;
});

// Menampilkan halaman checkout
Route::get('/checkout', function () {
    return "Halaman Checkout";
});

// Menampilkan halaman profil pengguna
Route::get('/profile', function () {
    return "Halaman Profil Pengguna";
});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
