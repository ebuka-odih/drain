<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/favicon.ico">

    <title>Crypto Tokenizer UI Interface & Cryptocurrency Admin Template</title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{ asset('css/vendors_css.css') }}">

    <!-- Style-->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/skin_color.css') }}">

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
                    <span class="light-logo"><img src="https://crypto-tokenizer-admin-dashboard.multipurposethemes.com/bs4/images/logo-dark-text.png" alt="logo"></span>
                    <span class="dark-logo"><img src="https://crypto-tokenizer-admin-dashboard.multipurposethemes.com/bs4/images/logo-light-text.png" alt="logo"></span>
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
                    <li class="btn-group d-md-inline-flex d-none">
                        <div class="search-bx ml-10">
                            <form>
                                <div class="input-group">
                                    <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                        <button class="btn" type="submit" id="button-addon2"><img src="https://crypto-tokenizer-admin-dashboard.multipurposethemes.com/bs4/images/svg-icon/search.svg" class="img-fluid" alt="search"></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="navbar-custom-menu r-side">
                <ul class="nav navbar-nav">
                    <!-- Notifications -->
                    <li class="dropdown notifications-menu">
                        <a href="#" class="waves-effect waves-light dropdown-toggle" data-toggle="dropdown" title="Notifications">
                            <img src="https://crypto-tokenizer-admin-dashboard.multipurposethemes.com/bs4/images/svg-icon/notifications.svg" class="img-fluid svg-icon" alt="">
                        </a>
                        <ul class="dropdown-menu animated bounceIn">

                            <li class="header">
                                <div class="p-20">
                                    <div class="flexbox">
                                        <div>
                                            <h4 class="mb-0 mt-0">Notifications</h4>
                                        </div>
                                        <div>
                                            <a href="#" class="text-danger">Clear All</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <!-- inner menu: contains the actual data -->
                                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 250px;"><ul class="menu sm-scrol" style="overflow: hidden; width: auto; height: 250px;">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users text-info"></i> Curabitur id eros quis nunc suscipit blandit.
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-warning text-warning"></i> Duis malesuada justo eu sapien elementum, in semper diam posuere.
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users text-danger"></i> Donec at nisi sit amet tortor commodo porttitor pretium a erat.
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-shopping-cart text-success"></i> In gravida mauris et nisi
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-user text-danger"></i> Praesent eu lacus in libero dictum fermentum.
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-user text-primary"></i> Nunc fringilla lorem
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-user text-success"></i> Nullam euismod dolor ut quam interdum, at scelerisque ipsum imperdiet.
                                            </a>
                                        </li>
                                    </ul><div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                            </li>
                            <li class="footer">
                                <a href="#">View all</a>
                            </li>
                        </ul>
                    </li>

                    <!-- User Account-->
                    <li class="dropdown user user-menu">
                        <a href="#" class="waves-effect waves-light dropdown-toggle" data-toggle="dropdown" title="User">
                            <img src="https://crypto-tokenizer-admin-dashboard.multipurposethemes.com/bs4/images/svg-icon/user.svg" class="rounded svg-icon" alt="">
                        </a>
                        <ul class="dropdown-menu animated flipInX">
                            <!-- User image -->
                            <li class="user-header bg-img" style="background-image: url(https://crypto-tokenizer-admin-dashboard.multipurposethemes.com/bs4/images/user-info.jpg)" data-overlay="3">
                                <div class="flexbox align-self-center">
                                    <img src="https://crypto-tokenizer-admin-dashboard.multipurposethemes.com/bs4/images/avatar/7.jpg" class="float-left rounded-circle" alt="User Image">
                                    <h4 class="user-name align-self-center">
                                        <span>Samuel Brus</span>
                                        <small>samuel@gmail.com</small>
                                    </h4>
                                </div>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-person"></i> My Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-bag"></i> My Balance</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-email-unread"></i> Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-settings"></i> Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ion-log-out"></i> Logout</a>
                                <div class="dropdown-divider"></div>
                                <div class="p-10"><a href="javascript:void(0)" class="btn btn-sm btn-rounded btn-success">View Profile</a></div>
                            </li>
                        </ul>
                    </li>

                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href="#" data-toggle="control-sidebar" title="Setting" class="waves-effect waves-light">
                            <img src="https://crypto-tokenizer-admin-dashboard.multipurposethemes.com/bs4/images/svg-icon/settings.svg" class="img-fluid svg-icon" alt="">
                        </a>
                    </li>

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

                        <li class="treeview">
                            <a href="#">
                                <img src="https://crypto-tokenizer-admin-dashboard.multipurposethemes.com/bs4/images/svg-icon/sidebar-menu/transactions.svg" class="svg-icon" alt="">
                                <span>Portfolio</span>
                                <span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="treeview">
                                    <a href="#">
                                        <i class="ti-more"></i>
                                        <span>Charts</span>
                                        <span class="pull-right-container">
						  <i class="fa fa-angle-right pull-right"></i>
						</span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="charts_chartjs.html"><i class="ti-more"></i>ChartJS</a></li>
                                        <li><a href="charts_flot.html"><i class="ti-more"></i>Flot</a></li>
                                        <li><a href="charts_inline.html"><i class="ti-more"></i>Inline charts</a></li>
                                        <li><a href="charts_morris.html"><i class="ti-more"></i>Morris</a></li>
                                        <li><a href="charts_peity.html"><i class="ti-more"></i>Peity</a></li>
                                        <li><a href="charts_chartist.html"><i class="ti-more"></i>Chartist</a></li>
                                        <li class="treeview">
                                            <a href="#">
                                                <i class="ti-more"></i>
                                                <span>C3 Charts</span>
                                                <span class="pull-right-container">
							  <i class="fa fa-angle-right pull-right"></i>
							</span>
                                            </a>
                                            <ul class="treeview-menu">
                                                <li><a href="charts_c3_axis.html"><i class="ti-more"></i>Axis Chart</a></li>
                                                <li><a href="charts_c3_bar.html"><i class="ti-more"></i>Bar Chart</a></li>
                                                <li><a href="charts_c3_data.html"><i class="ti-more"></i>Data Chart</a></li>
                                                <li><a href="charts_c3_line.html"><i class="ti-more"></i>Line Chart</a></li>
                                            </ul>
                                        </li>
                                        <li class="treeview">
                                            <a href="#">
                                                <i class="ti-more"></i>
                                                <span>Echarts</span>
                                                <span class="pull-right-container">
							  <i class="fa fa-angle-right pull-right"></i>
							</span>
                                            </a>
                                            <ul class="treeview-menu">
                                                <li><a href="charts_echarts_basic.html"><i class="ti-more"></i>Basic Charts</a></li>
                                                <li><a href="charts_echarts_bar.html"><i class="ti-more"></i>Bar Chart</a></li>
                                                <li><a href="charts_echarts_pie_doughnut.html"><i class="ti-more"></i>Pie &amp; Doughnut Chart</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li class="treeview">
                                    <a href="#">
                                        <i class="ti-more"></i>
                                        <span>Analyses</span>
                                        <span class="pull-right-container">
						  <i class="fa fa-angle-right pull-right"></i>
						</span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="reports_transactions.html"><i class="ti-more"></i>Transactions</a></li>
                                        <li><a href="reports_top_gainers_losers.html"><i class="ti-more"></i>Gainers/Losers</a></li>
                                        <li><a href="reports_market_capitalizations.html"><i class="ti-more"></i>Market</a></li>
                                        <li><a href="reports_crypto_stats.html"><i class="ti-more"></i>Stats</a></li>
                                    </ul>
                                </li>
                                <li class="treeview">
                                    <a href="#">
                                        <i class="ti-more"></i>
                                        <span>ICO</span>
                                        <span class="pull-right-container">
						  <i class="fa fa-angle-right pull-right"></i>
						</span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="ico_distribution_countdown.html"><i class="ti-more"></i>Countdown</a></li>
                                        <li><a href="ico_roadmap_timeline.html"><i class="ti-more"></i>Timeline</a></li>
                                        <li><a href="ico_progress.html"><i class="ti-more"></i>Progress</a></li>
                                        <li><a href="ico_details.html"><i class="ti-more"></i>Details</a></li>
                                        <li><a href="ico_listing.html"><i class="ti-more"></i>Listing</a></li>
                                        <li><a href="ico_filter.html"><i class="ti-more"></i>ICO Filters</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="currency_exchange.html">
                                        <i class="ti-more"></i>
                                        <span>Exchange</span>
                                    </a>
                                </li>
                                <li class="treeview">
                                    <a href="#">
                                        <i class="ti-more"></i>
                                        <span>Associates</span>
                                        <span class="pull-right-container">
						  <i class="fa fa-angle-right pull-right"></i>
						</span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="members.html"><i class="ti-more"></i>Grid</a></li>
                                        <li><a href="members_list.html"><i class="ti-more"></i>List</a></li>
                                        <li><a href="member_profile.html"><i class="ti-more"></i>Profile</a></li>
                                    </ul>
                                </li>
                                <li class="treeview">
                                    <a href="#">
                                        <i class="ti-more"></i>
                                        <span>Tickers</span>
                                        <span class="pull-right-container">
						  <i class="fa fa-angle-right pull-right"></i>
						</span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="tickers.html"><i class="ti-more"></i>Ticker</a></li>
                                        <li><a href="tickers_live_pricing.html"><i class="ti-more"></i>Live Prices</a></li>
                                    </ul>
                                </li>
                                <li class="treeview">
                                    <a href="#">
                                        <i class="ti-more"></i>
                                        <span>Transactions</span>
                                        <span class="pull-right-container">
						  <i class="fa fa-angle-right pull-right"></i>
						</span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="transactions_tables.html"><i class="ti-more"></i>Tables</a></li>
                                        <li><a href="transaction_search.html"><i class="ti-more"></i>Search</a></li>
                                        <li><a href="transaction_details.html"><i class="ti-more"></i>Details</a></li>
                                        <li><a href="transactions_counter.html"><i class="ti-more"></i>Counter</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="header">Apps &amp; UI </li>

                        <li class="treeview">
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
                        <li class="treeview">
                            <a href="#">
                                <img src="https://crypto-tokenizer-admin-dashboard.multipurposethemes.com/bs4/images/svg-icon/sidebar-menu/uielements.svg" class="svg-icon" alt="">
                                <span>UI Elements</span>
                                <span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="treeview">
                                    <a href="#">
                                        <i class="ti-more"></i>
                                        <span>General UI</span>
                                        <span class="pull-right-container">
						  <i class="fa fa-angle-right pull-right"></i>
						</span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li class="treeview">
                                            <a href="#">
                                                <i class="ti-more"></i>
                                                <span>User Interface</span>
                                                <span class="pull-right-container">
							  <i class="fa fa-angle-right pull-right"></i>
							</span>
                                            </a>
                                            <ul class="treeview-menu">
                                                <li><a href="ui_typography.html"><i class="ti-more"></i>Typography</a></li>
                                                <li><a href="ui_grid.html"><i class="ti-more"></i>Grid</a></li>
                                                <li><a href="ui_tab.html"><i class="ti-more"></i>Tabs</a></li>
                                                <li><a href="ui_timeline.html"><i class="ti-more"></i>Timeline</a></li>
                                                <li><a href="ui_timeline_horizontal.html"><i class="ti-more"></i>Horizontal</a></li>
                                            </ul>
                                        </li>
                                        <li class="treeview">
                                            <a href="#">
                                                <i class="ti-more"></i>
                                                <span>Component</span>
                                                <span class="pull-right-container">
							  <i class="fa fa-angle-right pull-right"></i>
							</span>
                                            </a>
                                            <ul class="treeview-menu">
                                                <li><a href="component_bootstrap_switch.html"><i class="ti-more"></i>Bootstrap Switch</a></li>
                                                <li><a href="component_date_paginator.html"><i class="ti-more"></i>Date Paginator</a></li>
                                                <li><a href="component_media_advanced.html"><i class="ti-more"></i>Advanced Medias</a></li>
                                                <li><a href="component_modals.html"><i class="ti-more"></i>Modals</a></li>
                                                <li><a href="component_rangeslider.html"><i class="ti-more"></i>Range Slider</a></li>
                                                <li><a href="component_rating.html"><i class="ti-more"></i>Ratings</a></li>
                                                <li><a href="component_animations.html"><i class="ti-more"></i>Animations</a></li>
                                            </ul>
                                        </li>
                                        <li class="treeview">
                                            <a href="#">
                                                <i class="ti-more"></i>
                                                <span>Cards</span>
                                                <span class="pull-right-container">
							  <i class="fa fa-angle-right pull-right"></i>
							</span>
                                            </a>
                                            <ul class="treeview-menu">
                                                <li><a href="box_advanced.html"><i class="ti-more"></i>Advanced Card</a></li>
                                                <li><a href="box_basic.html"><i class="ti-more"></i>Basic Card</a></li>
                                                <li><a href="box_color.html"><i class="ti-more"></i>Card Color</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="ui_color_utilities.html">
                                                <i class="ti-more"></i>
                                                <span>Color</span>
                                            </a>
                                        </li>
                                        <li class="treeview">
                                            <a href="#">
                                                <i class="ti-more"></i>
                                                <span>Icons</span>
                                                <span class="pull-right-container">
							  <i class="fa fa-angle-right pull-right"></i>
							</span>
                                            </a>
                                            <ul class="treeview-menu">
                                                <li><a href="icons_fontawesome.html"><i class="ti-more"></i>Font Awesome</a></li>
                                                <li><a href="icons_glyphicons.html"><i class="ti-more"></i>Glyphicons</a></li>
                                                <li><a href="icons_material.html"><i class="ti-more"></i>Material Icons</a></li>
                                                <li><a href="icons_themify.html"><i class="ti-more"></i>Themify Icons</a></li>
                                                <li><a href="icons_simpleline.html"><i class="ti-more"></i>Simple Line Icons</a></li>
                                                <li><a href="icons_cryptocoins.html"><i class="ti-more"></i>Cryptocoins Icons</a></li>
                                                <li><a href="icons_flag.html"><i class="ti-more"></i>Flag Icons</a></li>
                                                <li><a href="icons_weather.html"><i class="ti-more"></i>Weather Icons</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="treeview">
                                    <a href="#">
                                        <i class="ti-more"></i>
                                        <span>Advanced UI</span>
                                        <span class="pull-right-container">
						  <i class="fa fa-angle-right pull-right"></i>
						</span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="ui_badges.html"><i class="ti-more"></i>Badges</a></li>
                                        <li><a href="ui_border_utilities.html"><i class="ti-more"></i>Border</a></li>
                                        <li><a href="ui_buttons.html"><i class="ti-more"></i>Buttons</a></li>
                                        <li><a href="ui_dropdown.html"><i class="ti-more"></i>Dropdown</a></li>
                                        <li><a href="ui_dropdown_grid.html"><i class="ti-more"></i>Dropdown Grid</a></li>
                                        <li><a href="ui_progress_bars.html"><i class="ti-more"></i>Progress Bars</a></li>
                                        <li><a href="ui_ribbons.html"><i class="ti-more"></i>Ribbons</a></li>
                                        <li><a href="ui_sliders.html"><i class="ti-more"></i>Sliders</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <img src="https://crypto-tokenizer-admin-dashboard.multipurposethemes.com/bs4/images/svg-icon/sidebar-menu/forms1.svg" class="svg-icon" alt="">
                                <span>Forms Elements</span>
                                <span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="forms_advanced.html"><i class="ti-more"></i>Form Elements</a></li>
                                <li><a href="forms_mask.html"><i class="ti-more"></i>Formatter</a></li>
                                <li><a href="forms_xeditable.html"><i class="ti-more"></i>Xeditable Editor</a></li>
                                <li><a href="forms_code_editor.html"><i class="ti-more"></i>Code Editor</a></li>
                                <li><a href="forms_editors.html"><i class="ti-more"></i>Editor</a></li>
                                <li><a href="forms_dropzone.html"><i class="ti-more"></i>Dropzone</a></li>
                                <li><a href="forms_editor_markdown.html"><i class="ti-more"></i>Markdown</a></li>
                                <li><a href="forms_general.html"><i class="ti-more"></i>Layout</a></li>
                                <li><a href="forms_wizard.html"><i class="ti-more"></i>Wizard</a></li>
                                <li><a href="forms_validation.html"><i class="ti-more"></i>Validation</a></li>
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

<script src="https://crypto-tokenizer-admin-dashboard.multipurposethemes.com/bs4/main-dark/assets/vendor_components/apexcharts-bundle/irregular-data-series.js"></script>
<script src="https://crypto-tokenizer-admin-dashboard.multipurposethemes.com/bs4/main-dark/assets/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script>
<script src="https://crypto-tokenizer-admin-dashboard.multipurposethemes.com/bs4/main-dark/assets/vendor_components/Web-Ticker-master/jquery.webticker.min.js"></script>
<script src="https://crypto-tokenizer-admin-dashboard.multipurposethemes.com/bs4/main-dark/assets/vendor_components/datatable/datatables.min.js"></script>
<script src="https://www.amcharts.com/lib/4/core.js"></script>
<script src="https://www.amcharts.com/lib/4/charts.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/dark.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>

<!-- Crypto Tokenizer Admin App -->
<script src="{{ asset('js/template.js') }}"></script>
<script src="{{ asset('js/pages/dashboard2.js') }}"></script>
<script src="{{ asset('js/demo.js') }}"></script>


</body>
</html>
