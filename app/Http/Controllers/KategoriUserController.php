<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori; 
use Illuminate\Http\Request;

class KategoriUserController extends Controller
{
    public function index()
    {
        $produks = Produk::all(); 
        $kategoris = Kategori::all(); 

        return view('layouts.user.produk.index', compact('produks', 'kategoris'));
    }
}
