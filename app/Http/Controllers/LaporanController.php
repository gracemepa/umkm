<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\BarangMasuk;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function exportPdf()
    {
        $produk = Produk::with('kategori')->get();
        $barangMasuk = BarangMasuk::all();

        $pdf = Pdf::loadView('layouts.admin.laporan-pdf', compact('produk', 'barangMasuk'));

        return $pdf->download('laporan.pdf');
    }
}
