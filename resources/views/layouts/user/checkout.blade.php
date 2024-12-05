@extends('layouts.user.appcopy')

@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-4">
                <!-- Judul dengan warna hijau dan ukuran font besar -->
                <h3 class="content-header-title text-success font-weight-bold" style="font-size: 2rem; letter-spacing: 1px;">Persiapkan Pembayaran Anda</h3>
                <!-- Deskripsi dengan gaya ringan dan warna lembut -->
                <p class="lead text-muted" style="font-size: 1.1rem; font-style: italic;">
                    Sebelum melanjutkan transaksi, pastikan semua barang yang Anda pilih sudah sesuai dengan keinginan Anda. 
                    Klik "Bayar Sekarang" untuk menyelesaikan pembelian dengan mudah dan cepat.
                </p>
            </div>
        </div>

        @if(session('cart') && count(session('cart')) > 0)
        <!-- Tabel Keranjang -->
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Gambar</th>
                        <th scope="col">Produk</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach(session('cart') as $id => $details)
                    <tr>
                        <!-- Gambar Produk -->
                        <td style="width: 120px; text-align: center;">
                            <img src="{{ asset($details['image'] ?? 'assets/images/products/default.jpg') }}" 
                                 alt="Gambar Produk" 
                                 style="width: 100px; height: auto; border-radius: 8px;">
                        </td>
                        <!-- Nama Produk -->
                        <td>{{ $details['name'] }}</td>
                        <!-- Jumlah Produk -->
                        <td>
                            <div class="input-group" style="max-width: 120px;">
                                <input type="text" class="form-control text-center" value="{{ $details['quantity'] }}" readonly>
                            </div>
                        </td>
                        <!-- Subtotal -->
                        <td>Rp {{ number_format($details['price'] * $details['quantity'], 0, ',', '.') }}</td>
                    </tr>
                    @endforeach
                </tbody>
                <!-- Total Keseluruhan -->
                <tfoot>
                    <tr>
                        <th colspan="3" class="text-right">Total:</th>
                        <th>Rp {{ number_format(array_sum(array_map(function($item) { 
                            return $item['price'] * $item['quantity']; 
                        }, session('cart'))), 0, ',', '.') }}</th>
                    </tr>
                </tfoot>
            </table>
        </div>

        <!-- Tombol Bayar -->
        <div class="text-right mt-4">
            <form action="{{ route('checkout.payment') }}" method="GET">
                <button type="submit" class="btn btn-success btn-lg">Bayar Sekarang</button>
            </form>
        </div>              
        @else
        <!-- Keranjang Kosong -->
        <div class="text-center my-5">
            <p class="text-muted" style="font-size: 1.2rem;">Keranjang Anda kosong. 
                <a href="{{ route('user.index') }}" class="text-primary font-weight-bold">Belanja sekarang</a>.
            </p>
        </div>
        @endif
    </div>
</div>
@endsection