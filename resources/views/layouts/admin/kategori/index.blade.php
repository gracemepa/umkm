@extends('layouts.admin.app')

@section('content')
    <!-- Main Content -->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title">Manage Kategori</h3>
                </div>
            </div>

            <div class="content-body">
                <!-- Add Admin Form -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Add New Kategori</h4>
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
                                        <label for="nama">Nama Kategori</label>
                                        <input type="text" id="nama_kategori" name="nama_kategori" class="form-control" required placeholder="Nama Kategori">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Add Kategori</button>
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
                                <h4 class="card-title">Kategori List</h4>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Nama Kategori</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($kategoris as $kategori)
                                            <tr>
                                                <td>{{ $kategori->nama_kategori }}</td>
                                                <td>
                                                    <a href="{{ route('admin.kategori.edit', $kategori->id_kategori) }}"class="btn btn-warning btn-sm">Edit</a>
                                                    <form action="{{ route('admin.kategori.delete', $kategori->id_kategori) }}" method="POST" style="display:inline;">
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
