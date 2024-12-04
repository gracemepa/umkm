<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Activity;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $kategoris = Kategori::all();
        $totalKategori = Kategori::count();
        return view('layouts.admin.kategori.index', compact('kategoris', 'totalKategori'));
    }

    public function create()
    {
        $data['title'] = 'Tambah Kategori';
        return view('layouts.admin.kategori.create', $data);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([       // Validasi inputan form
            'nama_kategori' => 'required|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10240',
        ]);
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/kategori'), $filename);
            $validatedData['gambar'] = 'uploads/kategori/' . $filename;
        }
        $kategori = Kategori::create($validatedData);
    
        Activity::create([                          // Pencatatan aktivitas admin
            'description' => "Kategori baru ditambahkan: " . $kategori->nama_kategori
        ]);
        return redirect()->route('admin.kategori.index')->with('success', 'Kategori berhasil ditambahkan');
    }
    
    
    public function edit($id)
    {
        $kategori = Kategori::find($id);
        if (!$kategori) {
            return redirect()->route('admin.kategori.index')->with('error', 'Kategori tidak ditemukan.');
        }
        return view('layouts.admin.kategori.edit', compact('kategori'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama_kategori' => 'required|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10240',
        ]);
        $kategori = Kategori::find($id);
        if (!$kategori) {
            return redirect()->route('admin.kategori.index')->with('error', 'Kategori tidak ditemukan.');
        }
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/kategori'), $filename);
            $validatedData['gambar'] = 'uploads/kategori/' . $filename;
            if ($kategori->gambar && file_exists(public_path($kategori->gambar))) {
                unlink(public_path($kategori->gambar));
            }
        }
        $kategori->update($validatedData);
        return redirect()->route('admin.kategori.index')->with('success', 'Kategori berhasil diperbarui.');
    }

    public function delete($id)
    {
        $kategori = Kategori::find($id);
        if ($kategori) {
            if ($kategori->gambar && file_exists(public_path('uploads/kategori/' . $kategori->gambar))) {
                unlink(public_path('uploads/kategori/' . $kategori->gambar));
            }
            $kategori->delete();
            return redirect()->route('admin.kategori.index')->with('success', 'Kategori berhasil dihapus.');
        }
        return redirect()->route('admin.kategori.index')->with('error', 'Kategori tidak ditemukan.');
    }
}