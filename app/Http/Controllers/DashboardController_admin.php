<?php
namespace App\Http\Controllers;

use App\Models\Barangmasuk;
use App\Models\Kategori;
use App\Models\Produk;
use App\Models\Activity;
use Illuminate\Http\Request;

class DashboardController_admin extends Controller
{
    public function index()
    {
        // Mengambil statistik jumlah barang masuk, kategori, dan produk
        $barangMasukCount = Barangmasuk::count();
        $kategoriCount = Kategori::count();
        $produkCount = Produk::count();

        // Mengambil data lainnya seperti total transaksi dan produk terbaru
        $recentProduk = Produk::latest()->take(5)->get();
        $recentBarangMasuk = Barangmasuk::latest()->take(5)->get();

        // Mengambil 5 aktivitas admin terbaru
        $recentActivities = Activity::latest()->take(5)->get();

        // Mengirim data ke tampilan
        return view('layouts.admin.dashboard', compact('barangMasukCount', 'kategoriCount', 'produkCount', 'recentProduk', 'recentBarangMasuk','recentActivities'));
    }
}