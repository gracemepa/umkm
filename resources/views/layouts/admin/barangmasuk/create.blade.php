@extends('layouts.admin.appcopy')

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">Tambah Barang Masuk</h3>
                </div>
                <div class="content-header-right col-md-6 col-12 mb-2 text-right">
                    <a href="{{ route('admin.barangmasuk.index') }}" class="btn btn-secondary">
                        <i class="fa fa-arrow-left"></i> Kembali
                    </a>
                </div>
            </div>

            <div class="content-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card shadow rounded">
                            <div class="card-header bg-primary text-white">
                                <h4 class="card-title">Form Barang Masuk</h4>
                            </div>
                            <div class="card-body">
                                @if(session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <form action="{{ route('admin.barangmasuk.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nama_barang">Nama Barang</label>
                                        <input type="text" id="nama_barang" name="nama_barang" class="form-control rounded" required placeholder="Nama Barang">
                                    </div>
                                    <div class="form-group">
                                        <label for="tgl_masuk">Tanggal Masuk</label>
                                        <input type="date" id="tgl_masuk" name="tgl_masuk" class="form-control rounded" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="total">Total Barang</label>
                                        <input type="number" id="total" name="total" class="form-control rounded" required placeholder="Total Barang">
                                    </div>
                                    <div class="form-group">
                                        <label for="harga_beli">Harga Beli</label>
                                        <input type="number" id="harga_beli" name="harga_beli" class="form-control rounded" required placeholder="Harga Beli">
                                    </div>
                                    <div class="form-group">
                                        <label for="subtotal">Subtotal</label>
                                        <input type="number" id="subtotal" name="subtotal" class="form-control rounded" required placeholder="Subtotal" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="gambar">Gambar Barang</label>
                                        <input type="file" id="gambar" name="gambar" class="form-control rounded">
                                    </div>
                                    <div class="form-group text-right">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-plus"></i> Tambah Barang Masuk
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
