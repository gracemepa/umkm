<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $kategoris = Kategori::all();  // Mengambil data kategori
        return view('layouts.admin.kategori.index', compact('kategoris'));
    }
    
    public function create()
    {
        return view('admin.kategori.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required|string|max:255',
        ]);

        Kategori::create($request->all());
        return redirect()->route('admin.kategori.index')->with('success', 'Kategori berhasil ditambahkan.');
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
        $request->validate([
            'nama_kategori' => 'required|string|max:255',
        ]);

        $kategori = Kategori::find($id);

        if (!$kategori) {
            return redirect()->route('admin.kategori.index')->with('error', 'Kategori tidak ditemukan.');
        }

        $kategori->update($request->all());
        return redirect()->route('admin.kategori.index')->with('success', 'Kategori berhasil diperbarui.');
    }

    public function delete($id)
    {
        $kategori = Kategori::where('id_kategori', $id)->first();
        
        if ($kategori) {
            $kategori->delete();
            return redirect()->route('admin.kategori.index')->with('success', 'Kategori berhasil dihapus.');
        }

        return redirect()->route('admin.kategori.index')->with('error', 'Kategori tidak ditemukan.');
    }
}
