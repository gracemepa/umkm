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
Route::get('/dashboard', [DashboardController::class, 'index'])->name('user.dashboard');
    
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
    Route::delete('delete/{id}', 'delete')->name('admin.produk.delete'); // Changed to DELETE
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
});



// R O U T E S     U S E R

Route::prefix('user/produk')->controller(ProdukUserController::class)->group(function () {
    Route::get('index', 'index')->name('user.produk.index'); 
});

Route::prefix('user/produk')->controller(KategoriUserController::class)->group(function () {
    Route::get('index', 'index')->name('user.produk.index'); 
});

Route::get('user/produk/detail/{id_produk}', [ProdukdetailUserController::class, 'show'])->name('user.produk.detail');
