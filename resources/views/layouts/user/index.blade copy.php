@extends('layouts.user.appcopy')

@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-12 col-12 mb-4">
                <!-- Carousel Gambar -->
                <div id="carouselExampleAutoplaying" class="carousel slide" data-ride="carousel" data-interval="3000">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('assets/images/1.jpg') }}" class="d-block w-100" alt="Image 1" style="height: 350px; object-fit: cover;">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/images/4.jpg') }}" class="d-block w-100" alt="Image 2" style="height: 350px; object-fit: cover;">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/images/3.jpg') }}" class="d-block w-100" alt="Image 3" style="height: 350px; object-fit: cover;">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleAutoplaying" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleAutoplaying" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
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
                                    <div class="category-title pb-3">
                                        <h4 class="card-title mb-0 text-primary">Kategori Produk</h4>
                                        <hr>
                                    </div>
                                    <div class="product-cat" id="categories">
                                        <ul class="treeview">
                                            @foreach($kategoris as $kategori)
                                            <li>
                                                <a href="{{ route('user.filter', $kategori->id_kategori) }}" class="text-dark" style="font-size: 1.1rem; padding: 5px 0; display: block;">
                                                    <!-- Menampilkan gambar kategori berbentuk bulat -->
                                                    <img src="{{ $kategori->gambar ? asset($kategori->gambar) : asset('assets/images/default.png') }}" 
                                                         alt="{{ $kategori->nama_kategori }}" 
                                                         style="width: 40px; height: 40px; object-fit: cover; border-radius: 50%; margin-right: 10px;">
                                                    {{ $kategori->nama_kategori }}
                                                </a>
                                            </li>
                                        @endforeach
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
                    <div class="row">
                        @forelse ($produks as $produk)
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-4">
                                <div class="card pull-up shadow-sm" style="border-radius: 10px; transition: transform 0.3s;">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <!-- Menampilkan gambar produk -->
                                            <div class="product-img d-flex align-items-center justify-content-center">
                                                <img class="img-fluid mb-3" 
                                                    src="{{ $produk->gambar ? asset($produk->gambar) : asset('assets/images/default.png') }}" 
                                                    alt="Gambar Produk" 
                                                    style="width: 100%; height: 200px; object-fit: contain; border-radius: 8px;">
                                            </div>
                                             <!-- Menampilkan nama produk -->
                                            <h4 class="product-title text-dark font-weight-bold mb-2">{{ $produk->nama_produk }}</h4>
                                            

                                            <div class="price-reviews mb-3">
                                                <span class="price-box">
                                                    <span class="price text-primary" style="font-size: 1.2rem;">
                                                        Rp {{ number_format($produk->harga_jual, 0, ',', '.') }}
                                                    </span>
                                                </span>
                                            </div>
                                            

                                            <p class="text-muted">Stok: {{ $produk->stok }}</p>

                                            <!-- Aksi Produk -->
                                            <div class="mt-auto">
                                                <!-- Tombol Lihat Detail -->
                                                <a href="{{ route('user.detail', $produk->id_produk) }} "
                                                    class="btn btn-outline-primary btn-block mb-3" style="font-size: 1rem;">
                                                    <i class="ft-eye"></i> Lihat Detail
                                                </a>

                                                <!-- Tombol Tambah ke Keranjang -->
                                                <a href="{{ route('cart.add', $produk->id_produk) }} "
                                                    class="btn btn-success btn-block" 
                                                    onclick="event.preventDefault(); document.getElementById('add-to-cart-{{ $produk->id_produk }}').submit();" style="font-size: 1rem;">
                                                    <i class="la la-shopping-cart"></i> Tambah ke Keranjang
                                                </a>

                                                <!-- Form Tambah ke Keranjang (tersembunyi) -->
                                                <form id="add-to-cart-{{ $produk->id_produk }}" 
                                                    action="{{ route('cart.add', $produk->id_produk) }} "
                                                    method="POST" 
                                                    style="display: none;">
                                                    @csrf
                                                    <input type="hidden" name="produk_id" value="{{ $produk->id_produk }}">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-12">
                                <p class="text-center text-muted">Tidak ada produk tersedia.</p>
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
