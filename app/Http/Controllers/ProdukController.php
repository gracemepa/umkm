<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        return view('produk.index', [
            'produks' => Produk::all()
        ]);
    }

    public function create()
    {
        $data['title'] = 'Tambah Produk';
        return view('produk.create', $data);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'stok' => 'required',
        ]);

        Produk::create($validatedData);

        return redirect('/produk')->with('success', 'Produk berhasil ditambahkan');
    }

    public function edit(Produk $produk)
    {
        $data['title'] = 'Edit Produk';
        $data['produk'] = $produk;
        return view('produk.edit', $data);
    }

    public function update(Request $request, Produk $produk)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'stok' => 'required',
        ]);

        $produk->update($validatedData);

        return redirect('/produk')->with('success', 'Produk berhasil diubah');
    }

    public function destroy(Produk $produk)
    {
        $produk->delete();

        return redirect('/produk')->with('success', 'Produk berhasil dihapus');
    }
}
