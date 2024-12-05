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

        return redirect()->route('user.cart')->with('success', 'Produk berhasil ditambahkan ke keranjang!');
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

    public function update(Request $request, $id)
    {
        // Ambil keranjang dari session
        $cart = session('cart', []);
    
        // Pastikan item ada di dalam keranjang
        if (!isset($cart[$id])) {
            return redirect()->back()->with('error', 'Produk tidak ditemukan di keranjang.');
        }
    
        // Ambil tindakan (increase/decrease) dari form
        $action = $request->input('action');
        if ($action === 'increase') {
            // Tambah jumlah
            $cart[$id]['quantity'] += 1;
        } elseif ($action === 'decrease') {
            // Kurangi jumlah, tapi pastikan tidak kurang dari 1
            $cart[$id]['quantity'] = max(1, $cart[$id]['quantity'] - 1);
        }
    
        // Update keranjang di session
        session(['cart' => $cart]);
    
        return redirect()->back()->with('success', 'Jumlah barang berhasil diperbarui.');
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

    public function buyNow(Request $request)
    {
        // Cek apakah keranjang kosong
        $cart = session()->get('cart', []);
        if (empty($cart)) {
            return redirect()->route('user.cart')->with('error', 'Keranjang Anda kosong.');
        }
    
        // Di sini Anda bisa menambahkan logika untuk memproses pembelian, seperti membuat pesanan atau mengarahkan ke halaman pembayaran
    
        // Contoh: Membuat order baru (simulasi)
        $totalAmount = array_sum(array_map(function($item) {
            return $item['price'] * $item['quantity'];
        }, $cart));
    
        // Simpan transaksi atau buat pesanan (misalnya, menyimpan ke database)
        // Order::create([
        //     'user_id' => auth()->id(),
        //     'total_amount' => $totalAmount,
        //     'status' => 'pending',
        // ]);
    
        // Hapus keranjang setelah pembelian
        session()->forget('cart');
    
        // Alihkan ke halaman konfirmasi atau pembayaran
        return redirect()->route('user.payment')->with('success', 'Pembelian berhasil! Total: Rp ' . number_format($totalAmount, 0, ',', '.'));
    }
    
    public function bulkAction(Request $request)
{
    // Validate the incoming request for bulk actions
    $request->validate([
        'items' => 'required|array',  // Items is an array of product ids
        'items.*' => 'exists:produks,id', // Make sure each item exists in the Produk table
    ]);

    // Get the cart from the session
    $cart = session()->get('cart', []);

    // Perform bulk action, for example, remove selected items
    foreach ($request->items as $itemId) {
        unset($cart[$itemId]); // Remove each item from the cart
    }

    // Update the session with the modified cart
    session()->put('cart', $cart);

    return redirect()->route('user.cart')->with('success', 'Bulk action completed successfully.');
}

}

//         // Simpan detail pesanan ke database
//         $order = Order::create([
//             'user_id' => auth()->id(),
//             'total' => $produk->harga_jual * $request->quantity,
//         ]);

//         // Tambahkan produk ke order items
//         $order->orderItems()->create([
//             'product_id' => $produk->id,
//             'quantity' => $request->quantity,
//             'price' => $produk->harga_jual,
//         ]);

//         // Redirect ke halaman sukses atau checkout
//         return redirect()->route('checkout.index')->with('success', 'Produk berhasil dibeli!');
//     }
// }