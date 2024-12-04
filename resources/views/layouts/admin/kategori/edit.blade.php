@extends('layouts.admin.appcopy')

@section('content')
    <!-- Menu Sidebar -->
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="nav-item">
                    <a href="{{ route('admin.kategori.index') }}"><i class="la la-home"></i><span class="menu-title">Dashboard</span></a>
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
                    <h3 class="content-header-title">Edit Kategori</h3>
                </div>
            </div>

            <div class="content-body">
                <!-- Kategori Form -->
                <div class="row">
                    <div class="col-12">
                        <div class="card shadow rounded">
                            <div class="card-header bg-primary text-white">
                                <h4 class="card-title">Edit Informasi Kategori</h4>
                            </div>
                            <div class="card-body">
                                <!-- Form untuk mengupdate kategori -->
                                <form action="{{ route('admin.kategori.update', $kategori->id_kategori) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT') <!-- Gunakan PUT karena kita melakukan update -->
                                    
                                    <div class="form-group">
                                        <label for="nama_kategori">Nama Kategori</label>
                                        <input type="text" id="nama_kategori" name="nama_kategori" class="form-control" value="{{ $kategori->nama_kategori }}" required placeholder="Nama Kategori">
                                    </div>

                                    <div class="form-group">
                                        <label for="gambar">Gambar Kategori</label>
                                        <input type="file" id="gambar" name="gambar" class="form-control">
                                        
                                        @if ($kategori->gambar)
                                            <div class="mt-2">
                                                <label>Gambar saat ini:</label>
                                                <img src="{{ asset($kategori->gambar) }}" alt="Gambar Kategori" style="width: 100px; height: 100px; object-fit: cover;">
                                            </div>
                                        @else
                                            <p>Tidak ada gambar saat ini.</p>
                                        @endif
                                    </div>

                                    <div class="form-group text-right">
                                        <button type="submit" class="btn btn-success btn-primary">
                                            <i class="fa fa-save"></i> Update Kategori
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Kategori Form -->
            </div>
        </div>
    </div>
@endsection
