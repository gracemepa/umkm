@extends('layouts.admin.appcopy')

@section('content')
    <!-- Menu Sidebar -->
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="nav-item">
                    <a href="{{ route('admin.barangmasuk.index') }}"><i class="la la-home"></i><span class="menu-title">Dashboard</span></a>
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
                    <h3 class="content-header-title">Edit Barang Masuk</h3>
                </div>
            </div>

            <div class="content-body">
                <!-- Barang Masuk Form -->
                <div class="row">
                    <div class="col-12">
                        <div class="card shadow rounded">
                            <div class="card-header bg-primary text-white">
                                <h4 class="card-title">Edit Informasi Barang Masuk</h4>
                            </div>
                            <div class="card-body">
                                <!-- Form untuk mengupdate barang masuk -->
                                <form action="{{ route('admin.barangmasuk.update', $barangmasuk->id_barangmasuk) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT') <!-- Gunakan PUT karena kita melakukan update -->
                                    
                                    <div class="form-group">
                                        <label for="nama_barang">Nama Barang</label>
                                        <input type="text" id="nama_barang" name="nama_barang" class="form-control" value="{{ $barangmasuk->nama_barang }}" required placeholder="Nama Barang">
                                    </div>

                                    <div class="form-group">
                                        <label for="tgl_masuk">Tanggal Masuk</label>
                                        <input type="date" id="tgl_masuk" name="tgl_masuk" class="form-control" value="{{ $barangmasuk->tgl_masuk->format('Y-m-d') }}" required placeholder="Tanggal Masuk">
                                    </div>

                                    <div class="form-group">
                                        <label for="total">Total</label>
                                        <input type="number" id="total" name="total" class="form-control" value="{{ $barangmasuk->total }}" required placeholder="Total Barang Masuk">
                                    </div>

                                    <div class="form-group">
                                        <label for="harga_beli">Harga Beli</label>
                                        <input type="number" id="harga_beli" name="harga_beli" class="form-control" value="{{ $barangmasuk->harga_beli }}" required placeholder="Harga Beli Barang">
                                    </div>

                                    <div class="form-group">
                                        <label for="gambar">Gambar Barang Masuk</label>
                                        <input type="file" id="gambar" name="gambar" class="form-control">
                                        
                                        @if ($barangmasuk->gambar)
                                            <div class="mt-2">
                                                <label>Gambar saat ini:</label>
                                                <img src="{{ asset($barangmasuk->gambar) }}" alt="Gambar Barang Masuk" style="width: 100px; height: 100px; object-fit: cover;">
                                            </div>
                                        @else
                                            <p>Tidak ada gambar saat ini.</p>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="subtotal">Subtotal</label>
                                        <input type="number" id="subtotal" name="subtotal" class="form-control" value="{{ $barangmasuk->subtotal }}" readonly>
                                    </div>

                                    <div class="form-group text-right">
                                        <button type="submit" class="btn btn-success btn-primary">
                                            <i class="fa fa-save"></i> Update Barang Masuk
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Barang Masuk Form -->
            </div>
        </div>
    </div>
@endsection
