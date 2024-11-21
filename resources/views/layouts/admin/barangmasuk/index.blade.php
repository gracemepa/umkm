@extends('layouts.admin.appcopy')

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title">Daftar Barang Masuk</h3>
                </div>
                <div class="content-header-right col-md-6 col-12 mb-2 text-right">
                    <a href="{{ route('admin.barangmasuk.create') }}" class="btn btn-primary">
                        <i class="fa fa-plus"></i> Tambah Barang Masuk
                    </a>
                </div>
            </div>

            <div class="content-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card shadow rounded">
                            <div class="card-header bg-primary text-white">
                                <h4 class="card-title">Daftar Barang Masuk</h4>
                            </div>
                            <div class="card-body">
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                
                                <table class="table table-striped table-bordered table-hover">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th style="width: 5%;">No</th>
                                            <th style="width: 20%;">Nama Barang</th>
                                            <th style="width: 10%;">Tanggal Masuk</th>
                                            <th style="width: 10%;">Total Barang</th>
                                            <th style="width: 10%;">Harga Beli</th>
                                            <th style="width: 10%;">Subtotal</th>
                                            <th style="width: 15%;">Gambar</th>
                                            <th style="width: 20%;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($barangmasuks as $index => $barangmasuk)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $barangmasuk->nama_barang }}</td>
                                                <td>{{ $barangmasuk->tgl_masuk->format('d-m-Y') }}</td>
                                                <td>{{ $barangmasuk->total }}</td>
                                                <td>{{ number_format($barangmasuk->harga_beli, 0, ',', '.') }}</td>
                                                <td>{{ number_format($barangmasuk->subtotal, 0, ',', '.') }}</td>
                                                <td>
                                                    @if ($barangmasuk->gambar)
                                                        <img src="{{ asset($barangmasuk->gambar) }}" alt="Gambar Barang" style="width: 100px; height: 100px; object-fit: cover;">
                                                    @else
                                                        Tidak ada gambar
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('admin.barangmasuk.edit', $barangmasuk->id_barangmasuk) }}" class="btn btn-warning btn-sm">
                                                        <i class="fa fa-pencil-alt"></i> Edit
                                                    </a>
                                                    <form action="{{ route('admin.barangmasuk.delete', $barangmasuk->id_barangmasuk) }}" method="POST" style="display:inline;">
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
                                                <td colspan="8" class="text-center">Tidak ada data barang masuk.</td>
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
