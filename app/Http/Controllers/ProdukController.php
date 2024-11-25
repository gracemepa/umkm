<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;  // Import model Kategori
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        // Mengambil semua data produk
        $produks = Produk::with('kategori')->get();  // Mengambil data produk beserta kategori
        return view('layouts.admin.produk.index', compact('produks'));
    }

    public function create()
    {
        // Mengambil semua kategori untuk ditampilkan di form
        $kategoris = Kategori::all();

        // Menampilkan halaman tambah produk dengan data kategori
        $data['title'] = 'Tambah Produk';
        return view('layouts.admin.produk.create', compact('kategoris', 'data'));
    }

    public function store(Request $request)
    {
        // Validasi inputan form
        $validatedData = $request->validate([
            'nama_produk' => 'required|max:255',
            'harga_jual' => 'required|numeric',
            'stok' => 'required|numeric',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10240', // Validasi gambar
            'id_kategori' => 'required|exists:kategori,id_kategori', // Validasi kategori
        ]);

        // Cek apakah ada file gambar yang diupload
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/produk'), $filename);
            // Menyimpan path gambar ke database
            $validatedData['gambar'] = 'uploads/produk/' . $filename;
        }

        // Menambahkan id_kategori pada data yang akan disimpan
        $validatedData['id_kategori'] = $request->id_kategori;

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

        // Mengambil semua kategori untuk ditampilkan di form edit
        $kategoris = Kategori::all();

        // Menampilkan halaman edit produk dengan data produk dan kategori
        return view('layouts.admin.produk.edit', compact('produk', 'kategoris'));
    }

    public function update(Request $request, $id)
    {
        // Validasi inputan form
        $validatedData = $request->validate([
            'nama_produk' => 'required|max:255',
            'harga_jual' => 'required|numeric',
            'stok' => 'required|numeric',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10240', // Validasi gambar
            'id_kategori' => 'required|exists:kategori,id_kategori', // Validasi kategori
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

        // Memperbarui data produk dan menyimpan kategori yang dipilih
        $validatedData['id_kategori'] = $request->id_kategori;
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
