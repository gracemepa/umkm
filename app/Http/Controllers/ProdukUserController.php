<?php

namespace App\Http\Controllers;

use App\Models\Produkuser;
use App\Models\KategoriUser;

class ProdukUserController extends Controller
{
    public function index()
    {
        // Menampilkan semua produk
        $barangmasuk = Produkuser::with('kategoriUser')->get();
        $kategoris = KategoriUser::all(); // Menampilkan daftar kategori
        return view('layouts.user.index', compact('produks', 'kategoris'));
    }

    public function filterByCategory($id)
    {
        // Filter produk berdasarkan kategori
        $produks = Produkuser::where('id_kategori', $id)->with('kategoriUser')->get();
        $kategoris = KategoriUser::all(); // Menampilkan daftar kategori
        return view('layouts.user.index', compact('produks', 'kategoris'));
    }
}