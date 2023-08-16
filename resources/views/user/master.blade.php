<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8" />
    <title>Zalepik | Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('../assets/images/fav.ico')}}">
    <!-- Bootstrap Tables css -->
    <link href="{{asset('../assets/libs/bootstrap-table/bootstrap-table.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Plugins css -->
    <link href="{{asset('../assets/libs/flatpickr/flatpickr.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('../assets/libs/selectize/css/selectize.bootstrap3.css')}}" rel="stylesheet" type="text/css" />
    
    <!-- App css -->
    <link href="{{asset('../assets/css/config/default/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
    <link href="{{asset('../assets/css/config/default/app.min.css')}}" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

    <link href="{{asset('../assets/css/config/default/bootstrap-dark.min.css')}}" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
    <link href="{{asset('')}}../assets/css/config/default/app-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

    <!-- icons -->
    <link href="{{asset('../assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,100&family=Roboto&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<!-- body start -->
<body class="loading" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>

    <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            <div class="navbar-custom" style="background-color:#FFF;">
                    <div class="container-fluid">
                        <ul class="list-unstyled topnav-menu float-end mb-0">

                            <li class="d-none d-lg-block">
                                <form class="app-search">
                                    <div class="app-search-box dropdown">
                                        <div class="input-group">
                                            <input type="search" class="form-control" id="top-search" style="border:1px solid #437BFF;">
                                            <button class="btn input-group-text" type="submit" style="background-color:#437BFF ;">
                                                <i class="fe-search" style="color: #fff;"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </li>
                    
                           <!--  <li class="dropdown d-inline-block d-lg-none">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="fe-search noti-icon"></i>
                                </a>
                                <div class="dropdown-menu dropdown-lg dropdown-menu-end p-0">
                                    <form class="p-3">
                                        <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                    </form>
                                </div>
                            </li> -->
                    
                            <li class="dropdown d-none d-lg-inline-block">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="fullscreen" href="#">
                                    <i class="fe-maximize noti-icon" style="color:#000;"></i>
                                </a>
                            </li>
                    
                            <li class="dropdown d-none d-lg-inline-block topbar-dropdown">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="fe-grid noti-icon" style="color:#000;"></i>
                                </a>
                                <div class="dropdown-menu dropdown-lg dropdown-menu-end">
                    
                                    <div class="p-lg-1">
                                        <div class="row g-0">
                                             <div class="col">
                                                <a class="dropdown-icon-item" href="#">
                                                    <img src="{{asset('../assets/images/brands/bitbucket.png')}}" alt="bitbucket">
                                                    <span>LinkedIn</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#">
                                                    <img src="{{asset('../assets/images/brands/github.png')}}" alt="Github">
                                                    <span>GitHub</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#">
                                                    <img src="{{asset('../assets/images/brands/dribbble.png')}}" alt="dribbble">
                                                    <span>Dribbble</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                    
                                </div>
                            </li>
                            
                    
                            <li class="dropdown notification-list topbar-dropdown">
                                <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="{{asset('../assets/images/users/user-7.jpg')}}" alt="user-image" class="rounded-circle">
                                    <span class="pro-user-name ms-1" style="color:#000;">
                                        <span>{{Auth::user()->role}}</span> 
                                        <i class="mdi mdi-chevron-down"></i> 
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                                    <!-- item-->
                                    <div class="dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">{{Auth::user()->role}} !</h6>
                                    </div>
                    
                                    <!-- item-->
                                    <a href="{{route('tampilSetting')}}" class="dropdown-item notify-item">
                                        <i class="fe-user"></i> 
                                        <span>My Account</span>
                                    </a>
                                    <a href="{{route('indexSetting')}}" class="dropdown-item notify-item">
                                        <i class="fe-settings"></i> 
                                        <span>Setting</span>
                                    </a>
                                    <a href="{{route('logout')}}" class="dropdown-item notify-item">
                                        <i class="fe-log-out"></i>
                                        <span>Logout</span>
                                    </a>
                    
                                </div>
                            </li>
                    
                        </ul>
                    
                        <!-- LOGO -->
                        <div class="logo-box">
                            <a href="" class="logo logo-light text-center">
                                <span class="logo-sm">
                                    <img src="{{asset('assets/images/zalepik.png')}}" alt="" width="25">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{asset('assets/images/zalepik.png')}}" alt="" width="50">
                                    <span class="ms-2 text-dark" style="color: #FFF; 
                                        font-family: Roboto; 
                                        font-size: 19px; 
                                        font-weight: 900; 
                                        line-height: 20px; 
                                        letter-spacing: 0.4px; 
                                        text-transform: uppercase;">
                                        ZALEPIK
                                    </span>
                                </span>
                            </a>
                        </div>
                    
                        <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                            <li>
                                <button class="button-menu-mobile waves-effect waves-light" style="color: #000;">
                                    <i class="fe-menu"></i>
                                </button>
                            </li>
                 
                        </ul>
                        <div class="clearfix"></div>
                    </div>
            </div>
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu" style="background-color:#437BFF;">

                <div class="h-100" data-simplebar>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul id="side-menu">

                            <li class="menu-title text-light">Navigation</li>
                
                            <li>
                                <a href="{{route('indexDashboardUser')}}">
                                    <i class="fe-pie-chart" style="color:#fff;"></i>
                                    <span class="text-light"> Dashboards </span>
                                </a>
                            </li>

                            <li class="menu-title mt-2 text-light">Apps</li>

                         <!--    <li>
                                <a href="#">
                                    <i class="fe-book-open"></i>
                                    <span> Course </span>

                                </a>
                               
                            </li> -->

                            <li>
                                <a href="{{route('indexReward')}}">
                                     <i class="fas fa-medal" style="color:#fff;"></i>
                                    <span class="text-light"> Reward </span>
                                </a>
                            </li>

                            <li>
                                <a href="{{route('indexPaymentUser')}}">
                                    <i class="fas fa-comment-dollar" style="color:#fff;"></i>
                                    <span class="text-light"> Payment </span>
                                </a>
                            </li>

                        </ul>


                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    <!-- Start Content-->
                    <div class="container-fluid">
                       @yield('dashboard')
                       @yield('course')
                       @yield('setting')
                       @yield('tampilSetting')
                       @yield('payment')
                       @yield('reward')
                        
                        
                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script>document.write(new Date().getFullYear())</script> &copy; Zalepik <a href="">Studio</a> 
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- Vendor js -->
    <script src="{{asset('../assets/js/vendor.min.js')}}"></script>

    <!-- Plugins js-->
    <script src="{{asset('../assets/libs/flatpickr/flatpickr.min.js')}}"></script>
    <script src="{{asset('../assets/libs/apexcharts/apexcharts.min.js')}}"></script>

    <script src="{{asset('../assets/libs/selectize/js/standalone/selectize.min.js')}}"></script>

    <!-- Dashboar 1 init js-->
    <script src="{{asset('../assets/js/pages/dashboard-1.init.js')}}"></script>

    <!-- App js-->
    <script src="{{asset('../assets/js/app.min.js')}}"></script>
     <!-- Bootstrap Tables js -->
    <script src="{{asset('../assets/libs/bootstrap-table/bootstrap-table.min.js')}}"></script>

    <!-- Init js -->
    <script src="{{asset('../assets/js/pages/bootstrap-tables.init.js')}}"></script>
        
</body>
</html>