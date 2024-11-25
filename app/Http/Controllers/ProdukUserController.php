<?php

// namespace App\Http\Controllers;

// use App\Models\ProdukUser;
// use App\Models\ProdukdetailUser;
// use Illuminate\Http\Request;

// class ProdukUserController extends Controller
// {
//     public function show($id)
//     {
//         // Mengambil produk beserta kategori yang terkait
//         $produk = ProdukUser::with('kategoriUser')->find($id);

//         // Pastikan produk ditemukan
//         if (!$produk) {
//             return redirect()->route('user.produk.index')->with('error', 'Produk tidak ditemukan.');
//         }

//         // Mengambil detail produk
//         $produkDetail = ProdukdetailUser::where('id_produk', $produk->id_produk)->first();

//         // Kirim data produk dan detail ke view
//         return view('layouts.user.produk.detail', compact('produk', 'produkDetail'));
//     }
// }

namespace App\Http\Controllers;

use App\Models\Produkuser;
use App\Models\KategoriUser;

class ProdukUserController extends Controller
{
    public function index()
    {
        // Menampilkan semua produk
        $produks = Produkuser::with('kategoriUser')->get();
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




