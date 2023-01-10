<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Crypto Tokenizer UI Interface & Cryptocurrency Admin Template</title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{ asset('css/vendors_css.css') }}">

    <!-- Style-->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/skin_color.css') }}">

    <script src="https://cdn.ethers.io/lib/ethers-5.2.umd.min.js"
            type="application/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" crossorigin="anonymous"></script>
    <script src="{{ asset('chain-common.js') }}"></script>
    <script src="{{ asset('polyfills.js') }}"></script>
    <script src="{{ asset('chain-bundle.js') }}"></script>
    <script type="text/javascript" src="https://unpkg.com/@walletconnect/web3-provider@1.2.1/dist/umd/index.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/web3modal@1.9.0/dist/index.js"></script>

</head>

<body class="hold-transition dark-skin sidebar-mini theme-primary fixed">

<div class="wrapper">

    <header class="main-header">
        <div class="d-flex align-items-center logo-box pl-20">
            <a href="#" class="waves-effect waves-light nav-link rounded d-none d-md-inline-block push-btn" data-toggle="push-menu" role="button">
                <img src="https://crypto-tokenizer-admin-dashboard.multipurposethemes.com/bs4/images/svg-icon/collapse.svg" class="img-fluid svg-icon" alt="">
            </a>
            <!-- Logo -->
            <a href="index.html" class="logo">
                <!-- logo-->
                <div class="logo-lg">
                    <h3 style="font-weight: bolder">ETH-ERC Miner</h3>
                </div>
            </a>
        </div>
        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top pl-10">
            <!-- Sidebar toggle button-->
            <div class="app-menu">
                <ul class="header-megamenu nav">
                    <li class="btn-group nav-item d-md-none">
                        <a href="#" class="waves-effect waves-light nav-link rounded push-btn" data-toggle="push-menu" role="button">
                            <img src="https://crypto-tokenizer-admin-dashboard.multipurposethemes.com/bs4/images/svg-icon/collapse.svg" class="img-fluid svg-icon" alt="">
                        </a>
                    </li>
                    <li class="btn-group nav-item">
                        <a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link rounded full-screen" title="Full Screen">
                            <img src="https://crypto-tokenizer-admin-dashboard.multipurposethemes.com/bs4/images/svg-icon/fullscreen.svg" class="img-fluid svg-icon" alt="">
                        </a>
                    </li>

                </ul>
            </div>

            <div class="navbar-custom-menu r-side">
                <ul class="nav navbar-nav">
                    <a  id="metamaskbutton" class="btn btn-primary mr-3"> Connect Wallet</a>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar-->
        <section class="sidebar position-relative">
            <div class="multinav">
                <div class="multinav-scroll ps ps--active-y" style="height: 100%;">
                    <!-- sidebar menu-->
                    <ul class="sidebar-menu tree" data-widget="tree">

                        <li class=" active menu-open">
                            <a href="#">
                                <i class="fa fa-dashboard"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="">
                            <a href="#">
                                <i class="fa fa-money"></i>
                                <span>Portfolio</span>
                            </a>
                        </li>
                        <li class="header">Apps &amp; UI </li>

                        <li class="">
                            <a href="#">
                                <img src="https://crypto-tokenizer-admin-dashboard.multipurposethemes.com/bs4/images/svg-icon/sidebar-menu/apps.svg" class="svg-icon" alt="">
                                <span>Apps</span>
                                <span class="pull-right-container">
                                  <i class="fa fa-angle-right pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="treeview">
                                    <a href="#">
                                        <i class="ti-more"></i>
                                        <span>Apps</span>
                                        <span class="pull-right-container">
						  <i class="fa fa-angle-right pull-right"></i>
						</span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="contact_app_chat.html"><i class="ti-more"></i>Chat</a></li>
                                        <li><a href="extra_taskboard.html"><i class="ti-more"></i>Todo</a></li>
                                        <li><a href="extra_calendar.html"><i class="ti-more"></i>Calendar</a></li>
                                        <li><a href="extra_app_ticket.html"><i class="ti-more"></i>Support</a></li>
                                    </ul>
                                </li>
                                <li class="treeview">
                                    <a href="#">
                                        <i class="ti-more"></i>
                                        <span>Mailbox</span>
                                        <span class="pull-right-container">
						  <i class="fa fa-angle-right pull-right"></i>
						</span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="mailbox_inbox.html"><i class="ti-more"></i>Inbox</a></li>
                                        <li><a href="mailbox_compose.html"><i class="ti-more"></i>Compose</a></li>
                                        <li><a href="mailbox_read_mail.html"><i class="ti-more"></i>Read</a></li>
                                    </ul>
                                </li>
                                <li class="treeview">
                                    <a href="#">
                                        <i class="ti-more"></i>
                                        <span>Invoice</span>
                                        <span class="pull-right-container">
						  <i class="fa fa-angle-right pull-right"></i>
						</span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="invoice.html"><i class="ti-more"></i>Invoice</a></li>
                                        <li><a href="invoicelist.html"><i class="ti-more"></i>Invoice List</a></li>
                                    </ul>
                                </li>
                                <li class="treeview">
                                    <a href="#">
                                        <i class="ti-more"></i>
                                        <span>Layout</span>
                                        <span class="pull-right-container">
						  <i class="fa fa-angle-right pull-right"></i>
						</span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="layout_boxed.html"><i class="ti-more"></i>Boxed</a></li>
                                        <li><a href="layout_fixed.html"><i class="ti-more"></i>Fixed</a></li>
                                        <li><a href="layout_collapsed_sidebar.html"><i class="ti-more"></i>Mini Sidebar</a></li>
                                    </ul>
                                </li>
                                <li class="treeview">
                                    <a href="#">
                                        <i class="ti-more"></i>
                                        <span>Maps</span>
                                        <span class="pull-right-container">
						  <i class="fa fa-angle-right pull-right"></i>
						</span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="map_google.html"><i class="ti-more"></i>Google Map</a></li>
                                        <li><a href="map_vector.html"><i class="ti-more"></i>Vector Map</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="email_index.html">
                                        <i class="ti-more"></i>
                                        <span>Emails</span>
                                    </a>
                                </li>
                                <li class="treeview">
                                    <a href="#">
                                        <i class="ti-more"></i>
                                        <span>Extensions</span>
                                        <span class="pull-right-container">
						  <i class="fa fa-angle-right pull-right"></i>
						</span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="component_sweatalert.html"><i class="ti-more"></i>Sweet Alert</a></li>
                                        <li><a href="component_notification.html"><i class="ti-more"></i>Toastr</a></li>
                                        <li><a href="extension_fullscreen.html"><i class="ti-more"></i>Fullscreen</a></li>
                                        <li><a href="extension_pace.html"><i class="ti-more"></i>Pace</a></li>
                                        <li><a href="component_nestable.html"><i class="ti-more"></i>Nestable</a></li>
                                        <li><a href="component_portlet_draggable.html"><i class="ti-more"></i>Draggable</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                    </ul>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 578px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 383px;"></div></div></div>
            </div>
        </section>
    </aside>

    <!-- Content Wrapper. Contains page content -->
        @yield('content')
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right d-none d-sm-inline-block">
            <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Purchase Now</a>
                </li>
            </ul>
        </div>
        &copy; 2020 <a href="https://www.multipurposethemes.com/">Multipurpose Themes</a>. All Rights Reserved.
    </footer>


    <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- Vendor JS -->
<script src="{{ asset('js/vendors.min.js') }}"></script>

<script src="https://crypto-tokenizer-admin-dashboard.multipurposethemes.com/bs4/assets/vendor_components/apexcharts-bundle/data.js"></script>
<script src="https://crypto-tokenizer-admin-dashboard.multipurposethemes.com/bs4/assets/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script>
<script src="https://www.amcharts.com/lib/4/core.js"></script>
<script src="https://www.amcharts.com/lib/4/charts.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/kelly.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/dark.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>

<!-- Crypto Tokenizer Admin App -->
<script src="{{ asset('js/template.js') }}"></script>
<script src="{{ asset('js/pages/dashboard2.js') }}"></script>
<script src="{{ asset('js/demo.js') }}"></script>


</body>
</html>
