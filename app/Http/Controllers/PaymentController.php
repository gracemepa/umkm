<?php
// PaymentController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    // Fungsi untuk menampilkan halaman metode pembayaran
    public function showPaymentForm()
    {
        return view('layouts.user.payment');
    }

    // Fungsi untuk menangani pengiriman bukti pembayaran
    public function uploadProof(Request $request)
{
    // Validasi file yang diunggah
    $request->validate([
        'proof' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
    ]);

    // Mengambil file yang diunggah
    $file = $request->file('proof');

    // Menyimpan file ke folder 'uploads/payment_proofs'
    $path = $file->store('uploads/payment_proofs', 'public');

    // Simpan informasi file ke database atau lakukan proses lainnya sesuai kebutuhan
    // Misalnya: PaymentProof::create(['path' => $path, 'user_id' => auth()->id()]);

    // Redirect ke halaman konfirmasi pembayaran atau halaman lain
    return redirect()->route('checkout.payment')->with('success', 'Bukti pembayaran berhasil diunggah.');
}
}
