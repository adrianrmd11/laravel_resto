<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\CartController;

// Halaman Utama
Route::get('/', fn() => view('home'))->name('home');

// Halaman statis
Route::view('/adrian', 'adrian');
Route::view('/portofolio', 'portofolio');

// Mahasiswa
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

// Booking / Reservasi
Route::get('/reservasi', [ReservationController::class, 'index'])->name('reservasi.index');
Route::post('/booking', [ReservationController::class, 'store'])->name('booking.store');
Route::get('/bookings', [ReservationController::class, 'list'])->name('booking.list');
Route::get('/lihat.reservasi', [ReservationController::class, 'lihat'])->name('lihat.reservasi');

// Menu
Route::get('/menu', [MenuController::class, 'index'])->name('menu.index');

// Tambah ke keranjang (versi benar)
Route::post('/add-to-cart', function (Request $request) {
    $cart = Session::get('cart', []);
    $nama = $request->nama;

    if (isset($cart[$nama])) {
        $cart[$nama]['jumlah']++;
    } else {
        $cart[$nama] = [
            'nama' => $request->nama,
            'harga' => $request->harga,
            'jumlah' => 1
        ];
    }

    Session::put('cart', $cart);
    return response()->json(['count' => count($cart)]);
})->name('cart.add');

// Checkout Page
Route::get('/checkout', function () {
    $cart = Session::get('cart', []);
    return view('checkout', compact('cart'));
})->name('checkout');

// Update jumlah (+/-)
Route::post('/cart/update', [CartController::class, 'update'])->name('cart.update');

// Kosongkan keranjang (opsional)
Route::get('/cart/clear', function () {
    Session::forget('cart');
    return redirect()->back()->with('status', 'Keranjang dikosongkan!');
})->name('cart.clear');
