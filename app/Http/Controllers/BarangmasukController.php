<?php

namespace App\Http\Controllers;

use App\Models\Barangmasuk;
use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class BarangmasukController extends Controller
{
    public function index()
    {
        $barangmasuks = BarangMasuk::all();        // Mengambil semua data barang masuk beserta produk terkait
        $totalBarangMasuk = BarangMasuk::count();  // Menghitung total barang masuk
        return view('layouts.admin.barangmasuk.index', compact('barangmasuks', 'totalBarangMasuk'));
    }

    public function create()
    {
        $data['title'] = 'Tambah Barang Masuk';
        return view('layouts.admin.barangmasuk.create', $data);
    }

    public function store(Request $request)
    { 
        $validatedData = $request->validate([   // Validasi inputan form
            'nama_barang' => 'required|max:255',
            'tgl_masuk' => 'required|date',
            'total' => 'required|numeric',
            'harga_beli' => 'required|numeric',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10240', 
        ]);

        if ($request->hasFile('gambar')) {    
            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/barangmasuk'), $filename);
            $validatedData['gambar'] = 'uploads/barangmasuk/' . $filename;
        }

        $validatedData['subtotal'] = $validatedData['harga_beli'] * $validatedData['total'];
        $barangMasuk = Barangmasuk::create($validatedData);
    
        Activity::create([                       // Pencatatan aktivitas admin
            'description' => "Barang masukgthternr ditambahkan: " . $barangMasuk->nama_barang
        ]);
        return redirect()->route('admin.barangmasuk.index')->with('success', 'Barang masuk berhasil ditambahkan');
    }
    
    public function edit($id)
    {
        $barangmasuk = Barangmasuk::find($id);
        if (!$barangmasuk) {
            return redirect()->route('admin.barangmasuk.index')->with('error', 'Barang masuk tidak ditemukan.');
        }
        return view('layouts.admin.barangmasuk.edit', compact('barangmasuk'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama_barang' => 'required|max:255',
            'tgl_masuk' => 'required|date',
            'total' => 'required|numeric',
            'harga_beli' => 'required|numeric',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10240',
        ]);

        $barangmasuk = Barangmasuk::find($id);

        if (!$barangmasuk) {
            return redirect()->route('admin.barangmasuk.index')->with('error', 'Barang masuk tidak ditemukan.');
        }

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $filename);
            $validatedData['gambar'] = 'uploads/' . $filename;

            if ($barangmasuk->gambar && file_exists(public_path($barangmasuk->gambar))) {
                unlink(public_path($barangmasuk->gambar));
            }
        }

        $barangmasuk->update($validatedData);

        return redirect()->route('admin.barangmasuk.index')->with('success', 'Barang masuk berhasil diperbarui.');
    }

    public function delete($id)
    {
        $barangmasuk = Barangmasuk::find($id);
        if ($barangmasuk) {
            if ($barangmasuk->gambar && file_exists(public_path('uploads/barangmasuk/' . $barangmasuk->gambar))) {
                unlink(public_path('uploads/barangmasuk/' . $barangmasuk->gambar));
            }
            $barangmasuk->delete();
            return redirect()->route('admin.barangmasuk.index')->with('success', 'Barang masuk berhasil dihapus.');
        }
        return redirect()->route('admin.barangmasuk.index')->with('error', 'Barang masuk tidak ditemukan.');
    }

    public function export()
    {
        // Membuat file CSV dari data
        $produks = Barangmasuk::all();
        $csvHeader = ['ID Barang Masuk', 'Nama Barang', 'Tanggal Masuk', 'Total'];
        $csvData = $produks->map(function ($item) {
            return [
                $item->id_barangmasuk,
                $item->nama_barang,
                $item->tgl_masuk,
                $item->total,
            ];
        });

        $filename = 'barangmasuk_' . date('Y-m-d_H-i-s') . '.csv';
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