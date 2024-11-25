<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Produkdetail;
use Illuminate\Http\Request;

class ProdukdetailController extends Controller
{
    // public function index()
    // {
    //     $produkdetails = Produkdetail::with('produk')->get(); // Mengambil produk detail beserta relasinya dengan produk
    //     $produks = Produk::all(); // Mengambil semua produk untuk form tambah produk detail
    //     return view('layouts.admin.produkdetail.index', compact('produkdetails', 'produks'))
    //         ->with('success', session('success')); // Kirim produkdetails, produks, dan pesan sukses
    // }

    // public function create()
    // {
    //     $produks = Produk::all();
    //     return view('layouts.admin.produkdetail.create', compact('produks'));
    // }

    public function index()
    {
    // Mengambil semua data produkdetail beserta produk dan kategori terkait
    $produkdetails = Produkdetail::with(['produk.kategori'])->get();

    return view('layouts.admin.produkdetail.index', compact('produkdetails'));
    }

    public function create()
    {
        // Mengambil data produk dengan kategori terkait
        $produks = Produk::with('kategori')->get();
    
        return view('layouts.admin.produkdetail.create', compact('produks'));
    }
    

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_produk' => 'required|exists:produk,id_produk',
            'deskripsi' => 'nullable|string|max:255',
            'spesifikasi' => 'nullable|string|max:255',
        ]);

        Produkdetail::create($validatedData);

        return redirect()->route('admin.produkdetail.index')->with('success', 'Produk detail berhasil ditambahkan');
    }

    public function edit($id)
    {
        // Menggunakan find untuk mencari berdasarkan id_produkdetail
        $produkdetail = Produkdetail::where('id_produkdetail', $id)->first();

        if (!$produkdetail) {
            return redirect()->route('admin.produkdetail.index')->with('error', 'Produk detail tidak ditemukan.');
        }

        $data['title'] = 'Edit Produk Detail';
        $data['produkdetail'] = $produkdetail;
        $data['produks'] = Produk::all();

        return view('layouts.admin.produkdetail.edit', $data);
    }

    public function update(Request $request, $id)
    {
        // Validasi inputan form
        $validatedData = $request->validate([
            'id_produk' => 'required|exists:produk,id_produk',  // Memastikan id_produk ada di tabel produk
            'deskripsi' => 'nullable|string|max:255',            // Deskripsi opsional
            'spesifikasi' => 'nullable|string|max:255',          // Spesifikasi opsional
        ]);

        // Mencari produk detail berdasarkan ID
        $produkdetail = Produkdetail::find($id);

        if (!$produkdetail) {
            return redirect()->route('admin.produkdetail.index')->with('error', 'Produk detail tidak ditemukan.');
        }

        // Update data produk detail
        $produkdetail->update($validatedData);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('admin.produkdetail.index')->with('success', 'Produk detail berhasil diperbarui');
    }

    public function delete($id)
    {
        // Pastikan menggunakan 'id_produkdetail' sebagai kolom utama
        $produkdetail = Produkdetail::where('id_produkdetail', $id)->first();

        if (!$produkdetail) {
            return redirect()->route('admin.produkdetail.index')->with('error', 'Produk detail tidak ditemukan.');
        }

        // Menghapus produk detail
        $produkdetail->delete();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('admin.produkdetail.index')->with('success', 'Produk detail berhasil dihapus.');
    }
}
