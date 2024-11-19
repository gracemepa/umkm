@extends('layouts.admin.app')

@section('content')
    <!-- Main Content -->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title">Manage Product</h3>
                </div>
            </div>

            <div class="content-body">
                <!-- Add Admin Form -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
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
                                        <input type="text" id="nama_produk" name="nama_produk" class="form-control" required placeholder="Nama Produk">
                                    </div>
                                    <div class="form-group">
                                        <label for="harga_jual">Harga Jual (Rp)</label>
                                        <input type="number" id="harga_jual" name="harga_jual" class="form-control" required placeholder="Harga Jual" >
                                    </div>
                                    <div class="form-group">
                                        <label for="stok">Stok</label>
                                        <input type="number" id="stok" name="stok" class="form-control" required placeholder="Stok">
                                    </div>
                                    <div class="form-group">
                                        <label for="gambar">Gambar Produk</label>
                                        <input type="file" id="gambar" name="gambar" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Add Product</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- List Admin -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Product List</h4>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Nama Produk</th>
                                            <th>Harga Jual</th>
                                            <th>Stok</th>
                                            <th>Gambar</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($produks as $produk)
                                            <tr>
                                                <td>{{ $produk->nama_produk }}</td>
                                                <td>{{ number_format($produk->harga_jual, 0, ',', '.') }}</td>
                                                <td>{{ $produk->stok }}</td>
                                                <td>
                                                    @if ($produk->gambar)
                                                        <img src="{{ asset($produk->gambar) }}" alt="Gambar Produk" width="100">
                                                    @else
                                                        Tidak ada gambar
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('admin.produk.edit', $produk->id_produk) }}" class="btn btn-warning btn-sm">Edit</a>
                                                    <form action="{{ route('admin.produk.delete', $produk->id_produk) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
