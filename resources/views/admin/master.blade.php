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
    </head>

    <!-- body start -->
    <body class="loading" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
                <div class="navbar-custom"  style="background-color:#fff;">
                    <div class="container-fluid">
                        <ul class="list-unstyled topnav-menu float-end mb-0">

                    
                     <!--        <li class="dropdown d-inline-block d-lg-none">
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
                                    <i class="fe-maximize noti-icon" style="color:black;"></i>
                                </a>
                            </li>
                    
                            <li class="dropdown d-none d-lg-inline-block topbar-dropdown">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="fe-grid noti-icon" style="color:black;"></i>
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
                                    <span class="pro-user-name ms-1" style="color:black;">
                                        <span>{{Auth::user()->role}}</span> 
                                        <i class="mdi mdi-chevron-down"></i> 
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                                    <!-- item-->
                                    <div class="dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Welcome,{{Auth::user()->role}} !</h6>
                                    </div>
                    
                                    <!-- item-->
                                    <a href="{{route('tampilAdminSetting')}}" class="dropdown-item notify-item">
                                        <i class="fe-user"></i> 
                                        <span>My Account</span>
                                    </a>
                                    <a href="{{route('adminSetting')}}" class="dropdown-item notify-item">
                                        <i class="fe-settings"></i> 
                                        <span>Setting</span>
                                    </a>
                                    <a href="{{route('logout')}}" class="dropdown-item notify-item">
                                        <i class="fe-log-out"></i>
                                        <span>Logout</span>
                                    </a>
                    
                                </div>
                            </li>
                    
                            <li class="dropdown notification-list">
                                <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                                    <i class="fe-settings noti-icon" style="color:black;"></i>
                                </a>
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
                                    <span class="ms-2" style="color: #000; 
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
                                <button class="button-menu-mobile waves-effect waves-light">
                                    <i class="fe-menu" style="color: #000;"></i>
                                </button>
                            </li>
                 
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu"  style="background-color:#051D3D">

                <div class="h-100" data-simplebar>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul id="side-menu">

                            <li class="menu-title">Navigation</li>
                
                            <li>
                                <a href="{{route('dashboardAdmin')}}">
                                    <i class="fe-pie-chart"></i>
                                    <span> Dashboards </span>
                                </a>
                            </li>

                            <li class="menu-title mt-2">Apps</li>

                            <li>
                                <a href="#sidebarCourse" data-bs-toggle="collapse">
                                    <i class="fe-book-open"></i>
                                    <span> Course </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarCourse">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{route('indexCourse')}}">Tampil Course</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="#sidebarQuiz" data-bs-toggle="collapse">
                                    <i class="fe-book"></i>
                                    <span> Quiz </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarQuiz">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{route('indexMateri')}}">Manajemen Materi & Quiz</a>
                                        </li>
                                        <li>
                                            <a href="{{route('videoMateri')}}">Tampil Video Materi & Soal Quiz</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#sidebarUser" data-bs-toggle="collapse">
                                    <i class="fe-user"></i>
                                    <span> User </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarUser">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{route('indexKelolaUser')}}">Manage User</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#sidebarPayment" data-bs-toggle="collapse">
                                    <i class="fas fa-comment-dollar"></i>
                                    <span> Payment </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarPayment">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{route('payment')}}">Manage Payment</a>
                                        </li>
                                    </ul>
                                </div>
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
                        @yield('dashboard_admin')
                        @yield('course')
                        @yield('add_course')
                        @yield('editCourse')
                        @yield('manajemen_materi')
                        @yield('videoMateri_soalQuiz')
                        @yield('addVideoMateri_soalQuiz')
                        @yield('editVideoMateri_soalQuiz')
                        @yield('kelolaUser')
                        @yield('payment')
                        @yield('setting')
                        @yield('tampilSetting')
                        
                        
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

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
    
                <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-bordered nav-justified" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link py-2 active" data-bs-toggle="tab" href="#settings-tab" role="tab">
                            <i class="mdi mdi-cog-outline d-block font-22 my-1"></i>
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content pt-0">
                  
                    <div class="tab-pane active" id="settings-tab" role="tabpanel">
                        <h6 class="fw-medium px-3 m-0 py-2 font-13 text-uppercase bg-light">
                            <span class="d-block py-1">Theme Settings</span>
                        </h6>

                        <div class="p-3">

                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Color Scheme</h6>
                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="color-scheme-mode" value="light"
                                    id="light-mode-check" checked />
                                <label class="form-check-label" for="light-mode-check">Light Mode</label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="color-scheme-mode" value="dark"
                                    id="dark-mode-check" />
                                <label class="form-check-label" for="dark-mode-check">Dark Mode</label>
                            </div>

                            <!-- Left Sidebar-->
                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Left Sidebar Color</h6>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftsidebar-color" value="light" id="light-check" />
                                <label class="form-check-label" for="light-check">Light</label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftsidebar-color" value="dark" id="dark-check" checked/>
                                <label class="form-check-label" for="dark-check">Dark</label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftsidebar-color" value="brand" id="brand-check" />
                                <label class="form-check-label" for="brand-check">Brand</label>
                            </div>

                            <div class="form-check form-switch mb-3">
                                <input type="checkbox" class="form-check-input" name="leftsidebar-color" value="gradient" id="gradient-check" />
                                <label class="form-check-label" for="gradient-check">Gradient</label>
                            </div>

                            <!-- size -->
                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Left Sidebar Size</h6>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftsidebar-size" value="default"
                                    id="default-size-check" checked />
                                <label class="form-check-label" for="default-size-check">Default</label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftsidebar-size" value="condensed"
                                    id="condensed-check" />
                                <label class="form-check-label" for="condensed-check">Condensed <small>(Extra Small size)</small></label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftsidebar-size" value="compact"
                                    id="compact-check" />
                                <label class="form-check-label" for="compact-check">Compact <small>(Small size)</small></label>
                            </div>

                            <!-- Topbar -->
                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Topbar</h6>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="topbar-color" value="dark" id="darktopbar-check"
                                    checked />
                                <label class="form-check-label" for="darktopbar-check">Dark</label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="topbar-color" value="light" id="lighttopbar-check" />
                                <label class="form-check-label" for="lighttopbar-check">Light</label>
                            </div>


                            <div class="d-grid mt-4">
                                <button class="btn btn-primary" id="resetBtn">Reset to Default</button>
                            </div>

                        </div>

                    </div>
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->



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