@extends('layouts.admin.appcopy')

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">Daftar Produk Detail</h3>
                </div>
                <div class="content-header-right col-md-6 col-12 mb-2 text-right">
                    <a href="{{ route('admin.produkdetail.create') }}" class="btn btn-primary">
                        <i class="fa fa-plus"></i> Tambah Produk Detail
                    </a>
                </div>
            </div>

            <div class="content-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card shadow rounded">
                            <div class="card-header bg-primary text-white">
                                <h4 class="card-title">Tabel Produk Detail</h4>
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
                                            <th style="width: 30%;">Deskripsi</th>
                                            <th style="width: 25%;">Spesifikasi</th>
                                            <th style="width: 15%;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($produkdetails as $index => $produkdetail)
                                            <tr>
                                                <td>{{ $index + 1 }}</td> <!-- Nomor urut -->
                                                <td>{{ $produkdetail->produk->nama_produk }}</td> <!-- Nama produk -->
                                                <td>{{ $produkdetail->deskripsi }}</td> <!-- Deskripsi -->
                                                <td>{{ $produkdetail->spesifikasi }}</td> <!-- Spesifikasi -->
                                                <td>
                                                    <!-- Tombol Edit -->
                                                    <a href="{{ route('admin.produkdetail.edit', $produkdetail->id_produkdetail) }}" class="btn btn-warning btn-sm">
                                                        <i class="fa fa-pencil-alt"></i> Edit
                                                    </a>

                                                    <!-- Tombol Delete -->
                                                    <form action="{{ route('admin.produkdetail.delete', $produkdetail->id_produkdetail) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm">
                                                            <i class="fa fa-trash-alt"></i> Delete
                                                        </button>
                                                    </form>
                                                    
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5" class="text-center">Tidak ada data detail produk.</td>
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
