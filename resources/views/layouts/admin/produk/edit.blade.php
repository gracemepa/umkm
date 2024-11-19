@extends('layouts.admin.app')

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
                    <h3 class="content-header-title">Edit produk</h3>
                </div>
            </div>
            <div class="content-body">
                <!-- produk Form -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Edit Informasi produk</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('admin.produk.update', $produk->id_produk) }}" method="POST">
                                    @csrf
                                    @method('POST')
                                    <div class="form-group">
                                        <label for="nama_produk">Nama produk</label>
                                        <input type="text" id="nama_produk" name="nama_produk" class="form-control" value="{{ $produk->nama_produk }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="harga_jual">Harga Jual</label>
                                        <input type="number" id="harga_jual" name="harga_jual" class="form-control" value="{{ $produk->harga_jual }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_produk">Stok</label>
                                        <input type="number" id="stok" name="stok" class="form-control" value="{{ $produk->stok }}" required>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Update produk</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End produk Form -->
            </div>
        </div>
    </div>
@endsection
