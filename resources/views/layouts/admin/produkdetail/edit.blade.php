@extends('layouts.admin.appcopy')

@section('content')
    <!-- Menu Sidebar -->
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="nav-item">
                    <a href="{{ route('admin.produk.index') }}"><i class="la la-home"></i><span class="menu-title">Dashboard</span></a>
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
                    <h3 class="content-header-title">Edit Product Detail</h3>
                </div>
            </div>

            <div class="content-body">
                <!-- Product Detail Form -->
                <div class="row">
                    <div class="col-12">
                        <div class="card shadow rounded">
                            <div class="card-header bg-primary text-white">
                                <h4 class="card-title">Edit Product Detail Information</h4>
                            </div>
                            <div class="card-body">
                                <!-- Form for updating product detail -->
                                <form action="{{ route('admin.produkdetail.update', $produkdetail->id_produkdetail) }}" method="POST">
                                    @csrf
                                    @method('PUT') <!-- Use PUT because we are updating -->

                                    <div class="form-group">
                                        <label for="id_produk">Product Name</label>
                                        <select id="id_produk" name="id_produk" class="form-control rounded" required>
                                            @foreach ($produks as $produk)
                                                <option value="{{ $produk->id_produk }}" {{ $produk->id_produk == $produkdetail->id_produk ? 'selected' : '' }}>
                                                    {{ $produk->nama_produk }} - {{ $produk->kategori->nama_kategori ?? 'Kategori Tidak Tersedia' }}
                                                </option>
                                            @endforeach
                                        </select>                                        
                                    </div>

                                    <div class="form-group">
                                        <label for="deskripsi">Description</label>
                                        <textarea name="deskripsi" id="deskripsi" class="form-control rounded" required>{{ $produkdetail->deskripsi }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="spesifikasi">Specifications</label>
                                        <textarea name="spesifikasi" id="spesifikasi" class="form-control rounded" required>{{ $produkdetail->spesifikasi }}</textarea>
                                    </div>

                                    <div class="form-group text-right">
                                        <button type="submit" class="btn btn-success">
                                            <i class="fa fa-save"></i> Update Product Detail
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Product Detail Form -->
            </div>
        </div>
    </div>
@endsection
