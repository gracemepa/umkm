<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\PaymentProof;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Mengunggah bukti pembayaran untuk pesanan.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $orderId
     * @return \Illuminate\Http\RedirectResponse
     */
    
    // Menampilkan form pembayaran
    public function showPaymentForm($orderId)
    {
        // Ambil order berdasarkan ID
        $order = Order::find($orderId);

        // Pastikan order ditemukan
        if (!$order) {
            return redirect()->route('user.index')->with('error', 'Pesanan tidak ditemukan.');
        }

        // Kirim data order ke view
        return view('user.payment', compact('order'));
    }

    // Mengunggah bukti pembayaran
    public function uploadPaymentProof(Request $request, $orderId)
    {
        // Validasi file bukti pembayaran
        $request->validate([
            'proof' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        // Ambil order berdasarkan ID
        $order = Order::find($orderId);

        if (!$order) {
            return redirect()->route('user.index')->with('error', 'Pesanan tidak ditemukan.');
        }

        // Simpan bukti pembayaran
        if ($request->hasFile('proof')) {
            $proofPath = $request->file('proof')->store('payment_proofs', 'public');
            $order->payment_proof = $proofPath;
            $order->status = 'waiting_for_confirmation';  // Atur status order menjadi menunggu konfirmasi
            $order->save();
        }

        // Redirect dengan pesan sukses
        return redirect()->route('user.index')->with('success', 'Bukti pembayaran telah berhasil diunggah.');
    }
}

