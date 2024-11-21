@extends('layouts.user.app')

@section('content')
<main>
    <!-- Menu Sidebar -->
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="nav-item">
                    <a href="index.html"><i class="la la-home"></i><span class="menu-title" data-i18n="">eCommerce Dashboard</span></a>
                </li>
                <li class="navigation-header">
                    <span data-i18n="nav.category.ecommerce">Ecommerce</span>
                    <i class="undefined ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="Ecommerce"></i>
                </li>
                <li class="active">
                    <a href="ecommerce-product-shop.html"><i class="la la-th-large"></i><span class="menu-title" data-i18n="">Shop</span></a>
                </li>
                <li class="nav-item">
                    <a href="ecommerce-product-detail.html"><i class="la la-list"></i><span class="menu-title" data-i18n="">Product Detail</span></a>
                </li>
                <li class="nav-item">
                    <a href="ecommerce-shopping-cart.html"><i class="la la-shopping-cart"></i><span class="menu-title" data-i18n="">Shopping Cart</span></a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Main Content -->
    <div class="content-wrapper">
        @yield('main-content') <!-- Yielding dynamic content here -->
    </div>
    
    <!-- Sidebar -->
    <div class="sidebar-detached sidebar-left">
        <div class="sidebar">
            <div class="sidebar-content d-none d-lg-block sidebar-shop">
                <div class="card">
                    <div class="card-body">
                        <div class="search">
                            <input id="basic-search" type="text" placeholder="Search here..." class="basic-search">
                            <i class="ficon ft-search"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
