<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class DashboardController_admin extends Controller
{
    /**
     * Display the dashboard admin view.
     */
    public function index()
    {
        // Mengambil data yang ingin ditampilkan di dashboard, misalnya daftar produk atau statistik
        // $totalProduk = Produk::count();
        // $produkTerbaru = Produk::latest()->take(5)->get();

        return view('layouts.admin.dashboard', );//compact('totalProduk', 'produkTerbaru'
    }
}
