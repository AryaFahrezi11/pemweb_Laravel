<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/home', function () {
    $title = "Homepage";
    return view('web.homepage',['title'=>$title]);
});

// Menampilkan daftar produk
Route::get('products', function () {
    $title = "products";
    return view('web.products',);
});

Route::get('products/{slug}', function ($slug) {
    return view('web.single_products');
});

Route::get('category', function () {
    return view('web.category');
});

Route::get('category/{slug}', function ($slug) {
    return view('web.single_category');
});

Route::get('cart', function () {
    return view('web.cart');
});

Route::get('checkout', function () {
    return view('web.checkout');
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
