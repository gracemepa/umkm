<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Order;

class CartController extends Controller
{
    // Tambahkan produk ke keranjang
    public function add(Request $request)
    {
        // Ambil data produk berdasarkan ID
        $produk = Produk::find($request->produk_id);

        if (!$produk) {
            return redirect()->back()->with('error', 'Produk tidak ditemukan.');
        }

        // Ambil keranjang dari session (atau buat keranjang baru jika tidak ada)
        $cart = session()->get('cart', []);

        // Periksa apakah produk sudah ada di keranjang
        if (isset($cart[$produk->id_produk])) {
            // Tambahkan kuantitas produk
            $cart[$produk->id_produk]['quantity']++;
        } else {
            // Tambahkan produk baru ke keranjang
            $cart[$produk->id_produk] = [
                'name' => $produk->nama_produk,
                'price' => $produk->harga_jual,
                'quantity' => 1,
                'image' => $produk->gambar,
            ];
        }

        // Simpan kembali keranjang ke dalam session
        session()->put('cart', $cart);

        return redirect()->route('layouts.user.cart')->with('success', 'Produk berhasil ditambahkan ke keranjang!');
    }

    // Tampilkan halaman keranjang
    public function index()
    {
        // Ambil data keranjang dari session
        $cart = session()->get('cart', []);

        // Tampilkan view keranjang
        return view('layouts.user.cart', compact('cart'));
    }

    // Hapus produk dari keranjang
    public function remove($id)
    {
        // Ambil keranjang dari session
        $cart = session()->get('cart', []);

        // Hapus produk dari keranjang berdasarkan ID
        if (isset($cart[$id])) {
            unset($cart[$id]);
        }

        // Perbarui keranjang di session
        session()->put('cart', $cart);

        return redirect()->route('layouts.user.cart')->with('success', 'Produk berhasil dihapus dari keranjang.');
    }

    // Perbarui jumlah produk di keranjang
    public function update(Request $request, $id)
    {
        $request->validate([
            'action' => 'required|in:increase,decrease',
        ]);

        // Ambil data keranjang dari session
        $cart = session()->get('cart', []);

        // Periksa apakah produk ada di keranjang
        if (isset($cart[$id])) {
            if ($request->action === 'increase') {
                $cart[$id]['quantity']++;
            } elseif ($request->action === 'decrease' && $cart[$id]['quantity'] > 1) {
                $cart[$id]['quantity']--;
            }
        }

        // Simpan kembali keranjang ke session
        session()->put('cart', $cart);

        return redirect()->route('layouts.user.cart')->with('success', 'Keranjang berhasil diperbarui.');
    }

    // Checkout produk di keranjang
    public function checkout()
    {
        // Ambil data keranjang dari session
        $cart = session()->get('cart', []);

        // Jika keranjang kosong, alihkan kembali ke halaman keranjang
        if (empty($cart)) {
            return redirect()->route('layouts.user.cart')->with('error', 'Keranjang belanja Anda kosong.');
        }

        // Tampilkan halaman checkout
        return view('layouts.user.checkout', compact('cart'));
    }

    // Fungsi Buy Now
    public function buyNow(Request $request)
    {
        $request->validate([
            'produk_id' => 'required|exists:produks,id',
            'quantity' => 'required|integer|min:1',
        ]);

        // Ambil data produk berdasarkan ID
        $produk = Produk::find($request->produk_id);

        if (!$produk) {
            return redirect()->back()->with('error', 'Produk tidak ditemukan.');
        }

        // // Simpan detail pesanan ke database
        // $order = Order::create([
        //     'user_id' => auth()->id(),
        //     'total' => $produk->harga_jual * $request->quantity,
        // ]);

        // // Tambahkan produk ke order items
        // $order->orderItems()->create([
        //     'product_id' => $produk->id,
        //     'quantity' => $request->quantity,
        //     'price' => $produk->harga_jual,
        // ]);

        // Redirect ke halaman sukses atau checkout
        return redirect()->route('checkout.index')->with('success', 'Produk berhasil dibeli!');
    }
}
