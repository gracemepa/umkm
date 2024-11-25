@extends('layouts.admin.appcopy')

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">Tambah Produk Detail</h3>
                </div>
                <div class="content-header-right col-md-6 col-12 mb-2 text-right">
                    <a href="{{ route('admin.produkdetail.index') }}" class="btn btn-secondary">
                        <i class="fa fa-arrow-left"></i> Kembali
                    </a>
                </div>
            </div>

            <div class="content-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card shadow rounded">
                            <div class="card-header bg-primary text-white">
                                <h4 class="card-title">Form Tambah Produk Detail</h4>
                            </div>
                            <div class="card-body">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form action="{{ route('admin.produkdetail.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="id_produk">Nama Produk</label>
                                        <select id="id_produk" name="id_produk" class="form-control rounded" required>
                                            <option value="" disabled selected>Pilih Produk</option>
                                            @foreach ($produks as $produk)
                                                <option value="{{ $produk->id_produk }}">
                                                    {{ $produk->nama_produk }} - {{ $produk->kategori->nama_kategori ?? 'Kategori Tidak Tersedia' }}
                                                </option>
                                            @endforeach
                                        </select>                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="deskripsi">Deskripsi</label>
                                        <textarea id="deskripsi" name="deskripsi" class="form-control rounded" rows="3" required placeholder="Deskripsi Produk"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="spesifikasi">Spesifikasi</label>
                                        <textarea id="spesifikasi" name="spesifikasi" class="form-control rounded" rows="3" required placeholder="Spesifikasi Produk"></textarea>
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
