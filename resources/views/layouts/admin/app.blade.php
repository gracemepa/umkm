<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>{{ $title ?? '' }}</title>
    <link rel="apple-touch-icon" href="{{ asset('assets/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/ico/favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/extensions/nouislider.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/ui/prism.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/forms/icheck/icheck.css') }}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/app.css') }}">
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/core/menu/menu-types/vertical-menu-modern.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/plugins/extensions/noui-slider.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/core/colors/palette-noui.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pages/ecommerce-shop.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/plugins/forms/checkboxes-radios.css') }}">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css') }}">
    <!-- END Custom CSS-->
  </head>
  <body class="vertical-layout vertical-menu-modern content-detached-left-sidebar   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="content-detached-left-sidebar">
    
    <!-- fixed-top-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark navbar-shadow">
      <div class="navbar-wrapper">
        <div class="navbar-header">
          <ul class="nav navbar-nav flex-row position-relative">
            <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
            <li class="nav-item mr-auto"><a class="navbar-brand" href="index.html"><img class="brand-logo" alt="modern admin logo" src="{{ asset('assets/images/logo/logo.png') }}">
                <h3 class="brand-text">Modern Admin</h3></a></li>
            <li class="nav-item d-none d-md-block nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="toggle-icon ft-toggle-right font-medium-3 white" data-ticon="ft-toggle-right"></i></a></li>
            <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a></li>
          </ul>
        </div>
        <div class="navbar-container content">
          <div class="collapse navbar-collapse" id="navbar-mobile">
            <ul class="nav navbar-nav mr-auto float-left">         
              <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
              <li class="dropdown nav-item mega-dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Mega</a>
                <ul class="mega-dropdown-menu dropdown-menu row">
                  <li class="col-md-2">
                    <h6 class="dropdown-menu-header text-uppercase mb-1"><i class="la la-newspaper-o"></i> News</h6>
                    <div id="mega-menu-carousel-example">
                      <div><img class="rounded img-fluid mb-1" src="{{ asset('assets/images/slider/slider-2.png') }}"> alt="First slide"><a class="news-title mb-0" href="#">Poster Frame PSD</a>
                        <p class="news-content"><span class="font-small-2">January 26, 2018</span></p>
                      </div>
                    </div>
                  </li>
                  <li class="col-md-3">
                    <h6 class="dropdown-menu-header text-uppercase"><i class="la la-random"></i> Drill down menu</h6>
                    <ul class="drilldown-menu">
                      <li class="menu-list">
                        <ul>
                          <li><a class="dropdown-item" href="layout-2-columns.html"><i class="ft-file"></i> Page layouts & Templates</a></li>
                          <li><a href="#"><i class="ft-align-left"></i> Multi level menu</a>
                            <ul>
                              <li><a class="dropdown-item" href="#"><i class="la la-bookmark-o"></i>  Second level</a></li>
                              <li><a href="#"><i class="la la-lemon-o"></i> Second level menu</a>
                                <ul>
                                  <li><a class="dropdown-item" href="#"><i class="la la-heart-o"></i>  Third level</a></li>
                                  <li><a class="dropdown-item" href="#"><i class="la la-file-o"></i> Third level</a></li>
                                  <li><a class="dropdown-item" href="#"><i class="la la-trash-o"></i> Third level</a></li>
                                  <li><a class="dropdown-item" href="#"><i class="la la-clock-o"></i> Third level</a></li>
                                </ul>
                              </li>
                              <li><a class="dropdown-item" href="#"><i class="la la-hdd-o"></i> Second level, third link</a></li>
                              <li><a class="dropdown-item" href="#"><i class="la la-floppy-o"></i> Second level, fourth link</a></li>
                            </ul>
                          </li>
                          <li><a class="dropdown-item" href="color-palette-primary.html"><i class="ft-camera"></i> Color palette system</a></li>
                          <li><a class="dropdown-item" href="sk-2-columns.html"><i class="ft-edit"></i> Page starter kit</a></li>
                          <li><a class="dropdown-item" href="changelog.html"><i class="ft-minimize-2"></i> Change log</a></li>
                          <li><a class="dropdown-item" href="https://pixinvent.ticksy.com/"><i class="la la-life-ring"></i> Customer support center</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="col-md-3">
                    <h6 class="dropdown-menu-header text-uppercase"><i class="la la-list-ul"></i> Accordion</h6>
                    <div id="accordionWrap" role="tablist" aria-multiselectable="true">
                      <div class="card border-0 box-shadow-0 collapse-icon accordion-icon-rotate">
                        <div class="card-header p-0 pb-2 border-0" id="headingOne" role="tab"><a data-toggle="collapse" data-parent="#accordionWrap" href="#accordionOne" aria-expanded="true" aria-controls="accordionOne">Accordion Item #1</a></div>
                        <div class="card-collapse collapse show" id="accordionOne" role="tabpanel" aria-labelledby="headingOne" aria-expanded="true">
                          <div class="card-content">
                            <p class="accordion-text text-small-3">Caramels dessert chocolate cake pastry jujubes bonbon. Jelly wafer jelly beans. Caramels chocolate cake liquorice cake wafer jelly beans croissant apple pie.</p>
                          </div>
                        </div>
                        <div class="card-header p-0 pb-2 border-0" id="headingTwo" role="tab"><a class="collapsed" data-toggle="collapse" data-parent="#accordionWrap" href="#accordionTwo" aria-expanded="false" aria-controls="accordionTwo">Accordion Item #2</a></div>
                        <div class="card-collapse collapse" id="accordionTwo" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false">
                          <div class="card-content">
                            <p class="accordion-text">Sugar plum bear claw oat cake chocolate jelly tiramisu dessert pie. Tiramisu macaroon muffin jelly marshmallow cake. Pastry oat cake chupa chups.</p>
                          </div>
                        </div>
                        <div class="card-header p-0 pb-2 border-0" id="headingThree" role="tab"><a class="collapsed" data-toggle="collapse" data-parent="#accordionWrap" href="#accordionThree" aria-expanded="false" aria-controls="accordionThree">Accordion Item #3</a></div>
                        <div class="card-collapse collapse" id="accordionThree" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false">
                          <div class="card-content">
                            <p class="accordion-text">Candy cupcake sugar plum oat cake wafer marzipan jujubes lollipop macaroon. Cake dragée jujubes donut chocolate bar chocolate cake cupcake chocolate topping.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="col-md-4">
                    <h6 class="dropdown-menu-header text-uppercase mb-1"><i class="la la-envelope-o"></i> Contact Us</h6>
                    <form class="form form-horizontal">
                      <div class="form-body">
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label" for="inputName1">Name</label>
                          <div class="col-sm-9">
                            <div class="position-relative has-icon-left">
                              <input class="form-control" type="text" id="inputName1" placeholder="John Doe">
                              <div class="form-control-position pl-1"><i class="la la-user"></i></div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label" for="inputEmail1">Email</label>
                          <div class="col-sm-9">
                            <div class="position-relative has-icon-left">
                              <input class="form-control" type="email" id="inputEmail1" placeholder="john@example.com">
                              <div class="form-control-position pl-1"><i class="la la-envelope-o"></i></div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label" for="inputMessage1">Message</label>
                          <div class="col-sm-9">
                            <div class="position-relative has-icon-left">
                              <textarea class="form-control" id="inputMessage1" rows="2" placeholder="Simple Textarea"></textarea>
                              <div class="form-control-position pl-1"><i class="la la-commenting-o"></i></div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-12 mb-1">
                            <button class="btn btn-info float-right" type="button"><i class="la la-paper-plane-o"></i> Send          </button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </li>
                </ul>
              </li>
              <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i class="ficon ft-search"></i></a>
                <div class="search-input">
                  <input class="input" type="text" placeholder="Explore Modern...">
                </div>
              </li>
            </ul>
            <ul class="nav navbar-nav float-right">
              <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"><span class="mr-1">Hello,<span class="user-name text-bold-700">{{ Auth::user()->username }}</span></span><span class="avatar avatar-online"><img src="{{ asset('assets/images/portrait/small/avatar-s-19.png') }}" alt="avatar"><i></i></span></a>
                <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><i class="ft-user"></i> Edit Profile</a><a class="dropdown-item" href="#"><i class="ft-mail"></i> My Inbox</a><a class="dropdown-item" href="#"><i class="ft-check-square"></i> Task</a><a class="dropdown-item" href="#"><i class="ft-message-square"></i> Chats</a>
                  <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="ft-power"></i> Logout</a>
                </div>
              </li>
				{{-- logout --}}
				<li class="nav-item">
					<a class="nav-link" href="{{ route('logout') }}" 
					onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
						<i class="fa-solid fa-right-from-bracket"></i> Logout
					</a>
				</li>

				<!-- Formulir untuk logout, disembunyikan agar tidak terlihat oleh pengguna -->
				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					@csrf
				</form>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <!-- ////////////////////////////////////////////////////////////////////////////-->

<main>
	@yield('content')
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <li class=" nav-item"><a href={{"dashboard"}}><i class="la la-home"></i><span class="menu-title" data-i18n="">eCommerce Dashboard</span></a>
          </li>
          <li class=" navigation-header"><span data-i18n="nav.category.ecommerce">Ecommerce</span><i class="undefined ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="Ecommerce"></i>
          </li>
          <li class="active"><a href="ecommerce-product-shop.html"><i class="la la-th-large"></i><span class="menu-title" data-i18n="">Shop</span></a>
          </li>
          <li class=" nav-item"><a href="ecommerce-product-detail.html"><i class="la la-list"></i><span class="menu-title" data-i18n="">Product Detail</span></a>
          </li>
		  <li class="nav-item">
			<a href="{{ route('admin.kategori.index') }}">
				<i class="la la-shopping-cart"></i>
				<span class="menu-title" data-i18n="">Kategori Barang</span>
			</a>
		</li>
				  </li>
          <li class=" nav-item"><a href={{"create"}}><i class="la la-shopping-cart"></i><span class="menu-title" data-i18n="">Tambah Admin</span></a>
          </li>
        </ul>
      </div>
    </div>

    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
            <h3 class="content-header-title mb-0 d-inline-block">Shop</h3>
            <div class="row breadcrumbs-top d-inline-block">
              <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a>
                  </li>
                  <li class="breadcrumb-item active">Shop
                  </li>
                </ol>
              </div>
            </div>
          </div>
          <div class="content-header-right col-md-6 col-12">
            <div class="btn-group float-md-right">
              <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
              <div class="dropdown-menu arrow"><a class="dropdown-item" href="#"><i class="fa fa-calendar-check mr-1"></i> Calender</a><a class="dropdown-item" href="#"><i class="fa fa-cart-plus mr-1"></i> Cart</a><a class="dropdown-item" href="#"><i class="fa fa-life-ring mr-1"></i> Support</a>
                <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fa fa-cog mr-1"></i> Settings</a>
              </div>
            </div>
          </div>
        </div>
        <div class="content-detached content-right">
          <div class="content-body"><div class="product-shop">
	<div class="card">
		<div class="card-body">
			<span class="shop-title">Products</span>
			<span class="float-right">
				<span class="result-text mr-1"> Showing 12 of 203 results</span>
				<span class="display-buttons">
					<a href="#" class="active"><i class="ft-grid font-medium-2"></i></a>
					<a href="#"><i class="ft-list font-medium-2"></i></a>
				</span>
			</span>
		</div>
	</div>
	<div class="row match-height">
		<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
			<div class="card pull-up">
				<div class="card-content">
					<div class="card-body">
						<a href="ecommerce-product-detail.html">
							<div class="product-img d-flex align-items-center">
								<div class="badge badge-success round">-50%</div>
								<img class="img-fluid mb-1" src="{{ asset('assets/images/elements/07.png') }}" alt="Card image cap">
							</div>
							<h4 class="product-title">Card title</h4>
							<div class="price-reviews">
								<span class="price-box">
									<span class="price">$250</span>
									<span class="old-price">$500</span>
								</span>
								<span class="ratings float-right"></span>
							</div>
						</a>
						<div class="product-action d-flex justify-content-around">
							<a href="#like" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ft-heart"></i></a><span
							 class="saperator">|</span>
							<a href="#view" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ft-eye"></i></a><span
							 class="saperator">|</span>
							<a href="#compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="ft-sliders"></i></a><span
							 class="saperator">|</span>
							<a href="#cart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ft-shopping-cart"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
			<div class="card pull-up">
				<div class="card-content">
					<div class="card-body">
						<a href="ecommerce-product-detail.html">
							<div class="product-img d-flex align-items-center">
								<img class="img-fluid mb-1" src="{{ asset('assets/images/elements/fitbit-watch.png') }}" alt="Card image cap">
							</div>
							<h4 class="product-title">Card title</h4>
							<div class="price-reviews">
								<span class="price-box">
									<span class="price">$250</span>
									<span class="old-price">$500</span>
								</span>
								<span class="ratings float-right"></span>
							</div>
						</a>
						<div class="product-action d-flex justify-content-around">
							<a href="#like" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ft-heart"></i></a><span
							 class="saperator">|</span>
							<a href="#view" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ft-eye"></i></a><span
							 class="saperator">|</span>
							<a href="#compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="ft-sliders"></i></a><span
							 class="saperator">|</span>
							<a href="#cart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ft-shopping-cart"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
			<div class="card pull-up">
				<div class="card-content">
					<div class="card-body">
						<a href="ecommerce-product-detail.html">
							<div class="product-img d-flex align-items-center">
								<img class="img-fluid mb-1" src="{{ asset('assets/images/elements/air-jordan.png') }}" alt="Card image cap">
							</div>
							<h4 class="product-title">Card title</h4>
							<div class="price-reviews">
								<span class="price-box">
									<span class="price">$250</span>
									<span class="old-price">$500</span>
								</span>
								<span class="ratings float-right"></span>
							</div>
						</a>
						<div class="product-action d-flex justify-content-around">
							<a href="#like" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ft-heart"></i></a><span
							 class="saperator">|</span>
							<a href="#view" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ft-eye"></i></a><span
							 class="saperator">|</span>
							<a href="#compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="ft-sliders"></i></a><span
							 class="saperator">|</span>
							<a href="#cart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ft-shopping-cart"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
			<div class="card pull-up">
				<div class="card-content">
					<div class="card-body">
						<a href="ecommerce-product-detail.html">
							<div class="product-img d-flex align-items-center">
								<img class="img-fluid mb-1" src="{{ asset('assets/images/elements/13.png') }}" alt="Card image cap">
							</div>
							<h4 class="product-title">Card title</h4>
							<div class="price-reviews">
								<span class="price-box">
									<span class="price">$250</span>
									<span class="old-price">$500</span>
								</span>
								<span class="ratings float-right"></span>
							</div>
						</a>
						<div class="product-action d-flex justify-content-around">
							<a href="#like" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ft-heart"></i></a><span
							 class="saperator">|</span>
							<a href="#view" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ft-eye"></i></a><span
							 class="saperator">|</span>
							<a href="#compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="ft-sliders"></i></a><span
							 class="saperator">|</span>
							<a href="#cart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ft-shopping-cart"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
			<div class="card pull-up">
				<div class="card-content">
					<div class="card-body">
						<a href="ecommerce-product-detail.html">
							<div class="product-img d-flex align-items-center">
								<img class="img-fluid mb-1" src="{{ asset('assets/images/elements/apple-watch.png') }}" alt="Card image cap">
							</div>
							<h4 class="product-title">Card title</h4>
							<div class="price-reviews">
								<span class="price-box">
									<span class="price">$250</span>
									<span class="old-price">$500</span>
								</span>
								<span class="ratings float-right"></span>
							</div>
						</a>
						<div class="product-action d-flex justify-content-around">
							<a href="#like" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ft-heart"></i></a><span
							 class="saperator">|</span>
							<a href="#view" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ft-eye"></i></a><span
							 class="saperator">|</span>
							<a href="#compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="ft-sliders"></i></a><span
							 class="saperator">|</span>
							<a href="#cart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ft-shopping-cart"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
			<div class="card pull-up">
				<div class="card-content">
					<div class="card-body">
						<a href="ecommerce-product-detail.html">
							<div class="product-img d-flex align-items-center">
								<div class="badge badge-success badge-right">Sale</div>
								<img class="img-fluid mb-1" src="{{ asset('assets/images/elements/vr.png') }}" alt="Card image cap">
							</div>
							<h4 class="product-title">Card title</h4>
							<div class="price-reviews">
								<span class="price-box">
									<span class="price">$250</span>
									<span class="old-price">$500</span>
								</span>
								<span class="ratings float-right"></span>
							</div>
						</a>
						<div class="product-action d-flex justify-content-around">
							<a href="#like" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ft-heart"></i></a><span
							 class="saperator">|</span>
							<a href="#view" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ft-eye"></i></a><span
							 class="saperator">|</span>
							<a href="#compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="ft-sliders"></i></a><span
							 class="saperator">|</span>
							<a href="#cart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ft-shopping-cart"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
			<div class="card pull-up">
				<div class="card-content">
					<div class="card-body">
						<a href="ecommerce-product-detail.html">
							<div class="product-img d-flex align-items-center">
								<img class="img-fluid mb-1" src="{{ asset('assets/images/carousel/23.jpg') }}" alt="Card image cap">
							</div>
							<h4 class="product-title">Card title</h4>
							<div class="price-reviews">
								<span class="price-box">
									<span class="price">$250</span>
									<span class="old-price">$500</span>
								</span>
								<span class="ratings float-right"></span>
							</div>
						</a>
						<div class="product-action d-flex justify-content-around">
							<a href="#like" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ft-heart"></i></a><span
							 class="saperator">|</span>
							<a href="#view" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ft-eye"></i></a><span
							 class="saperator">|</span>
							<a href="#compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="ft-sliders"></i></a><span
							 class="saperator">|</span>
							<a href="#cart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ft-shopping-cart"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
			<div class="card pull-up">
				<div class="card-content">
					<div class="card-body">
						<a href="ecommerce-product-detail.html">
							<div class="product-img d-flex align-items-center">
								<img class="img-fluid mb-1" src="{{ asset('assets/images/carousel/24.png') }}" alt="Card image cap">
							</div>
							<h4 class="product-title">Card title</h4>
							<div class="price-reviews">
								<span class="price-box">
									<span class="price">$250</span>
									<span class="old-price">$500</span>
								</span>
								<span class="ratings float-right"></span>
							</div>
						</a>
						<div class="product-action d-flex justify-content-around">
							<a href="#like" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ft-heart"></i></a><span
							 class="saperator">|</span>
							<a href="#view" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ft-eye"></i></a><span
							 class="saperator">|</span>
							<a href="#compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="ft-sliders"></i></a><span
							 class="saperator">|</span>
							<a href="#cart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ft-shopping-cart"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
			<div class="card pull-up">
				<div class="card-content">
					<div class="card-body">
						<a href="ecommerce-product-detail.html">
							<div class="product-img d-flex align-items-center">
								<img class="img-fluid mb-1" src="{{ asset('assets/images/carousel/26.jpg') }}" alt="Card image cap">
							</div>
							<h4 class="product-title">Card title</h4>
							<div class="price-reviews">
								<span class="price-box">
									<span class="price">$250</span>
									<span class="old-price">$500</span>
								</span>
								<span class="ratings float-right"></span>
							</div>
						</a>
						<div class="product-action d-flex justify-content-around">
							<a href="#like" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ft-heart"></i></a><span
							 class="saperator">|</span>
							<a href="#view" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ft-eye"></i></a><span
							 class="saperator">|</span>
							<a href="#compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="ft-sliders"></i></a><span
							 class="saperator">|</span>
							<a href="#cart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ft-shopping-cart"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
			<div class="card pull-up">
				<div class="card-content">
					<div class="card-body">
						<a href="ecommerce-product-detail.html">
							<div class="product-img d-flex align-items-center">
								<img class="img-fluid mb-1" src="{{ asset('assets/images/carousel/25.jpg') }}" alt="Card image cap">
							</div>
							<h4 class="product-title">Card title</h4>
							<div class="price-reviews">
								<span class="price-box">
									<span class="price">$250</span>
									<span class="old-price">$500</span>
								</span>
								<span class="ratings float-right"></span>
							</div>
						</a>
						<div class="product-action d-flex justify-content-around">
							<a href="#like" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ft-heart"></i></a><span
							 class="saperator">|</span>
							<a href="#view" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ft-eye"></i></a><span
							 class="saperator">|</span>
							<a href="#compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="ft-sliders"></i></a><span
							 class="saperator">|</span>
							<a href="#cart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ft-shopping-cart"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
			<div class="card pull-up">
				<div class="card-content">
					<div class="card-body">
						<a href="ecommerce-product-detail.html">
							<div class="product-img d-flex align-items-center">
								<img class="img-fluid mb-1" src="{{ asset('assets/images/carousel/27.jpg') }}" alt="Card image cap">
							</div>
							<h4 class="product-title">Card title</h4>
							<div class="price-reviews">
								<span class="price-box">
									<span class="price">$250</span>
									<span class="old-price">$500</span>
								</span>
								<span class="ratings float-right"></span>
							</div>
						</a>
						<div class="product-action d-flex justify-content-around">
							<a href="#like" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ft-heart"></i></a><span
							 class="saperator">|</span>
							<a href="#view" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ft-eye"></i></a><span
							 class="saperator">|</span>
							<a href="#compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="ft-sliders"></i></a><span
							 class="saperator">|</span>
							<a href="#cart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ft-shopping-cart"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
			<div class="card pull-up">
				<div class="card-content">
					<div class="card-body">
						<a href="ecommerce-product-detail.html">
							<div class="product-img d-flex align-items-center">
								<div class="badge badge-success">-55%</div>
								<img class="img-fluid mb-1" src="{{ asset('assets/images/elements/samsung-gear.jpg') }}" alt="Card image cap">
							</div>
							<h4 class="product-title">Card title</h4>
							<div class="price-reviews">
								<span class="price-box">
									<span class="price">$225</span>
									<span class="old-price">$500</span>
								</span>
								<span class="ratings float-right"></span>
							</div>
						</a>
						<div class="product-action d-flex justify-content-around">
							<a href="#like" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ft-heart"></i></a><span
							 class="saperator">|</span>
							<a href="#view" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ft-eye"></i></a><span
							 class="saperator">|</span>
							<a href="#compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="ft-sliders"></i></a><span
							 class="saperator">|</span>
							<a href="#cart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ft-shopping-cart"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-12">
			<div class="card">
				<div class="card-content">
					<ul class="pagination justify-content-center pagination-separate pagination-flat">
						<li class="page-item">
							<a class="page-link" href="#" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
								<span class="sr-only">Previous</span>
							</a>
						</li>
						<li class="page-item"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item active"><a class="page-link" href="#">3</a></li>
						<li class="page-item"><a class="page-link" href="#">4</a></li>
						<li class="page-item"><a class="page-link" href="#">5</a></li>
						<li class="page-item">
							<a class="page-link" href="#" aria-label="Next">
								<span aria-hidden="true">&raquo;</span>
								<span class="sr-only">Next</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
          </div>
        </div>
        <div class="sidebar-detached sidebar-left">
          <div class="sidebar"><div class="sidebar-content d-none d-lg-block sidebar-shop">
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
      </div>
    </div>

</main>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
      <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright  &copy; 2018 <a class="text-bold-800 grey darken-2" href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">PIXINVENT </a>, All rights reserved. </span><span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Hand-crafted & Made with <i class="ft-heart pink"></i></span></p>
    </footer>

    <!-- BEGIN VENDOR JS-->
    <script src="{{ asset('assets/vendors/js/vendors.min.jpg') }}"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{ asset('assets/vendors/js/ui/prism.min.jpg') }}"></script>
    <script src="{{ asset('assets/vendors/js/extensions/jquery.raty.jpg') }}"></script>
    <script src="{{ asset('assets/vendors/js/extensions/jquery.cookie.jpg') }}"></script>
    <script src="{{ asset('assets/vendors/js/extensions/jquery.treeview.jpg') }}"></script>
    <script src="{{ asset('assets/vendors/js/extensions/wNumb.jpg') }}"></script>
    <script src="{{ asset('assets/vendors/js/extensions/nouislider.min.jpg') }}"></script>
    <script src="{{ asset('assets/vendors/js/forms/icheck/icheck.min.jpg') }}"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN MODERN JS-->
    <script src="{{ asset('assets/js/core/app-menu.jpg') }}"></script>
    <script src="{{ asset('assets/js/core/app.jpg') }}"></script>
    <!-- END MODERN JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{ asset('assets/js/scripts/pages/content-sidebar.jpg') }}"></script>
    <script src="{{ asset('assets/js/scripts/pages/ecommerce-product-shop.jpg') }}"></script>
    <!-- END PAGE LEVEL JS-->
  </body>
</html>