@extends('layouts.admin.appcopy')

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title">Add New Product</h3>
                </div>
                <div class="content-header-right col-md-6 col-12 mb-2 text-right">
                    <a href="{{ route('admin.produk.index') }}" class="btn btn-secondary">
                        <i class="fa fa-arrow-left"></i> Kembali
                    </a>
                </div>
            </div>

            <div class="content-body">
                <!-- Add Product Form -->
                <div class="row">
                    <div class="col-12">
                        <div class="card shadow rounded">
                            <div class="card-header bg-primary text-white">
                                <h4 class="card-title">Add New Product</h4>
                            </div>
                            <div class="card-body">
                                @if(session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <form action="{{ route('admin.produk.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nama_produk">Nama Produk</label>
                                        <input type="text" id="nama_produk" name="nama_produk" class="form-control rounded" required placeholder="Nama Produk">
                                    </div>
                                    <div class="form-group">
                                        <label for="harga_jual">Harga Jual (Rp)</label>
                                        <input type="number" id="harga_jual" name="harga_jual" class="form-control rounded" required placeholder="Harga Jual">
                                    </div>
                                    <div class="form-group">
                                        <label for="stok">Stok</label>
                                        <input type="number" id="stok" name="stok" class="form-control rounded" required placeholder="Stok">
                                    </div>
                                    <div class="form-group">
                                        <label for="gambar">Gambar Produk</label>
                                        <input type="file" id="gambar" name="gambar" class="form-control rounded">
                                    </div>
                                    <div class="form-group text-right">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-save"></i> Simpan
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
