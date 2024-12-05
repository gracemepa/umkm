<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;

class CheckoutController extends Controller
{
    /**
     * Menampilkan halaman checkout.
     */
    public function index()
    {
        $user = auth()->user(); // Data user yang sedang login
        $cartItems = Cart::where('user_id', $user->id)->with('product')->get(); // Data keranjang
        $subtotal = $cartItems->sum(function ($item) {
            return $item->quantity * $item->product->price;
        });

        $shippingOptions = [
            (object) ['id' => 1, 'name' => 'Hemat', 'price' => 23000, 'estimate' => '6 - 9 hari'],
            (object) ['id' => 2, 'name' => 'Reguler', 'price' => 45000, 'estimate' => '3 - 5 hari'],
        ];

        return view('user.checkout', compact('user', 'cartItems', 'subtotal', 'shippingOptions'));
    }

    /**
     * Memproses pembayaran dan membuat pesanan.
     */
    public function process(Request $request)
    {
        $user = auth()->user();
        $cartItems = Cart::where('user_id', $user->id)->with('product')->get();

        // Validasi input
        $request->validate([
            'shipping_method' => 'required',
            'payment_method' => 'required', // Validasi metode pembayaran
        ]);

        // Hitung total harga (barang + ongkos kirim)
        $totalPrice = $cartItems->sum(function ($item) {
            return $item->quantity * $item->product->price;
        }) + $request->shipping_method;

        // Simpan pesanan ke database
        $order = Order::create([
            'user_id' => $user->id,
            'total_price' => $totalPrice, // Total harga + ongkos kirim
            'shipping_method' => $request->shipping_method, // Metode pengiriman
            'payment_method' => $request->payment_method, // Metode pembayaran
            'status_pembayaran' => 'Pending', // Status pembayaran awalnya adalah 'Pending'
        ]);

        // Tambahkan produk ke pesanan
        foreach ($cartItems as $item) {
            $order->orderItems()->create([
                'product_id' => $item->product_id,
                'quantity' => $item->quantity,
                'price' => $item->product->price,
            ]);
        }

        // Kosongkan keranjang setelah checkout
        Cart::where('user_id', $user->id)->delete();

        return redirect()->route('checkout.index')->with('success', 'Pesanan berhasil dibuat! Silakan tunggu konfirmasi pembayaran.');
    }

    /**
     * Memperbarui status pembayaran setelah berhasil dibayar.
     */
    public function updatePaymentStatus(Request $request, $orderId)
    {
        // Cari pesanan berdasarkan ID
        $order = Order::findOrFail($orderId);

        // Validasi bukti pembayaran jika ada
        $request->validate([
            'payment_proof' => 'nullable|file|mimes:jpg,jpeg,png|max:2048', // Maks 2MB
        ]);

        // Jika ada file yang diunggah, simpan bukti pembayaran
        if ($request->hasFile('payment_proof')) {
            $filePath = $request->file('payment_proof')->store('payment_proofs', 'public');
            $order->bukti_pembayaran = $filePath;
        }

        // Perbarui status pembayaran
        $order->status_pembayaran = 'Selesai';
        $order->save();

        // Tampilkan pesan sukses setelah status pembayaran diperbarui
        return redirect()->route('checkout.index')->with('success', 'Status pembayaran berhasil diperbarui!');
    }
}