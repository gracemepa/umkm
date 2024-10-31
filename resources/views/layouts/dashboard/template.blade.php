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
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/weather-icons/climacons.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/meteocons/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/charts/morris.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/charts/chartist.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/charts/chartist-plugin-tooltip.css') }}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/app.css') }}">
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/core/menu/menu-types/vertical-menu-modern.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/simple-line-icons/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pages/timeline.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pages/dashboard-ecommerce.css') }}">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <!-- END Custom CSS-->
  </head>
  <body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    @include('layouts.dashboard.navbar')


    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <li class="active"><a href="index.html"><i class="la la-home"></i><span class="menu-title" data-i18n="">eCommerce Dashboard</span></a>
          </li>
          <li class=" navigation-header"><span data-i18n="nav.category.ecommerce">Ecommerce</span><i class="undefined ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="Ecommerce"></i>
          </li>
          <li class=" nav-item"><a href="ecommerce-product-shop.html"><i class="la la-th-large"></i><span class="menu-title" data-i18n="">Shop</span></a>
          </li>
          <li class=" nav-item"><a href="ecommerce-product-detail.html"><i class="la la-list"></i><span class="menu-title" data-i18n="">Product Detail</span></a>
          </li>
          <li class=" nav-item"><a href="ecommerce-shopping-cart.html"><i class="la la-shopping-cart"></i><span class="menu-title" data-i18n="">Shopping Cart</span></a>
          </li>
          <li class=" nav-item"><a href="ecommerce-checkout.html"><i class="la la-credit-card"></i><span class="menu-title" data-i18n="">Checkout</span></a>
          </li>
          <li class=" nav-item"><a href="ecommerce-order.html"><i class="la la-check-circle-o"></i><span class="menu-title" data-i18n="">Order</span></a>
          </li>
          <li class=" nav-item"><a href="#"><i class="la la-clipboard"></i><span class="menu-title" data-i18n="nav.invoice.main">Invoice</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="invoice-summary.html" data-i18n="nav.invoice.invoice_summary">Invoice Summary</a>
              </li>
              <li><a class="menu-item" href="invoice-template.html" data-i18n="nav.invoice.invoice_template">Invoice Template</a>
              </li>
              <li><a class="menu-item" href="invoice-list.html" data-i18n="nav.invoice.invoice_list">Invoice List</a>
              </li>
            </ul>
          </li>
          <li class=" navigation-header"><span data-i18n="nav.category.ui">User Interface</span><i class="undefined ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="User Interface"></i>
          </li>
          <li class=" nav-item"><a href="#"><i class="la la-server"></i><span class="menu-title" data-i18n="nav.components.main">Components</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="component-alerts.html" data-i18n="nav.components.component_alerts">Alerts</a>
              </li>
              <li><a class="menu-item" href="component-callout.html" data-i18n="nav.components.component_callout">Callout</a>
              </li>
              <li><a class="menu-item" href="#" data-i18n="nav.components.components_buttons.main">Buttons</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="component-buttons-basic.html" data-i18n="nav.components.components_buttons.component_buttons_basic">Basic Buttons</a>
                  </li>
                  <li><a class="menu-item" href="component-buttons-extended.html" data-i18n="nav.components.components_buttons.component_buttons_extended">Extended Buttons</a>
                  </li>
                </ul>
              </li>
              <li><a class="menu-item" href="component-carousel.html" data-i18n="nav.components.component_carousel">Carousel</a>
              </li>
              <li><a class="menu-item" href="component-collapse.html" data-i18n="nav.components.component_collapse">Collapse</a>
              </li>
              <li><a class="menu-item" href="component-dropdowns.html" data-i18n="nav.components.component_dropdowns">Dropdowns</a>
              </li>
              <li><a class="menu-item" href="component-list-group.html" data-i18n="nav.components.component_list_group">List Group</a>
              </li>
              <li><a class="menu-item" href="component-modals.html" data-i18n="nav.components.component_modals">Modals</a>
              </li>
              <li><a class="menu-item" href="component-pagination.html" data-i18n="nav.components.component_pagination">Pagination</a>
              </li>
              <li><a class="menu-item" href="component-navs-component.html" data-i18n="nav.components.component_navs_component">Navs Component</a>
              </li>
              <li><a class="menu-item" href="component-tabs-component.html" data-i18n="nav.components.component_tabs_component">Tabs Component</a>
              </li>
              <li><a class="menu-item" href="component-pills-component.html" data-i18n="nav.components.component_pills_component">Pills Component</a>
              </li>
              <li><a class="menu-item" href="component-tooltips.html" data-i18n="nav.components.component_tooltips">Tooltips</a>
              </li>
              <li><a class="menu-item" href="component-popovers.html" data-i18n="nav.components.component_popovers">Popovers</a>
              </li>
              <li><a class="menu-item" href="component-badges.html" data-i18n="nav.components.component_badges">Badges</a>
              </li>
              <li><a class="menu-item" href="component-pill-badges.html">Pill Badges</a>
              </li>
              <li><a class="menu-item" href="component-progress.html" data-i18n="nav.components.component_progress">Progress</a>
              </li>
              <li><a class="menu-item" href="component-media-objects.html" data-i18n="nav.components.component_media_objects">Media Objects</a>
              </li>
              <li><a class="menu-item" href="component-scrollable.html" data-i18n="nav.components.component_scrollable">Scrollable</a>
              </li>
              <li><a class="menu-item" href="component-spinners.html" data-i18n="nav.components.component_spinners">Spinners</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="la la-unlock"></i><span class="menu-title" data-i18n="nav.pages.main">Authentication</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="login-with-bg-image.html">Login</a>
              </li>
              <li><a class="menu-item" href="register-with-bg-image.html">SignIn</a>
              </li>
              <li><a class="menu-item" href="recover-password.html">Forgot Password</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="la la-file-text"></i><span class="menu-title" data-i18n="nav.form_layouts.main">Form Layouts</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="form-layout-basic.html" data-i18n="nav.form_layouts.form_layout_basic">Basic Forms</a>
              </li>
              <li><a class="menu-item" href="form-layout-horizontal.html" data-i18n="nav.form_layouts.form_layout_horizontal">Horizontal Forms</a>
              </li>
              <li><a class="menu-item" href="form-layout-hidden-labels.html" data-i18n="nav.form_layouts.form_layout_hidden_labels">Hidden Labels</a>
              </li>
              <li><a class="menu-item" href="form-layout-form-actions.html" data-i18n="nav.form_layouts.form_layout_form_actions">Form Actions</a>
              </li>
              <li><a class="menu-item" href="form-layout-row-separator.html" data-i18n="nav.form_layouts.form_layout_row_separator">Row Separator</a>
              </li>
              <li><a class="menu-item" href="form-layout-bordered.html" data-i18n="nav.form_layouts.form_layout_bordered">Bordered</a>
              </li>
              <li><a class="menu-item" href="form-layout-striped-rows.html" data-i18n="nav.form_layouts.form_layout_striped_rows">Striped Rows</a>
              </li>
              <li><a class="menu-item" href="form-layout-striped-labels.html" data-i18n="nav.form_layouts.form_layout_striped_labels">Striped Labels</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="la la-paste"></i><span class="menu-title" data-i18n="nav.form_wizard.main">Form Wizard</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="form-wizard-circle-style.html" data-i18n="nav.form_wizard.form_wizard_circle_style">Circle Style</a>
              </li>
              <li><a class="menu-item" href="form-wizard-notification-style.html" data-i18n="nav.form_wizard.form_wizard_notification_style">Notification Style</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="la la-table"></i><span class="menu-title" data-i18n="nav.bootstrap_tables.main">Bootstrap Tables</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="table-basic.html" data-i18n="nav.bootstrap_tables.table_basic">Basic Tables</a>
              </li>
              <li><a class="menu-item" href="table-border.html" data-i18n="nav.bootstrap_tables.table_border">Table Border</a>
              </li>
              <li><a class="menu-item" href="table-sizing.html" data-i18n="nav.bootstrap_tables.table_sizing">Table Sizing</a>
              </li>
              <li><a class="menu-item" href="table-styling.html" data-i18n="nav.bootstrap_tables.table_styling">Table Styling</a>
              </li>
              <li><a class="menu-item" href="table-components.html" data-i18n="nav.bootstrap_tables.table_components">Table Components</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="la la-area-chart"></i><span class="menu-title" data-i18n="nav.chartjs.main">Chartjs</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="chartjs-line-charts.html" data-i18n="nav.chartjs.chartjs_line_charts">Line charts</a>
              </li>
              <li><a class="menu-item" href="chartjs-bar-charts.html" data-i18n="nav.chartjs.chartjs_bar_charts">Bar charts</a>
              </li>
              <li><a class="menu-item" href="chartjs-pie-doughnut-charts.html" data-i18n="nav.chartjs.chartjs_pie_doughnut_charts">Pie &amp; Doughnut charts</a>
              </li>
              <li><a class="menu-item" href="chartjs-scatter-charts.html" data-i18n="nav.chartjs.chartjs_scatter_charts">Scatter charts</a>
              </li>
              <li><a class="menu-item" href="chartjs-polar-radar-charts.html" data-i18n="nav.chartjs.chartjs_polar_radar_charts">Polar &amp; Radar charts</a>
              </li>
              <li><a class="menu-item" href="chartjs-advance-charts.html" data-i18n="nav.chartjs.chartjs_advance_charts">Advance charts</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>

    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- eCommerce statistic -->
<div class="row">
    <div class="col-xl-3 col-lg-6 col-12">
        <div class="card pull-up">
            <div class="card-content">
                <div class="card-body">
                    <div class="media d-flex">
                        <div class="media-body text-left">
                            <h3 class="info">850</h3>
                            <h6>Products Sold</h6>
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
    <div class="col-xl-3 col-lg-6 col-12">
        <div class="card pull-up">
            <div class="card-content">
                <div class="card-body">
                    <div class="media d-flex">
                        <div class="media-body text-left">
                            <h3 class="warning">$748</h3>
                            <h6>Net Profit</h6>
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
    <div class="col-xl-3 col-lg-6 col-12">
        <div class="card pull-up">
            <div class="card-content">
                <div class="card-body">
                    <div class="media d-flex">
                        <div class="media-body text-left">
                            <h3 class="success">146</h3>
                            <h6>New Customers</h6>
                        </div>
                        <div>
                            <i class="icon-user-follow success font-large-2 float-right"></i>
                        </div>
                    </div>
                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                        <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-12">
        <div class="card pull-up">
            <div class="card-content">
                <div class="card-body">
                    <div class="media d-flex">
                        <div class="media-body text-left">
                            <h3 class="danger">99.89 %</h3>
                            <h6>Customer Satisfaction</h6>
                        </div>
                        <div>
                            <i class="icon-heart danger font-large-2 float-right"></i>
                        </div>
                    </div>
                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                        <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ eCommerce statistic -->

<!-- Products sell and New Orders -->
<div class="row match-height">
    <div class="col-xl-8 col-12" id="ecommerceChartView">
        <div class="card card-shadow">
          <div class="card-header card-header-transparent py-20">
            <div class="btn-group dropdown">
              <a href="#" class="text-body dropdown-toggle blue-grey-700" data-toggle="dropdown">PRODUCTS SALES</a>
              <div class="dropdown-menu animate" role="menu">
                <a class="dropdown-item" href="#" role="menuitem">Sales</a>
                <a class="dropdown-item" href="#" role="menuitem">Total sales</a>
                <a class="dropdown-item" href="#" role="menuitem">profit</a>
              </div>
            </div>
            <ul class="nav nav-pills nav-pills-rounded chart-action float-right btn-group" role="group">
              <li class="nav-item"><a class="active nav-link" data-toggle="tab" href="#scoreLineToDay">Day</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#scoreLineToWeek">Week</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#scoreLineToMonth">Month</a></li>
            </ul>
          </div>
          <div class="widget-content tab-content bg-white p-20">
            <div class="ct-chart tab-pane active scoreLineShadow" id="scoreLineToDay"></div>
            <div class="ct-chart tab-pane scoreLineShadow" id="scoreLineToWeek"></div>
            <div class="ct-chart tab-pane scoreLineShadow" id="scoreLineToMonth"></div>
          </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">New Orders</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-content">
                <div id="new-orders" class="media-list position-relative">
                    <div class="table-responsive">
                        <table id="new-orders-table" class="table table-hover table-xl mb-0">
                            <thead>
                                <tr>
                                    <th class="border-top-0">Product</th>
                                    <th class="border-top-0">Customers</th>
                                    <th class="border-top-0">Total</th>                                
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-truncate">iPhone X</td>
                                    <td class="text-truncate p-1">
                                        <ul class="list-unstyled users-list m-0">                                               
                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="John Doe"  class="avatar avatar-sm pull-up">
                                                <img class="media-object rounded-circle" src="/assets/images/portrait/small/avatar-s-19.png" alt="Avatar">
                                            </li>
                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Katherine Nichols"  class="avatar avatar-sm pull-up">
                                                <img class="media-object rounded-circle" src="/assets/images/portrait/small/avatar-s-18.png" alt="Avatar">
                                            </li>
                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Joseph Weaver"  class="avatar avatar-sm pull-up">
                                                <img class="media-object rounded-circle" src="/assets/images/portrait/small/avatar-s-17.png" alt="Avatar">
                                            </li>
                                            <li class="avatar avatar-sm">                                            
                                                <span class="badge badge-info">+4 more</span>
                                            </li>
                                        </ul>
                                    </td>
                                    <td class="text-truncate">$8999</td>                                
                                </tr>
                                <tr>
                                    <td class="text-truncate">Pixel 2</td>
                                    <td class="text-truncate p-1">
                                        <ul class="list-unstyled users-list m-0">                                               
                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Alice Scott"  class="avatar avatar-sm pull-up">
                                                <img class="media-object rounded-circle" src="/assets/images/portrait/small/avatar-s-16.png" alt="Avatar">
                                            </li>
                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Charles Miller"  class="avatar avatar-sm pull-up">
                                                <img class="media-object rounded-circle" src="/assets/images/portrait/small/avatar-s-15.png" alt="Avatar">
                                            </li>
                                        </ul>
                                    </td>
                                    <td class="text-truncate">$5550</td>                                
                                </tr>
                                <tr>
                                    <td class="text-truncate">OnePlus</td>
                                    <td class="text-truncate p-1">
                                        <ul class="list-unstyled users-list m-0">                                               
                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Christine Ramos"  class="avatar avatar-sm pull-up">
                                                <img class="media-object rounded-circle" src="/assets/images/portrait/small/avatar-s-11.png" alt="Avatar">
                                            </li>
                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Thomas Brewer"  class="avatar avatar-sm pull-up">
                                                <img class="media-object rounded-circle" src="/assets/images/portrait/small/avatar-s-10.png" alt="Avatar">
                                            </li>
                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Alice Chapman"  class="avatar avatar-sm pull-up">
                                                <img class="media-object rounded-circle" src="/assets/images/portrait/small/avatar-s-9.png" alt="Avatar">
                                            </li>
                                            <li class="avatar avatar-sm">                                            
                                                <span class="badge badge-info">+3 more</span>
                                            </li>
                                        </ul>
                                    </td>
                                    <td class="text-truncate">$9000</td>                                
                                </tr>
                                <tr>
                                    <td class="text-truncate">Galaxy</td>
                                    <td class="text-truncate p-1">
                                        <ul class="list-unstyled users-list m-0">                                               
                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Ryan Schneider"  class="avatar avatar-sm pull-up">
                                                <img class="media-object rounded-circle" src="/assets/images/portrait/small/avatar-s-14.png" alt="Avatar">
                                            </li>
                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Tiffany Oliver"  class="avatar avatar-sm pull-up">
                                                <img class="media-object rounded-circle" src="/assets/images/portrait/small/avatar-s-13.png" alt="Avatar">
                                            </li>
                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Joan Reid"  class="avatar avatar-sm pull-up">
                                                <img class="media-object rounded-circle" src="/assets/images/portrait/small/avatar-s-12.png" alt="Avatar">
                                            </li>
                                        </ul>
                                    </td>
                                    <td class="text-truncate">$7500</td>                                
                                </tr>                            
                                <tr>
                                    <td class="text-truncate">Moto Z2</td>
                                    <td class="text-truncate p-1">
                                        <ul class="list-unstyled users-list m-0">                                               
                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons"  class="avatar avatar-sm pull-up">
                                                <img class="media-object rounded-circle" src="/assets/images/portrait/small/avatar-s-8.png" alt="Avatar">
                                            </li>
                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres"  class="avatar avatar-sm pull-up">
                                                <img class="media-object rounded-circle" src="/assets/images/portrait/small/avatar-s-7.png" alt="Avatar">
                                            </li>
                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Rebecca Jones"  class="avatar avatar-sm pull-up">
                                                <img class="media-object rounded-circle" src="/assets/images/portrait/small/avatar-s-6.png" alt="Avatar">
                                            </li>
                                            <li class="avatar avatar-sm">                                            
                                                <span class="badge badge-info">+1 more</span>
                                            </li>
                                        </ul>
                                    </td>
                                    <td class="text-truncate">$8500</td>                                
                                </tr>                                                    
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ Products sell and New Orders -->

<!-- Recent Transactions -->
<div class="row">
    <div id="recent-transactions" class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Recent Transactions</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a class="btn btn-sm btn-danger box-shadow-2 round btn-min-width pull-right" href="invoice-summary.html" target="_blank">Invoice Summary</a></li>
                    </ul>
                </div>
            </div>            
            <div class="card-content">                
                <div class="table-responsive">
                    <table id="recent-orders" class="table table-hover table-xl mb-0">
                        <thead>
                            <tr>
                                <th class="border-top-0">Status</th>                                
                                <th class="border-top-0">Invoice#</th>
                                <th class="border-top-0">Customer Name</th>
                                <th class="border-top-0">Products</th>
                                <th class="border-top-0">Categories</th>
                                <th class="border-top-0">Shipping</th>
                                <th class="border-top-0">Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-truncate"><i class="la la-dot-circle-o success font-medium-1 mr-1"></i> Paid</td>
                                <td class="text-truncate"><a href="#">INV-001001</a></td>
                                <td class="text-truncate">
                                    <span class="avatar avatar-xs">
                                        <img class="box-shadow-2" src="/assets/images/portrait/small/avatar-s-4.png" alt="avatar">
                                    </span>
                                    <span>Elizabeth W.</span>
                                </td>
                                <td class="text-truncate p-1">
                                    <ul class="list-unstyled users-list m-0">                                               
                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons" class="avatar avatar-sm pull-up">
                                            <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="/assets/images/portfolio/portfolio-1.jpg" alt="Avatar">
                                        </li>
                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres" class="avatar avatar-sm pull-up">
                                            <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="/assets/images/portfolio/portfolio-2.jpg" alt="Avatar">
                                        </li>
                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Rebecca Jones" class="avatar avatar-sm pull-up">
                                            <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="/assets/images/portfolio/portfolio-4.jpg" alt="Avatar">
                                        </li>
                                        <li class="avatar avatar-sm">                                            
                                            <span class="badge badge-info">+1 more</span>
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-outline-danger round">Food</button>
                                </td>
                                <td>
                                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                        <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="text-truncate">$ 1200.00</td>
                            </tr>
                            <tr>
                                <td class="text-truncate"><i class="la la-dot-circle-o danger font-medium-1 mr-1"></i> Declined</td>
                                <td class="text-truncate"><a href="#">INV-001002</a></td>
                                <td class="text-truncate">
                                    <span class="avatar avatar-xs">
                                        <img class="box-shadow-2" src="/assets/images/portrait/small/avatar-s-5.png" alt="avatar">
                                    </span>
                                    <span>Doris R.</span>
                                </td>
                                <td class="text-truncate p-1">
                                    <ul class="list-unstyled users-list m-0">                                               
                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons" class="avatar avatar-sm pull-up">
                                            <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="/assets/images/portfolio/portfolio-5.jpg" alt="Avatar">
                                        </li>
                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres" class="avatar avatar-sm pull-up">
                                            <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="/assets/images/portfolio/portfolio-6.jpg" alt="Avatar">
                                        </li>                                        
                                        <li class="avatar avatar-sm">                                            
                                            <span class="badge badge-info">+2 more</span>
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-outline-warning round">Electronics</button>
                                </td>
                                <td>
                                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                        <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="text-truncate">$ 1850.00</td>
                            </tr>
                            <tr>
                                <td class="text-truncate"><i class="la la-dot-circle-o warning font-medium-1 mr-1"></i> Pending</td>
                                <td class="text-truncate"><a href="#">INV-001003</a></td>
                                <td class="text-truncate">
                                    <span class="avatar avatar-xs">
                                        <img class="box-shadow-2" src="/assets/images/portrait/small/avatar-s-6.png" alt="avatar">
                                    </span>
                                    <span>Megan S.</span>
                                </td>
                                <td class="text-truncate p-1">
                                    <ul class="list-unstyled users-list m-0">                                               
                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons" class="avatar avatar-sm pull-up">
                                            <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="/assets/images/portfolio/portfolio-2.jpg" alt="Avatar">
                                        </li>
                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres" class="avatar avatar-sm pull-up">
                                            <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="/assets/images/portfolio/portfolio-5.jpg" alt="Avatar">
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-outline-success round">Groceries</button>
                                </td>
                                <td>
                                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                        <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="text-truncate">$ 3200.00</td>
                            </tr>
                            <tr>
                                <td class="text-truncate"><i class="la la-dot-circle-o success font-medium-1 mr-1"></i> Paid</td>
                                <td class="text-truncate"><a href="#">INV-001004</a></td>
                                <td class="text-truncate">
                                    <span class="avatar avatar-xs">
                                        <img class="box-shadow-2" src="/assets/images/portrait/small/avatar-s-7.png" alt="avatar">
                                    </span>
                                    <span>Andrew D.</span>
                                </td>
                                <td class="text-truncate p-1">
                                    <ul class="list-unstyled users-list m-0">                                               
                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons" class="avatar avatar-sm pull-up">
                                            <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="/assets/images/portfolio/portfolio-6.jpg" alt="Avatar">
                                        </li>
                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres" class="avatar avatar-sm pull-up">
                                            <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="/assets/images/portfolio/portfolio-1.jpg" alt="Avatar">
                                        </li>
                                        <li class="avatar avatar-sm">                                            
                                            <span class="badge badge-info">+1 more</span>
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-outline-info round">Apparels</button>
                                </td>
                                <td>
                                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                        <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="text-truncate">$ 4500.00</td>
                            </tr>
                            <tr>
                                <td class="text-truncate"><i class="la la-dot-circle-o success font-medium-1 mr-1"></i> Paid</td>
                                <td class="text-truncate"><a href="#">INV-001005</a></td>
                                <td class="text-truncate">
                                    <span class="avatar avatar-xs">
                                        <img class="box-shadow-2" src="/assets/images/portrait/small/avatar-s-9.png" alt="avatar">
                                    </span>
                                    <span>Walter R.</span>
                                </td>
                                <td class="text-truncate p-1">
                                    <ul class="list-unstyled users-list m-0">                                               
                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons" class="avatar avatar-sm pull-up">
                                            <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="/assets/images/portfolio/portfolio-5.jpg" alt="Avatar">
                                        </li>
                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres" class="avatar avatar-sm pull-up">
                                            <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="/assets/images/portfolio/portfolio-3.jpg" alt="Avatar">
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-outline-danger round">Food</button>
                                </td>
                                <td>
                                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                        <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="text-truncate">$ 1500.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ Recent Transactions -->

<!--Recent Orders & Monthly Sales -->
<div class="row match-height">
    <div class="col-xl-8 col-lg-12">
            <div class="card">
                <div class="card-content ">
                    <div id="cost-revenue" class="height-250 position-relative"></div>
                </div>
                <div class="card-footer">
                    <div class="row mt-1">
                        <div class="col-3 text-center">
                            <h6 class="text-muted">Total Products</h6>
                            <h2 class="block font-weight-normal">18.6 k</h2>
                            <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-3 text-center">
                            <h6 class="text-muted">Total Sales</h6>
                            <h2 class="block font-weight-normal">64.54 M</h2>
                            <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-3 text-center">
                            <h6 class="text-muted">Total Cost</h6>
                            <h2 class="block font-weight-normal">24.38 B</h2>
                            <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-3 text-center">
                            <h6 class="text-muted">Total Revenue</h6>
                            <h2 class="block font-weight-normal">36.72 M</h2>
                            <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="col-xl-4 col-lg-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body sales-growth-chart">
                    <div id="monthly-sales" class="height-250"></div>
                </div>
            </div>
            <div class="card-footer">
                <div class="chart-title mb-1 text-center">
                    <h6>Total monthly Sales.</h6>
                </div>
                <div class="chart-stats text-center">
                    <a href="#" class="btn btn-sm btn-danger box-shadow-2 mr-1">Statistics <i class="ft-bar-chart"></i></a> <span class="text-muted">for the last year.</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/Recent Orders & Monthly Sales -->

<!-- Basic Horizontal Timeline -->
<div class="row match-height">
    <div class="col-xl-4 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Basic Card</h4>
            </div>
            <div class="card-content">
                <img class="img-fluid" src="/assets/images/carousel/05.jpg" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
            <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
                <span class="float-left">3 hours ago</span>
                <span class="float-right">
                    <a href="#" class="card-link">Read More <i class="fa fa-angle-right"></i></a>
                  </span>
            </div>
        </div>
    </div>
    <div class="col-xl-8 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Horizontal Timeline</h4>
                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <div class="card-text">
                        <section class="cd-horizontal-timeline">
                            <div class="timeline">
                                <div class="events-wrapper">
                                    <div class="events">
                                        <ol>
                                            <li><a href="#0" data-date="16/01/2015" class="selected">16 Jan</a></li>
                                            <li><a href="#0" data-date="28/02/2015">28 Feb</a></li>
                                            <li><a href="#0" data-date="20/04/2015">20 Mar</a></li>
                                            <li><a href="#0" data-date="20/05/2015">20 May</a></li>
                                            <li><a href="#0" data-date="09/07/2015">09 Jul</a></li>
                                            <li><a href="#0" data-date="30/08/2015">30 Aug</a></li>
                                            <li><a href="#0" data-date="15/09/2015">15 Sep</a></li>
                                        </ol>
                                        <span class="filling-line" aria-hidden="true"></span>
                                    </div>
                                    <!-- .events -->
                                </div>
                                <!-- .events-wrapper -->
                                <ul class="cd-timeline-navigation">
                                    <li><a href="#0" class="prev inactive">Prev</a></li>
                                    <li><a href="#0" class="next">Next</a></li>
                                </ul>
                                <!-- .cd-timeline-navigation -->
                            </div>
                            <!-- .timeline -->
                            <div class="events-content">
                                <ol>
                                    <li class="selected" data-date="16/01/2015">
                                        <blockquote class="blockquote border-0">
                                            <div class="media">
                                                <div class="media-left">
                                                    <img class="media-object img-xl mr-1" src="/assets/images/portrait/small/avatar-s-5.png" alt="Generic placeholder image">
                                                </div>
                                                <div class="media-body">
                                                    Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                                                </div>
                                            </div>
                                            <footer class="blockquote-footer text-right">Steve Jobs
                                                <cite title="Source Title">Entrepreneur</cite>
                                            </footer>
                                        </blockquote>
                                        <p class="lead mt-2">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at.
                                        </p>
                                    </li>
                                    <li data-date="28/02/2015">
                                        <blockquote class="blockquote border-0">
                                            <div class="media">
                                                <div class="media-left">
                                                    <img class="media-object img-xl mr-1" src="/assets/images/portrait/small/avatar-s-6.png" alt="Generic placeholder image">
                                                </div>
                                                <div class="media-body">
                                                    Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                                                </div>
                                            </div>
                                            <footer class="blockquote-footer text-right">Steve Jobs
                                                <cite title="Source Title">Entrepreneur</cite>
                                            </footer>
                                        </blockquote>
                                        <p class="lead mt-2">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at.
                                        </p>
                                    </li>
                                    <li data-date="20/04/2015">
                                        <blockquote class="blockquote border-0">
                                            <div class="media">
                                                <div class="media-left">
                                                    <img class="media-object img-xl mr-1" src="/assets/images/portrait/small/avatar-s-7.png" alt="Generic placeholder image">
                                                </div>
                                                <div class="media-body">
                                                    Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                                                </div>
                                            </div>
                                            <footer class="blockquote-footer text-right">Steve Jobs
                                                <cite title="Source Title">Entrepreneur</cite>
                                            </footer>
                                        </blockquote>
                                        <p class="lead mt-2">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at.
                                        </p>
                                    </li>
                                    <li data-date="20/05/2015">
                                        <blockquote class="blockquote border-0">
                                            <div class="media">
                                                <div class="media-left">
                                                    <img class="media-object img-xl mr-1" src="/assets/images/portrait/small/avatar-s-8.png" alt="Generic placeholder image">
                                                </div>
                                                <div class="media-body">
                                                    Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                                                </div>
                                            </div>
                                            <footer class="blockquote-footer text-right">Steve Jobs
                                                <cite title="Source Title">Entrepreneur</cite>
                                            </footer>
                                        </blockquote>
                                        <p class="lead mt-2">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at.
                                        </p>
                                    </li>
                                    <li data-date="09/07/2015">
                                        <blockquote class="blockquote border-0">
                                            <div class="media">
                                                <div class="media-left">
                                                    <img class="media-object img-xl mr-1" src="/assets/images/portrait/small/avatar-s-9.png" alt="Generic placeholder image">
                                                </div>
                                                <div class="media-body">
                                                    Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                                                </div>
                                            </div>
                                            <footer class="blockquote-footer text-right">Steve Jobs
                                                <cite title="Source Title">Entrepreneur</cite>
                                            </footer>
                                        </blockquote>
                                        <p class="lead mt-2">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at.
                                        </p>
                                    </li>
                                    <li data-date="30/08/2015">
                                        <blockquote class="blockquote border-0">
                                            <div class="media">
                                                <div class="media-left">
                                                    <img class="media-object img-xl mr-1" src="/assets/images/portrait/small/avatar-s-6.png" alt="Generic placeholder image">
                                                </div>
                                                <div class="media-body">
                                                    Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                                                </div>
                                            </div>
                                            <footer class="blockquote-footer text-right">Steve Jobs
                                                <cite title="Source Title">Entrepreneur</cite>
                                            </footer>
                                        </blockquote>
                                        <p class="lead mt-2">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at.
                                        </p>
                                    </li>
                                    <li data-date="15/09/2015">
                                        <blockquote class="blockquote border-0">
                                            <div class="media">
                                                <div class="media-left">
                                                    <img class="media-object img-xl mr-1" src="/assets/images/portrait/small/avatar-s-7.png" alt="Generic placeholder image">
                                                </div>
                                                <div class="media-body">
                                                    Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                                                </div>
                                            </div>
                                            <footer class="blockquote-footer text-right">Steve Jobs
                                                <cite title="Source Title">Entrepreneur</cite>
                                            </footer>
                                        </blockquote>
                                        <p class="lead mt-2">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at.
                                        </p>
                                    </li>
                                </ol>
                            </div>
                            <!-- .events-content -->
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</div>
<!--/ Basic Horizontal Timeline -->
        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    @include('layouts.dashboard.footer')

    <!-- BEGIN VENDOR JS-->
    <script src="{{ asset('assets/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{ asset('assets/vendors/js/charts/chartist.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/charts/chartist-plugin-tooltip.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/charts/raphael-min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/charts/morris.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/timeline/horizontal-timeline.js') }}"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN MODERN JS-->
    <script src="{{ asset('assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('assets/js/core/app.js') }}"></script>
    <!-- END MODERN JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{ asset('assets/js/scripts/pages/dashboard-ecommerce.js') }}"></script>
    <!-- END PAGE LEVEL JS-->
  </body>
</html>