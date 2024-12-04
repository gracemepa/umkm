<?php
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