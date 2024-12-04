<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;  
use Illuminate\Http\Request;
use App\Models\Activity;
use Illuminate\Support\Facades\Response;

class ProdukController extends Controller
{
    public function index()
    {
        
        $produks = Produk::with('kategori')->get();     // Mengambil semua data produk beserta kategori
        $totalProduk = Produk::count();
        $totalKategori = Kategori::count();
        return view('layouts.admin.produk.index', compact('produks', 'totalProduk', 'totalKategori'));
    }
    
    public function create()
    {
        $kategoris = Kategori::all();
        $data['title'] = 'Tambah Produk';
        return view('layouts.admin.produk.create', compact('kategoris', 'data'));
    }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([               // Validasi inputan form
            'nama_produk' => 'required|max:255',
            'harga_jual' => 'required|numeric',
            'stok' => 'required|numeric',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10240',
            'id_kategori' => 'required|exists:kategori,id_kategori', 
        ]);
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/produk'), $filename);
            $validatedData['gambar'] = 'uploads/produk/' . $filename;
        }
    
        $validatedData['id_kategori'] = $request->id_kategori;
        $produk = Produk::create($validatedData);
    
        Activity::create([                                  // Pencatatan aktivitas admin
            'description' => "Produk baru ditambahkan: " . $produk->nama_produk
        ]);
        return redirect()->route('admin.produk.index')->with('success', 'Produk berhasil ditambahkan');
    }
    

    public function edit($id)
    {
        $produk = Produk::find($id);
        if (!$produk) {
            return redirect()->route('admin.produk.index')->with('error', 'Produk tidak ditemukan.');
        }
        $kategoris = Kategori::all();
        return view('layouts.admin.produk.edit', compact('produk', 'kategoris'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama_produk' => 'required|max:255',
            'harga_jual' => 'required|numeric',
            'stok' => 'required|numeric',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10240', 
            'id_kategori' => 'required|exists:kategori,id_kategori', 
        ]);
        $produk = Produk::find($id);
        if (!$produk) {
            return redirect()->route('admin.produk.index')->with('error', 'Produk tidak ditemukan.');
        }
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/produk'), $filename);
            $validatedData['gambar'] = 'uploads/produk/' . $filename;
            if ($produk->gambar && file_exists(public_path($produk->gambar))) {
                unlink(public_path($produk->gambar)); 
            }
        }
        $validatedData['id_kategori'] = $request->id_kategori;
        $produk->update($validatedData);
        return redirect()->route('admin.produk.index')->with('success', 'Produk berhasil diperbarui');
    }

    public function delete($id)
    {
        $produk = Produk::find($id);
        if ($produk) {
            if ($produk->gambar && file_exists(public_path($produk->gambar))) {
                unlink(public_path($produk->gambar)); 
            }
            $produk->delete();
            return redirect()->route('admin.produk.index')->with('success', 'Produk berhasil dihapus');
        }
        return redirect()->route('admin.produk.index')->with('error', 'Produk tidak ditemukan');
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $produks = Produk::with('kategori')
                     ->where('nama_produk', 'like', '%' . $search . '%')
                     ->get();
        return view('layouts.admin.produk.index', compact('produks'));
    }

    public function export()
    {
        $produks = Produk::all();
        $csvHeader = ['ID Produk', 'Nama Produk', 'Harga', 'Stok', 'Kategori'];
        $csvData = $produks->map(function ($item) {
            return [
                $item->id_produk,
                $item->nama_produk,
                $item->harga_jual,
                $item->stok,
                $item->kategori->nama_kategori, 
            ];
        });

        // Membuat file CSV dari data
        $filename = 'produk_' . date('Y-m-d_H-i-s') . '.csv';
        $handle = fopen('php://memory', 'w');
        fputcsv($handle, $csvHeader);
        foreach ($csvData as $row) {
            fputcsv($handle, $row);
        }
        fseek($handle, 0);

        // Mengirim file CSV ke browser
        return Response::stream(function () use ($handle) {
            while (($row = fgets($handle)) !== false) {
                echo $row;
            }
        }, 200, [
            "Content-Type" => "text/csv",
            "Content-Disposition" => "attachment; filename=$filename",
        ]);
    }
}