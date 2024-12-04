@extends('layouts.admin.appcopy')

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title">Daftar Kategori</h3>
                </div>
                <div class="content-header-right col-md-6 col-12 mb-2 text-right">
                    <a href="{{ route('admin.kategori.create') }}" class="btn btn-primary">
                        <i class="fa fa-plus"></i> Tambah Kategori
                    </a>
                </div>
            </div>

            <div class="content-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card shadow rounded">
                            <div class="card-header bg-primary text-white">
                                <h4 class="card-title">Daftar Kategori</h4>
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
                                            <th style="width: 25%;">Nama Kategori</th>
                                            <th style="width: 25%;">Gambar</th>
                                            <th style="width: 15%;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($kategoris as $index => $kategori)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $kategori->nama_kategori }}</td>
                                                <td>
                                                    @if ($kategori->gambar)
                                                        <img src="{{ asset($kategori->gambar) }}" alt="Gambar Kategori" class="img-fluid" style="max-width: 100px; max-height: 100px; object-fit: contain;">
                                                    @else
                                                        Tidak ada gambar
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('admin.kategori.edit', $kategori->id_kategori) }}" class="btn btn-warning btn-sm">
                                                        <i class="fa fa-pencil-alt"></i> Edit
                                                    </a>
                                                    <form action="{{ route('admin.kategori.delete', $kategori->id_kategori) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus kategori ini?')">
                                                            <i class="fa fa-trash-alt"></i> Delete
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="4" class="text-center">Tidak ada data kategori.</td>
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
