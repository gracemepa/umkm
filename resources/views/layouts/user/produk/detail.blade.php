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
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <div class="card shadow-sm" style="max-width: 400px; margin: 0 auto;">
                            <div class="card-body">
                                <!-- Gambar Produk -->
                                <div class="product-img d-flex justify-content-center mb-3">
                                    <img class="img-fluid" 
                                         src="{{ $produk->gambar ? asset($produk->gambar) : asset('assets/images/default.png') }}" 
                                         alt="Gambar Produk" 
                                         style="max-width: 100%; height: auto; object-fit: contain;">
                                </div>
                                <!-- Nama dan Harga Produk -->
                                <h4 class="product-title text-center" style="font-size: 1.5rem; font-weight: bold;">{{ $produk->nama_produk }}</h4>
                                <div class="price-reviews text-center mb-3">
                                    <span class="price-box">
                                        <span class="price" style="font-size: 1.2rem; color: #007bff;">Rp {{ number_format($produk->harga_jual, 0, ',', '.') }}</span>
                                    </span>
                                </div>
                                <!-- Deskripsi dan Spesifikasi Produk -->
                                <div class="product-details mb-4">
                                    <p><strong>Deskripsi:</strong> {{ $produkDetail->deskripsi }}</p>
                                    <h5> <strong>Spesifikasi:</strong></h5>
                                    <p>{{ $produkDetail->spesifikasi }}</p>
                                </div>

                                <!-- Aksi Produk -->

                                <div class="product-action d-flex justify-content-center mt-4">
                                    <div class="product-buttons d-flex justify-content-center">
                                        <!-- Add to Cart Button -->
                                        <a href="ecommerce-shopping-cart.html" class="btn btn-danger btn-sm mr-2">
                                            <i class="la la-shopping-cart"></i> Add to Cart
                                        </a>
                                        <!-- Buy Now Button -->
                                        <a href="ecommerce-checkout.html" class="btn btn-info btn-sm">
                                            <i class="la la-flash"></i> Buy Now
                                        </a>
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
