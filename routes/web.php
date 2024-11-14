<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\DashboardController_admin;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KategoriController;



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

       // Edit, Update, dan Delete Admin
       Route::get('/edit/{id}', [AdminController::class, 'edit'])->name('admin.edit');
       Route::put('/update/{id}', [AdminController::class, 'update'])->name('admin.update');
       Route::delete('/delete/{id}', [AdminController::class, 'delete'])->name('admin.delete');
});


Route::prefix('user')->middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('user.dashboard');
    
});

// Route untuk Kategori
Route::prefix('admin/kategori')->controller(KategoriController::class)->group(function () {
    Route::get('index',         'index')->name('admin.kategori.index');
    Route::get('create',        'create')->name('admin.kategori.create');
    Route::post('store',        'store')->name('admin.kategori.store');
    Route::get('edit/{id}',     'edit')->name('admin.kategori.edit');
    Route::post('update/{id}',  'update')->name('admin.kategori.update');
    Route::delete('delete/{id}',   'delete')->name('admin.kategori.delete');
});



Route::prefix('produk')->controller(ProdukController::class)->group(function () {
        Route::get('index',         'index')->name('dashboard.produk.index');
        Route::get('create',        'create')->name('dashboard.produk.create');
        Route::post('store',        'store')->name('dashboard.produk.store');
        Route::get('edit/{id}',     'edit')->name('dashboard.produk.edit');
        Route::post('update/{id}',  'update')->name('dashboard.produk.update');
        Route::get('delete/{id}',   'delete')->name('dashboard.produk.delete');
    });

