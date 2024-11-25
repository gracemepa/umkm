@extends('layouts.admin.appcopy')

@section('content')
    <!-- Menu Sidebar -->
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="nav-item">
                    <a href="{{ route('admin.produk.index') }}"><i class="la la-home"></i><span class="menu-title">Dashboard</span></a>
                </li>
                <!-- Add additional sidebar items here -->
            </ul>
        </div>
    </div>

    <!-- Main Content -->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title">Edit Produk</h3>
                </div>
            </div>

            <div class="content-body">
                <!-- Produk Form -->
                <div class="row">
                    <div class="col-12">
                        <div class="card shadow rounded">
                            <div class="card-header bg-primary text-white">
                                <h4 class="card-title">Edit Informasi Produk</h4>
                            </div>
                            <div class="card-body">
                                <!-- Form untuk mengupdate produk -->
                                <form action="{{ route('admin.produk.update', $produk->id_produk) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT') <!-- Gunakan PUT karena kita melakukan update -->
                                    <div class="form-group">
                                        <label for="nama_produk">Nama Produk</label>
                                        <input type="text" id="nama_produk" name="nama_produk" class="form-control" value="{{ $produk->nama_produk }}" required placeholder="Nama Produk">
                                    </div>
                                    <div class="form-group">
                                        <label for="id_kategori">Kategori</label>
                                        <select name="id_kategori" id="id_kategori" class="form-control" required>
                                            @foreach ($kategoris as $kategori)
                                                <option value="{{ $kategori->id_kategori }}" {{ $kategori->id_kategori == $produk->id_kategori ? 'selected' : '' }}>
                                                    {{ $kategori->nama_kategori }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="harga_jual">Harga Jual (Rp)</label>
                                        <input type="number" id="harga_jual" name="harga_jual" class="form-control" value="{{ $produk->harga_jual }}" required placeholder="Harga Jual">
                                    </div>
                                    <div class="form-group">
                                        <label for="stok">Stok</label>
                                        <input type="number" id="stok" name="stok" class="form-control" value="{{ $produk->stok }}" required placeholder="Stok">
                                    </div>
                                    <div class="form-group">
                                        <label for="gambar">Gambar Produk</label>
                                        <input type="file" id="gambar" name="gambar" class="form-control">
                                        @if ($produk->gambar)
                                            <div class="mt-2">
                                                <label>Gambar saat ini:</label>
                                                <img src="{{ asset($produk->gambar) }}" alt="Gambar Produk" style="width: 100px; height: 100px; object-fit: cover;">
                                            </div>
                                        @else
                                            <p>Tidak ada gambar saat ini.</p>
                                        @endif
                                    </div>
                                    <div class="form-group text-right">
                                        <button type="submit" class="btn btn-success btn-primary">
                                            <i class="fa fa-save"></i> Update Kategori
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Produk Form -->
            </div>
        </div>
    </div>
@endsection
