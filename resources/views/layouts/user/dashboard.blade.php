@extends('layouts.user.app')

@section('content')
<main>
	@yield('content')
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <li class=" nav-item"><a href="index.html"><i class="la la-home"></i><span class="menu-title" data-i18n="">eCommerce Dashboard</span></a>
          </li>
          <li class=" navigation-header"><span data-i18n="nav.category.ecommerce">Ecommerce</span><i class="undefined ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="Ecommerce"></i>
          </li>
          <li class="active"><a href="ecommerce-product-shop.html"><i class="la la-th-large"></i><span class="menu-title" data-i18n="">Shop</span></a>
          </li>
          <li class=" nav-item"><a href="ecommerce-product-detail.html"><i class="la la-list"></i><span class="menu-title" data-i18n="">Product Detail</span></a>
          </li>
          <li class=" nav-item"><a href="ecommerce-shopping-cart.html"><i class="la la-shopping-cart"></i><span class="menu-title" data-i18n="">Shopping Cart</span></a>
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
@endsection