@extends('layouts.admin.app')

@section('content')
    <!-- Menu Sidebar -->
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="nav-item"><a href="{{ route('admin.create') }}"><i class="la la-home"></i><span class="menu-title">Dashboard</span></a></li>
                <!-- Add additional sidebar items here -->
            </ul>
        </div>
    </div>

    <!-- Main Content -->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title">Edit Admin</h3>
                </div>
            </div>
            <div class="content-body">
                <!-- Admin Form -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Edit Admin Information</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('admin.update', $owner->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" id="username" name="username" class="form-control" value="{{ $owner->username }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" id="email" name="email" class="form-control" value="{{ $owner->email }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" id="nama" name="nama" class="form-control" value="{{ $owner->nama }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" id="password" name="password" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Update Admin</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Admin Form -->
            </div>
        </div>
    </div>
@endsection
