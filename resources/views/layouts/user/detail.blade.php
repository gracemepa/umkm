{{-- layout user/produk/detail.blade.php --}}
@extends('layouts.user.appcopy')

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-4">
                    <h3 class="content-header-title text-primary font-weight-bold">Detail Produk</h3>
                </div>
            </div>

            <div class="content-body">
                <div class="row justify-content-center">
                    <!-- Detail Produk -->
                    <div class="col-lg-10 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <!-- Gambar Produk -->
                                    <div class="col-lg-4 col-md-6">
                                        <div class="product-img d-flex align-items-center position-relative">
                                            @if ($produk->diskon ?? false)
                                                <div class="badge badge-success round position-absolute" style="top: 10px; left: 10px;">
                                                    -{{ $produk->diskon }}%
                                                </div>
                                            @endif
                                            <img class="img-fluid mb-1" 
                                                 src="{{ $produk->gambar ? asset($produk->gambar) : asset('assets/images/default.png') }}" 
                                                 alt="Gambar Produk" 
                                                 style="max-width: 100%; height: auto; object-fit: contain;">
                                        </div>
                                    </div>

                                    <!-- Detail Produk -->
                                    <div class="col-lg-8 col-md-6">
                                        <div class="title-area clearfix">
                                            <h2 class="product-title float-left" style="font-size: 1.8rem; font-weight: bold;">
                                                {{ $produk->nama_produk ?? 'Nama Produk Tidak Tersedia' }}
                                            </h2>
                                        </div>
                                        <div class="price-reviews clearfix mb-3">
                                            <span class="price-box">
                                                <span class="price h4" style="color: #007bff;">
                                                    Rp {{ number_format($produk->harga_jual ?? 0, 0, ',', '.') }}
                                                </span>
                                                @if (!empty($produk->harga_awal) && $produk->harga_awal > $produk->harga_jual)
                                                    <span class="old-price h4" style="text-decoration: line-through; color: #888;">
                                                        Rp {{ number_format($produk->harga_awal, 0, ',', '.') }}
                                                    </span>
                                                @endif
                                            </span>
                                        </div>
                                        <div class="product-info mb-4">
                                            <p><strong>Deskripsi:</strong> {{ $produkDetail->deskripsi ?? 'Deskripsi tidak tersedia.' }}</p>
                                            <h5><strong>Spesifikasi:</strong></h5>
                                            <p>{{ $produkDetail->spesifikasi ?? 'Spesifikasi tidak tersedia.' }}</p>
                                        </div>

                                        <div class="category-info">
                                            @if (!empty($produk->kategoriUser))
                                                <p><strong>Kategori:</strong> {{ $produk->kategoriUser->nama_kategori }}</p>
                                            @else
                                                <p><strong>Kategori:</strong> Tidak tersedia</p>
                                            @endif
                                        </div>

                                        <!-- Tombol Aksi -->
                                        <div class="row">
                                            <div class="col-xl-5 col-lg-5 col-md-12">
                                                <div class="product-buttons d-flex">
                                                    <a href="#" class="btn btn-danger btn-sm mr-2">
                                                        <i class="la la-shopping-cart"></i> Tambah ke Keranjang
                                                    </a>
                                                    <a href="#" class="btn btn-info btn-sm">
                                                        <i class="la la-flash"></i> Beli Sekarang
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Detail Produk -->
                </div>
            </div>
        </div>
    </div>
@endsection
