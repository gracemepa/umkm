<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        // Mengambil semua data produk
        $produks = Produk::all();
        return view('layouts.admin.produk.index', compact('produks'));
    }

    public function create()
    {
        // Menampilkan halaman tambah produk
        $data['title'] = 'Tambah Produk';
        return view('layouts.admin.produk.create', $data);
    }

    public function store(Request $request)
    {
        // Validasi inputan form
        $validatedData = $request->validate([
            'nama_produk' => 'required|max:255',
            'harga_jual' => 'required|numeric',
            'stok' => 'required|numeric',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10240', // Validasi gambar
        ]);

        // Cek apakah ada file gambar yang diupload
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/produk'), $filename);
            // Menyimpan path gambar ke database
            $validatedData['gambar'] = 'uploads/produk/' . $filename;
        }

        // Membuat produk baru dan menyimpannya ke database
        Produk::create($validatedData);
        
        // Redirect ke halaman produk dengan pesan sukses
        return redirect()->route('admin.produk.index')->with('success', 'Produk berhasil ditambahkan');
    }

    public function edit($id)
    {
        // Mengambil data produk berdasarkan ID
        $produk = Produk::find($id);

        // Cek apakah produk ada
        if (!$produk) {
            return redirect()->route('admin.produk.index')->with('error', 'Produk tidak ditemukan.');
        }

        // Menampilkan halaman edit produk
        return view('layouts.admin.produk.edit', compact('produk'));
    }

    public function update(Request $request, $id)
    {
        // Validasi inputan form
        $validatedData = $request->validate([
            'nama_produk' => 'required|max:255',
            'harga_jual' => 'required|numeric',
            'stok' => 'required|numeric',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10240', // Validasi gambar
        ]);

        // Mengambil data produk berdasarkan ID
        $produk = Produk::find($id);

        // Cek apakah produk ada
        if (!$produk) {
            return redirect()->route('admin.produk.index')->with('error', 'Produk tidak ditemukan.');
        }

        // Cek apakah ada gambar baru yang diupload
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/produk'), $filename);
            // Menyimpan path gambar baru ke database
            $validatedData['gambar'] = 'uploads/produk/' . $filename;

            // Menghapus gambar lama jika ada
            if ($produk->gambar && file_exists(public_path($produk->gambar))) {
                unlink(public_path($produk->gambar)); // Menghapus gambar lama dari server
            }
        }

        // Memperbarui data produk
        $produk->update($validatedData);

        // Redirect ke halaman produk dengan pesan sukses
        return redirect()->route('admin.produk.index')->with('success', 'Produk berhasil diperbarui');
    }

    public function delete($id)
    {
        // Mengambil data produk berdasarkan ID
        $produk = Produk::find($id);

        // Cek apakah produk ada
        if ($produk) {
            // Menghapus gambar jika ada
            if ($produk->gambar && file_exists(public_path($produk->gambar))) {
                unlink(public_path($produk->gambar)); // Menghapus gambar dari server
            }

            // Menghapus produk dari database
            $produk->delete();

            // Redirect ke halaman produk dengan pesan sukses
            return redirect()->route('admin.produk.index')->with('success', 'Produk berhasil dihapus');
        }

        // Jika produk tidak ditemukan
        return redirect()->route('admin.produk.index')->with('error', 'Produk tidak ditemukan');
    }
}
