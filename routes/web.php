<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\DashboardController_admin;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BarangmasukController;
use App\Http\Controllers\ProdukdetailController;
use App\Http\Controllers\ProdukUserController;
use App\Http\Controllers\KategoriUserController;
use App\Http\Controllers\ProdukdetailUserController;
use App\Http\Controllers\CartController;

// Route default dashboard setelah login
Route::get('/', function () {
    return view('auth.login');
});

// Route untuk login dan logout
Route::prefix('auth')->controller(AuthController::class)->group(function () {
    Route::get('login', 'login')->name('login.form');
    Route::post('login', 'login_process')->name('login.submit'); 
    Route::get('register', 'register')->name('register');
    Route::post('register', 'register_process');
    Route::post('logout', 'logout')->name('logout');

    Route::get('forgot-password', 'forgotPassword')->name('forgot-password.form'); // Form untuk forgot password
    Route::post('forgot-password', 'sendResetLink')->name('password.email'); // Kirim email reset link

    Route::get('reset-password/{token}', 'resetPasswordForm')->name('password.reset'); // Form reset password
    Route::post('reset-password', 'resetPassword')->name('password.update'); // Proses reset password

    Route::get('verify-email/{token}', 'verifyEmail')->name('verify.email');
});

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController_admin::class, 'index'])->name('admin.dashboard');
    Route::get('/create', [AdminController::class, 'create'])->name('admin.create');
    Route::post('/store', [AdminController::class, 'store'])->name('admin.store');
    Route::get('/edit/{id}', [AdminController::class, 'edit'])->name('admin.edit');
    Route::put('/update/{id}', [AdminController::class, 'update'])->name('admin.update');
    Route::delete('/delete/{id}', [AdminController::class, 'delete'])->name('admin.delete');
});


Route::prefix('user')->middleware('auth')->group(function () {
Route::get('/index', [ProdukUserController::class, 'index'])->name('user.index');
    
});

// Route untuk Kategori
Route::prefix('admin/kategori')->controller(KategoriController::class)->group(function () {
    Route::get('/index',         'index')->name('admin.kategori.index');
    Route::get('/create',        'create')->name('admin.kategori.create');
    Route::post('/store',        'store')->name('admin.kategori.store');
    Route::get('/edit/{id}',     'edit')->name('admin.kategori.edit');
    Route::put('/update/{id}',   'update')->name('admin.kategori.update');
    Route::delete('/delete/{id}','delete')->name('admin.kategori.delete');
});


Route::prefix('admin/produk')->controller(ProdukController::class)->group(function () {
    Route::get('index',         'index')->name('admin.produk.index');
    Route::get('create',        'create')->name('admin.produk.create');
    Route::post('store',        'store')->name('admin.produk.store');
    Route::get('edit/{id}',     'edit')->name('admin.produk.edit');
    Route::put('update/{id}',   'update')->name('admin.produk.update');
    Route::delete('delete/{id}', 'delete')->name('admin.produk.delete'); 
    Route::get('search', 'search')->name('admin.produk.search');
    Route::get('export', 'export')->name('admin.produk.export');

});

Route::prefix('admin/produkdetail')->controller(ProdukdetailController::class)->group(function () {
    Route::get('index',         'index')->name('admin.produkdetail.index');
    Route::get('create',        'create')->name('admin.produkdetail.create');
    Route::post('store',        'store')->name('admin.produkdetail.store');
    Route::get('edit/{id}',     'edit')->name('admin.produkdetail.edit');
    Route::put('update/{id}',   'update')->name('admin.produkdetail.update');
    Route::delete('delete/{id}','delete')->name('admin.produkdetail.delete');

});

Route::prefix('admin/barangmasuk')->controller(BarangmasukController::class)->group(function () {
    Route::get('index', 'index')->name('admin.barangmasuk.index');
    Route::get('create', 'create')->name('admin.barangmasuk.create');
    Route::post('store', 'store')->name('admin.barangmasuk.store');
    Route::get('edit/{id}', 'edit')->name('admin.barangmasuk.edit');
    Route::put('update/{id}', 'update')->name('admin.barangmasuk.update');
    Route::delete('delete/{id}', 'delete')->name('admin.barangmasuk.delete');
    Route::get('export', 'export')->name('admin.barangmasuk.export');
});



// R O U T E S     U S E R

Route::prefix('user')->controller(ProdukUserController::class)->group(function () {
    Route::get('index', 'index')->name('user.index');
    Route::get('category/{id}', 'filterByCategory')->name('user.filter');
});

Route::prefix('user')->controller(KategoriUserController::class)->group(function () {
    Route::get('index', 'index')->name('user.index'); 
});

Route::get('user/detail/{id_produk}', [ProdukdetailUserController::class, 'show'])->name('user.detail');

// B I N T A N G
// Routes untuk Keranjang
// Route::prefix('user')->middleware('auth')->group(function () {
//     Route::get('/cart', [CartController::class, 'index'])->name('layouts.user.cart');
//     Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
//     Route::put('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update');
//     Route::delete('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
//     Route::get('/cart/checkout', [CartController::class, 'checkout'])->name('layouts.user.checkout');
//     Route::post('/cart/buy-now', [CartController::class, 'buyNow'])->name('cart.buyNow');
//     Route::post('/cart/bulk-action', [CartController::class, 'bulkAction'])->name('cart.bulkAction');
//     Route::put('user/cart/bulk-action', [CartController::class, 'bulkAction'])->name('cart.bulkAction');


// });

// // Route untuk menampilkan halaman checkout
// Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');

// // Route untuk memproses pembayaran
// Route::post('/checkout', [CheckoutController::class, 'process'])->name('checkout.process');
