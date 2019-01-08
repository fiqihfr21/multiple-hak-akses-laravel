
<!DOCTYPE html>
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title>Sistem Inventori</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{{asset('css/datatables.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/datatables.bootstrap.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/bootstrap-datepicker3.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{{asset('css/components.min.css')}}" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{asset('css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="{{asset('css/layout.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/darkblue.min.css')}}" rel="stylesheet" type="text/css" id="style_color" />
        <link href="{{asset('css/custom.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- DASHBOARD STYLES -->
        <link href="{{asset('css/jqvmap.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/fullcalendar.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> 
    </head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
        <div class="page-wrapper">
            <!-- BEGIN HEADER -->
            <div class="page-header navbar navbar-fixed-top">
                <!-- BEGIN HEADER INNER -->
                <div class="page-header-inner ">
                    <!-- BEGIN LOGO -->
                    <div class="page-logo">
                        <a href="#" style="padding:10px;font-size: 20px;color:#fff;">Sistem Inventori</a>
                        <!-- <div class="menu-toggler sidebar-toggler">
                            <span></span>
                        </div> -->
                    </div>
                    <!-- END LOGO -->
                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                    <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                        <span></span>
                    </a>
                    <!-- END RESPONSIVE MENU TOGGLER -->
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right"><li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <i class="icon-bell"></i>
                                    <span class="badge badge-default"> 1 </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="external">
                                        <h3><span class="bold">1 </span> Notifications</h3>
                                    </li>
                                    <li>
                                        <ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">just now</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-success">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </span> New user registered. </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            
                            <!-- END TODO DROPDOWN -->
                            <!-- BEGIN USER LOGIN DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown dropdown-user">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <img alt="" class="img-circle" src="{{asset('img/avatar3_small.jpg')}}" />
                                    <span class="username username-hide-on-mobile"> {{ Auth::user()->name }} </span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                        <a href="profil.html">
                                            <i class="icon-user"></i> My Profile </a>
                                    </li>
                    
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            <i class="icon-key"> </i> Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            
                            <!-- END QUICK SIDEBAR TOGGLER -->
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
                <!-- END HEADER INNER -->
            </div>
            <!-- END HEADER -->
            <!-- BEGIN HEADER & CONTENT DIVIDER -->
            <div class="clearfix"> </div>
            <!-- END HEADER & CONTENT DIVIDER -->
            <!-- BEGIN CONTAINER -->
            <div class="page-container">
                <!-- BEGIN SIDEBAR -->
                <div class="page-sidebar-wrapper">
                    <div class="page-sidebar navbar-collapse collapse">
                        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                            <li class="dropdown dropdown-user start">
                                <center><img alt="" class="img-circle" style="margin-right:10px;" width="70px;" src="{{asset('img/avatar3_small.jpg')}}" /></center>
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">  
                                    <center><span class="username username-hide-on-mobile" style="font-size:17px;"> {{ Auth::user()->name }} </span>
                                    <i class="fa fa-angle-down" style="font-size:17px;"></i></center>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                        <a href="profil.html">
                                            <i class="icon-user"></i> My Profile </a>
                                    </li>
                    
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            <i class="icon-key"> </i> Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            <li class="sidebar-toggler-wrapper hide">
                                <div class="sidebar-toggler">
                                    <span></span>
                                </div>
                            </li>
                            <li class="heading">
                                <h3 class="uppercase">Features</h3>
                            </li>
                            @if(Auth::user()->hasRole('superadmin'))
                            <li class="nav-item start ">
                                <a href="{{url('/')}}" class="nav-link nav-toggle">
                                    <i class="icon-home"></i>
                                    <span class="title">Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="{{url('master/user')}}" class="nav-link nav-toggle">
                                    <i class="icon-user"></i>
                                    <span class="title">Kelola User</span>
                                </a>
                            </li>
                            @endif
                            @if(Auth::user()->hasRole('superadmin') || Auth::user()->hasRole('gudang'))
                            <li class="nav-item  ">
                                <a href="gudang.html" class="nav-link nav-toggle">
                                    <i class="icon-tag"></i>
                                    <span class="title">Barang</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                    <a href="gudang.html" class="nav-link nav-toggle">
                                        <i class="icon-layers"></i>
                                        <span class="title">Stok</span>
                                    </a>
                                </li>
                            <li class="nav-item  ">
                                <a href="supplier.html" class="nav-link nav-toggle">
                                    <i class="icon-grid"></i>
                                    <span class="title">Supplier</span>
                                </a>
                            </li>
                            @endif
                            @if(Auth::user()->hasRole('superadmin') || Auth::user()->hasRole('penjualan'))
                            <li class="nav-item ">
                                <a href="penjualan.html" class="nav-link nav-toggle">
                                    <i class="icon-basket-loaded"></i>
                                    <span class="title">Penjualan</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="keuangan.html" class="nav-link nav-toggle">
                                    <i class="icon-calculator"></i>
                                    <span class="title">Keuangan</span>
                                </a>
                            </li>
                            @endif
                            <li class="nav-item  ">
                                <a href="customer.html" class="nav-link nav-toggle">
                                     <i class="icon-users"></i>
                                     <span class="title">Customer</span>
                                </a>
                            </li>
                        </ul>
                        <!-- END SIDEBAR MENU -->
                        <!-- END SIDEBAR MENU -->
                    </div>
                    <!-- END SIDEBAR -->
                </div>
                <!-- END SIDEBAR -->

                <!-- CONTENT -->
                @yield('content')
                   
            </div>
            <!-- END CONTAINER -->
            <!-- BEGIN FOOTER -->
            <div class="page-footer">
                <div class="page-footer-inner"> 2019 &copy; All Right Reserved
                </div>
                <div class="scroll-to-top">
                    <i class="icon-arrow-up"></i>
                </div>
            </div>
            <!-- END FOOTER -->
        </div>
        
        <!-- BEGIN CORE PLUGINS -->
        <script src="{{asset('js/jquery.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/js.cookie.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/jquery.blockui.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="{{asset('js/datatable.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/datatables.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/datatables.bootstrap.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/bootstrap-datepicker.min.js')}}" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="{{asset('js/app.min.js')}}" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="{{asset('js/table-datatables-buttons.min.js')}}" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- DASHBOARD SCRIPTS -->
        <script src="{{asset('js/dashboard.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/jquery.easypiechart.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/moment.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/jquery.sparkline.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/jquery.flot.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/jquery.flot.resize.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/jquery.flot.categories.min.js')}}" type="text/javascript"></script>
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="{{asset('js/layout.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/demo.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/quick-sidebar.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/quick-nav.min.js')}}" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>