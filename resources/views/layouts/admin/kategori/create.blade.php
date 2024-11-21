@extends('layouts.admin.appcopy')

@section('content')
    <!-- Main Content -->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title">Tambah Kategori</h3>
                </div>
                <div class="content-header-right col-md-6 col-12 mb-2 text-right">
                    <a href="{{ route('admin.kategori.index') }}" class="btn btn-secondary">
                        <i class="fa fa-arrow-left"></i> Kembali
                    </a>
                </div>
            </div>

            <div class="content-body">
                <!-- Form Tambah Kategori -->
                <div class="row">
                    <div class="col-12">
                        <div class="card shadow rounded">
                            <div class="card-header bg-primary text-white">
                                <h4 class="card-title">Form Tambah Kategori</h4>
                            </div>
                            <div class="card-body">
                                @if(session('success'))
                                   <div class="alert alert-success">
                                     {{ session('success') }}
                                   </div>
                                @endif
                                <form action="{{ route('admin.kategori.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nama_kategori">Nama Kategori</label>
                                        <input type="text" id="nama_kategori" name="nama_kategori" class="form-control rounded" required placeholder="Nama Kategori">
                                    </div>
                                    <div class="form-group text-right">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-plus"></i> Tambah Kategori
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
