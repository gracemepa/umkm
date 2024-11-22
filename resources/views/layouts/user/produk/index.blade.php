@extends('layouts.user.appcopy')

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-4">
                    <h3 class="content-header-title text-primary font-weight-bold" style="font-size: 2rem;">Daftar Produk</h3>
                    <p class="lead">Temukan berbagai produk menarik untuk Anda</p>
                </div>
            </div>

            <div class="content-body">
                <div class="row">
                    <!-- Sidebar Kategori -->
                    <div class="col-lg-3 col-md-4 mb-4">
                        <div class="sidebar">
                            <div class="card">
                                <div class="card-body">
                                    <div class="categories-list">
                                        <div class="category-title pb-1">
                                            <h4 class="card-title mb-0 text-primary">Categories</h4>
                                            <hr>
                                        </div>
                                        <div class="product-cat" id="categories">
                                            <ul class="treeview">
                                                @forelse($kategoris as $kategori)
                                                    <li><span>{{ $kategori->nama_kategori }}</span></li>
                                                @empty
                                                    <li><span>Tidak ada kategori</span></li>
                                                @endforelse
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Akhir Sidebar -->

<!-- Konten Utama Produk -->
<div class="col-lg-9 col-md-8">
    <div class="row match-height">
        @forelse ($produks as $produk)
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                <div class="card pull-up">
                    <div class="card-content">
                        <div class="card-body">
                            <!-- Menampilkan gambar produk -->
                            <div class="product-img d-flex align-items-center">
                                <img class="img-fluid mb-1" 
                                    src="{{ $produk->gambar ? asset($produk->gambar) : asset('assets/images/default.png') }}" 
                                    alt="Gambar Produk" 
                                    style="width: 100%; height: 100%; object-fit: contain;">
                            </div>
                            <!-- Menampilkan nama produk -->
                            <h4 class="product-title">{{ $produk->nama_produk }}</h4>
                            <div class="price-reviews">
                                <span class="price-box">
                                    <span class="price" style="color: #007bff;">Rp {{ number_format($produk->harga_jual, 0, ',', '.') }}</span>
                                </span>
                            </div>
                            <p>Stok: {{ $produk->stok }}</p>
                                                <!-- Aksi Produk -->
                                                <div class="product-action d-flex justify-content-around mt-3">
                                                    <a href="#like" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ft-heart"></i></a><span class="separator">|</span>
                                                    <a href="{{ route('user.produk.detail', $produk->id_produk) }}" data-toggle="tooltip" data-placement="top" title="Details"><i class="ft-eye"></i></a><span class="separator">|</span>
                                                    <a href="#compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="ft-sliders"></i></a><span class="separator">|</span>
                                                    <a href="#cart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ft-shopping-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="col-12">
                                    <p class="text-center">Tidak ada data produk.</p>
                                </div>
                            @endforelse
                        </div>
                    </div>
                    <!-- Akhir Konten Utama -->
                </div>
            </div>
        </div>
    </div>
@endsection
