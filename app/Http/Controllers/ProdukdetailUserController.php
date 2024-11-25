<?php

// namespace App\Http\Controllers;

// use App\Models\Produk;
// use App\Models\ProdukdetailUser;

// class ProdukdetailUserController extends Controller
// {
//     public function show($id_produk)
//     {
        
//         $produk = produk::findOrFail($id_produk);  
//         $produkDetail = ProdukdetailUser::where('id_produk', $id_produk)->first();  
//         if (!$produkDetail) {
//             // Bisa menambahkan pesan error atau menangani kasus produkDetail tidak ditemukan
//             return redirect()->route('user.produk.index')->with('error', 'Detail produk tidak ditemukan.');
//         }
//         return view('layouts.user.produk.detail', compact('produk', 'produkDetail'));
//     }
// }

namespace App\Http\Controllers;

use App\Models\ProdukUser;
use App\Models\ProdukdetailUser;
use Illuminate\Http\Request;

class ProdukdetailUserController extends Controller
{
    public function show($id)
    {
        // Ambil data produk berdasarkan ID
        $produk = ProdukUser::with('kategoriUser')->findOrFail($id);

        // Ambil detail produk terkait
        $produkDetail = ProdukdetailUser::where('id_produk', $id)->first();

        // Kirim data ke view
        return view('layouts.user.detail', compact('produk', 'produkDetail'));
    }
}

