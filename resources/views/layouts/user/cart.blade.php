@extends('layouts.user.appcopy')

@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-4">
                <h3 class="content-header-title text-info font-weight-bold" style="font-size: 2rem; letter-spacing: 1px;">Keranjang Belanja Anda</h3>
                <p class="lead text-muted" style="font-size: 1.1rem; font-style: italic;">Kelola barang-barang favorit Anda sebelum melanjutkan ke pembayaran. Nikmati pengalaman berbelanja yang mudah dan menyenangkan!</p>
            </div>
        </div>
    </div>

    <div class="content-body">
        @if(session('cart') && count(session('cart')) > 0)
        <div class="shopping-cart">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>Gambar</th>
                            <th>Produk</th>
                            <th>Detail</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                            <th>Total</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach(session('cart') as $id => $details)
                        <tr>
                            <td>
                                <img src="{{ asset($details['image'] ?? 'assets/images/products/default.jpg') }}" 
                                     alt="Gambar Produk" 
                                     class="img-fluid" 
                                     style="max-width: 100px; height: auto; border-radius: 8px;">
                            </td>
                            <td>{{ $details['name'] }}</td>
                            <td>
                                <strong>Deskripsi:</strong> {{ $details['description'] ?? 'Deskripsi tidak tersedia' }} <br>
                                <strong>Spesifikasi:</strong> {{ $details['specification'] ?? 'Spesifikasi tidak tersedia' }}
                            </td>
                            <td>Rp {{ number_format($details['price'], 0, ',', '.') }}</td>
                            <td>
                                <form action="{{ route('cart.update', $id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('PUT')
                                    <div class="input-group" style="max-width: 150px;">
                                        <button class="btn btn-sm btn-outline-secondary" name="action" value="decrease">-</button>
                                        <input type="text" class="form-control text-center" value="{{ $details['quantity'] }}" readonly>
                                        <button class="btn btn-sm btn-outline-secondary" name="action" value="increase">+</button>
                                    </div>
                                </form>
                            </td>
                            <td>Rp {{ number_format($details['price'] * $details['quantity'], 0, ',', '.') }}</td>
                            <td>
                                <form action="{{ route('cart.remove', $id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <form action="#">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="text-right">
                                            <!-- Tombol untuk menambahkan pesanan (sebelah kiri, warna hijau) -->
                                            <a href="{{ route('user.index') }}" class="btn btn-success">
                                                Tambah Pesanan
                                            </a>
                                            <!-- Tombol untuk checkout (tepat di sebelahnya, warna ungu) -->
                                            <a href="{{ route('layouts.user.checkout') }}" class="btn btn-purple ml-1">
                                                Checkout
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                
        @else
        <p class="text-center mt-4">Keranjang Anda kosong. <a href="{{ route('user.index') }}" class="text-info">Belanja sekarang</a>.</p>
        @endif
    </div>
</div>
@endsection
