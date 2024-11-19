<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produks = Produk::all();  // Mengambil data produk
        return view('layouts.admin.produk.index', compact('produks'));
    }

    public function create()
    {
        $data['title'] = 'Tambah Produk';
        return view('layouts.admin.produk.create', $data);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_produk' => 'required',
            'harga_jual' => 'required|numeric',
            'stok' => 'required|integer',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi gambar
        ]);

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName(); // Buat nama file unik
            $file->move(public_path('uploads'), $filename); // Simpan ke folder public/uploads
            $validatedData['gambar'] = 'uploads/' . $filename; // Simpan path ke database
        }

        Produk::create($validatedData);

        return redirect()->route('admin.produk.index')->with('success', 'Produk berhasil ditambahkan');
    }

    public function edit($id)
    {
        $produk = Produk::find($id);

        if (!$produk) {
            return redirect()->route('admin.produk.index')->with('error', 'Produk tidak ditemukan.');
        }

        return view('layouts.admin.produk.edit', compact('produk'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama_produk' => 'required|string|max:255',
            'harga_jual' => 'required|numeric',
            'stok' => 'required|integer',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi gambar
        ]);

        $produk = Produk::find($id);

        if (!$produk) {
            return redirect()->route('admin.produk.index')->with('error', 'Produk tidak ditemukan.');
        }

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $filename);
            $validatedData['gambar'] = 'uploads/' . $filename;

            if ($produk->gambar && file_exists(public_path($produk->gambar))) {
                unlink(public_path($produk->gambar)); // Hapus gambar lama
            }
        }

        $produk->update($validatedData);

        return redirect()->route('admin.produk.index')->with('success', 'Produk berhasil diperbarui.');
    }

    public function delete($id)
    {
        $produk = Produk::find($id);

        if ($produk) {
            if ($produk->gambar && file_exists(public_path($produk->gambar))) {
                unlink(public_path($produk->gambar)); // Hapus gambar dari server
            }
            $produk->delete();
            return redirect()->route('admin.produk.index')->with('success', 'Produk berhasil dihapus.');
        }

        return redirect()->route('admin.produk.index')->with('error', 'Produk tidak ditemukan.');
    }
}
