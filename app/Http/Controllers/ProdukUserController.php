<?php

namespace App\Http\Controllers;

use App\Models\Produk;

class ProdukUserController extends Controller
{
    public function index()
    {
        // Ambil semua produk dari database
        $produks = Produk::all();

        // Kirim data produk ke view
        return view('layouts.user.produk.index', compact('produks'));
    }
}
