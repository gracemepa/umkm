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
     * Memproses pembayaran.
     */
    public function process(Request $request)
    {
        $user = auth()->user();
        $cartItems = Cart::where('user_id', $user->id)->with('product')->get();

        // Validasi input
        $request->validate([
            'shipping_method' => 'required',
        ]);

        // Simpan pesanan ke database
        $order = Order::create([
            'user_id' => $user->id,
            'total_price' => $cartItems->sum(function ($item) {
                return $item->quantity * $item->product->price;
            }) + $request->shipping_method, // Total harga + ongkos kirim
            'status' => 'Pending',
        ]);

        // Tambahkan produk ke pesanan
        foreach ($cartItems as $item) {
            $order->orderItems()->create([
                'product_id' => $item->product_id,
                'quantity' => $item->quantity,
                'price' => $item->product->price,
            ]);
        }

        // Kosongkan keranjang
        Cart::where('user_id', $user->id)->delete();

        return redirect()->route('checkout.index')->with('success', 'Pesanan berhasil dibuat!');
    }
}
