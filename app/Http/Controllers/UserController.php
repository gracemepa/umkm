<?php

namespace App\Http\Controllers;

use App\Models\Transaction;  // Pastikan Anda menggunakan model yang sesuai
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function confirmation($id)
    {
        // Ambil transaksi berdasarkan id
        $transaction = Transaction::findOrFail($id);

        // Pass data transaksi ke view konfirmasi
        return view('user.confirmation', compact('transaction'));
    }
    public function processConfirmation($id)
{
    // Ambil transaksi berdasarkan ID
    $transaction = Transaction::findOrFail($id);

    // Update status transaksi menjadi 'completed' atau sesuai dengan proses Anda
    $transaction->status = 'completed'; 
    $transaction->save();

    // Redirect ke halaman lain setelah konfirmasi, misalnya halaman sukses
    return redirect()->route('user.success')->with('success', 'Pembayaran berhasil dikonfirmasi!');
}

}
