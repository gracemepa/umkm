@extends('layouts.admin.appcopy')

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">Daftar Produk</h3>
                </div>
                <div class="content-header-right col-md-6 col-12 mb-2 text-right">
                    <a href="{{ route('admin.produk.create') }}" class="btn btn-primary">
                        <i class="fa fa-plus"></i> Tambah Produk
                    </a>
                </div>
            </div>

            <div class="content-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card shadow rounded">
                            <div class="card-header bg-primary text-white">
                                <h4 class="card-title">Tabel Produk</h4>
                            </div>
                            <div class="card-body">
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif

                                <table class="table table-bordered table-striped table-hover">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th style="width: 5%;">No</th>
                                            <th style="width: 25%;">Nama Produk</th>
                                            <th style="width: 20%;">Harga Jual</th>
                                            <th style="width: 10%;">Stok</th>
                                            <th style="width: 20%;">Gambar</th>
                                            <th style="width: 15%;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($produks as $index => $produk)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $produk->nama_produk }}</td>
                                                <td>{{ number_format($produk->harga_jual, 0, ',', '.') }}</td>
                                                <td>{{ $produk->stok }}</td>
                                                <td>
                                                    @if ($produk->gambar)
                                                    <img src="{{ asset($produk->gambar) }}" alt="Gambar Produk" style="max-width: 100px; max-height: 100px; width: auto; height: auto;">
                                                    @else
                                                        Tidak ada gambar
                                                    @endif
                                                </td>
                                                <td>
                                                    <!-- Tombol Edit -->
                                                    <a href="{{ route('admin.produk.edit', $produk->id_produk) }}" class="btn btn-warning btn-sm">
                                                        <i class="fa fa-pencil-alt"></i> Edit
                                                    </a>
                                                    <!-- Tombol Delete -->
                                                    <form action="{{ route('admin.produk.delete', $produk->id_produk) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                            <i class="fa fa-trash-alt"></i> Delete
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6" class="text-center">Tidak ada data produk.</td>
                                            </tr>
                                        @endforelse
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
