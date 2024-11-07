<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\DashboardController_admin;


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

Route::prefix('dashboard')->group(function () {
    Route::get('', [DashboardController::class, 'index'])->name('dashboard');


    Route::prefix('produk')->controller(ProdukController::class)->group(function () {
        Route::get('index',         'index')->name('dashboard.produk.index');
        Route::get('create',        'create')->name('dashboard.produk.create');
        Route::post('store',        'store')->name('dashboard.produk.store');
        Route::get('edit/{id}',     'edit')->name('dashboard.produk.edit');
        Route::post('update/{id}',  'update')->name('dashboard.produk.update');
        Route::get('delete/{id}',   'delete')->name('dashboard.produk.delete');
    });
    
    Route::prefix('dashboard_admin')->group(function () {
        Route::get('', [DashboardController::class, 'index'])->name('dashboard_admin');
    });

});