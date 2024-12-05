@extends('layouts.admin.appcopy')

@section('content')
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row"></div>
      <div class="content-body">

        <!-- Statistik eCommerce -->
        <div class="row">
          <!-- Statistik Barang Masuk -->
          <div class="col-xl-3 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="info">{{ $barangMasukCount }}</h3>
                      <h6>Barang Masuk</h6>
                    </div>
                    <div>
                      <i class="icon-basket-loaded info font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Statistik Kategori -->
          <div class="col-xl-3 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="warning">{{ $kategoriCount }}</h3>
                      <h6>Kategori</h6>
                    </div>
                    <div>
                      <i class="icon-pie-chart warning font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Statistik Produk -->
          <div class="col-xl-3 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="success">{{ $produkCount }}</h3>
                      <h6>Produk</h6>
                    </div>
                    <div>
                      <i class="icon-cogs success font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!--/ Statistik eCommerce -->

        <!-- Daftar Produk Terbaru -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Produk Terbaru</h4>
              </div>
              <div class="card-body">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Produk</th>
                      <th>Harga Jual</th>
                      <th>Jumlah</th>
                      <th>Tanggal Masuk</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($recentProduk as $produk)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $produk->nama_produk }} - {{ $produk->kategori->nama_kategori ?? 'Kategori Tidak Tersedia' }}</td>
                      <td>{{ number_format($produk->harga_jual, 0, ',', '.') }}</td>
                      <td>{{ $produk->stok }}</td>
                      <td>{{ $produk->created_at->format('d M Y') }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <!-- Daftar Barang Masuk Terbaru -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Barang Masuk Terbaru</h4>
              </div>
              <div class="card-body">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Barang</th>
                      <th>Jumlah</th>
                      <th>Tanggal Masuk</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($recentBarangMasuk as $barang)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $barang->nama_barang }}</td>
                      <td>{{ $barang->total }}</td>
                      <td>{{ $barang->tgl_masuk->format('d M Y') }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <!-- Aktivitas Admin Terbaru -->
        <div class="row">
          <div class="col-xl-6 col-lg-12 col-12">
            <div class="card pull-up">
              <div class="card-header">
                <h4 class="card-title">Aktivitas Terbaru</h4>
              </div>
              <div class="card-body">
                <ul class="list-unstyled">
                  @foreach($recentActivities as $activity)
                  <li>{{ $activity->description }} - <small>{{ $activity->created_at->format('d M Y H:i') }}</small></li>
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
        </div>

            <!-- Pencarian Produk dan Barang Masuk dan Export -->
            <div class="row mb-3">
              <div class="col-md-6">
                <form action="{{ route('admin.produk.search') }}" method="GET" class="d-flex">
                  <input type="text" name="search" class="form-control" placeholder="Cari produk...">
                  <button type="submit" class="btn btn-primary ml-2">Cari</button>
                </form>
              </div>
              <div class="col-md-6 text-right">
                <div class="btn-group">
                  <a href="{{ route('admin.produk.export') }}" class="btn btn-success">
                    Export Produk ke CSV
                  </a>
                  <a href="{{ route('admin.barangmasuk.export') }}" class="btn btn-warning">
                    Export Barang Masuk ke CSV
                  </a>
                  <a href="{{ route('laporan.export.pdf') }}" class="btn btn-danger">
                    Cetak Laporan PDF
                  </a>
                </div>
              </div>
            </div>


      </div>
    </div>
  </div>
@endsection
