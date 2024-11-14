@extends('layouts.admin.app')

@section('content')
    <!-- Main Content -->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title">Manage Admins</h3>
                </div>
            </div>

            <div class="content-body">
                <!-- Add Admin Form -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Add New Admin</h4>
                            </div>
                            <div class="card-body">
                                @if(session('success'))
                                   <div class="alert alert-success">
                                     {{ session('success') }}
                                      </div>
                                  @endif
                                <form action="{{ route('admin.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" id="username" name="username" class="form-control" required placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" id="email" name="email" class="form-control" required placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" id="nama" name="nama" class="form-control" required placeholder="Nama Lengkap">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" id="password" name="password" class="form-control" required placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Add Admin</button>
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
                                <h4 class="card-title">Admin List</h4>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Nama</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($owners as $owner)
                                            <tr>
                                                <td>{{ $owner->username }}</td>
                                                <td>{{ $owner->email }}</td>
                                                <td>{{ $owner->nama }}</td>
                                                <td>
                                                    <a href="{{ route('admin.edit', $owner->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                                    <form action="{{ route('admin.delete', $owner->id) }}" method="POST" style="display:inline;">
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
