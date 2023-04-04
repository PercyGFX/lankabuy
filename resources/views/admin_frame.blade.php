<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Lankabuy Admin Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="{{asset('backend/dashboard/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('backend/dashboard/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('backend/dashboard/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('backend/dashboard/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('backend/dashboard/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('backend/dashboard/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('backend/dashboard/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('backend/dashboard/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('backend/dashboard/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('backend/dashboard/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('backend/dashboard/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('backend/dashboard/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">
     <!-- bootbox-->
     <script src="https://raw.githubusercontent.com/makeusabrew/bootbox/gh-pages/bootbox.js"></script>  

    <!-- Main CSS-->
    <link href="{{asset('backend/dashboard/css/theme.css')}}" rel="stylesheet" media="all">

    <script>
    $(document).on("click", "#delete", function(e)){
        e.preventDefault();
        var link=$(this).attr("href");
        bootbox.confirm("Do you want to delete This can not be restored", function(confirmed){
            if (confirmed) {
        window.location.href = link;
            };
        });
    });
    </script>

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="{{URL::to('backend/dashboard/images/icon/logo.png')}}" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="/dashboard">
                            
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.html">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="index2.html">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="index3.html">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.html">Dashboard 4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="{{URL::to('backend/dashboard/images/icon/logo.png')}}" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="/dashboard">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        

                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-chart-bar"></i>Category</a>
                           
                           
                           <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="/manage-category">Manage Category</a>
                                </li>
                                <li>
                                    <a href="/add-category">Add Category</a>
                                </li>
                                
                            </ul> 
                        </li>
<!--
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-chart-bar"></i>Brands</a>
                           
                           
                           <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="index.html">All Brands</a>
                                </li>
                                <li>
                                    <a href="index2.html">Add Brands</a>
                                </li>
                                
                            </ul> 
                        </li>
-->
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-chart-bar"></i>Products</a>
                           
                           
                           <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{URL::to('/manage-products')}}">All Products</a>
                                </li>
                                <li>
                                    <a href="{{URL::to('/add-products')}}">Add Products</a>
                                </li>
                                
                            </ul> 
                        </li>

                        <!-- site settings links -->
                        <li class="active has-sub">
                            <a class="js-arrow" href="/manage-orders">
                                <i class="fas fa-chart-bar"></i>Manage Orders</a>
                           
                           
                        <!--   <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="index.html">Slider</a>
                                </li>
                                <li>
                                    <a href="index2.html">Social Links</a>
                                </li>
                                <li>
                                    <a href="index2.html">Site Name</a>
                                </li>
                                
                            </ul>  -->
                        </li>
                          <!-- site settings links -->

                          <li class="active has-sub">
                                <a class="js-arrow" href="/manage-users">
                                    <i class="fas fa-chart-bar"></i>Manage Users</a>
                                </li>


                        
                    
                       
            
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                
                            </form>
                            <div class="header-button">
                                
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="{{URL::to('backend/dashboard/images/icon/avatar-01.jpg')}}" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">{{Session::get('admin_name')}}</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="{{URL::to('backend/dashboard/images/icon/avatar-01.jpg')}}" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">{{Session::get('admin_name')}}</a>
                                                    </h5>
                                                    <span class="email">{{Session::get('admin_email')}}</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                
                                                
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="/logout">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
            @yield('admin_content')
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

   
    <!-- Jquery JS-->
    <script src="{{asset('backend/dashboard/vendor/jquery-3.2.1.min.js')}}"></script>
    
    <!-- Bootstrap JS-->
    <script src="{{asset('backend/dashboard/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{asset('backend/dashboard/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{asset('backend/dashboard/vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{asset('backend/dashboard/vendor/wow/wow.min.js')}}"></script>
    <script src="{{asset('backend/dashboard/vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{asset('backend/dashboard/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{asset('backend/dashboard/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('backend/dashboard/vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{asset('backend/dashboard/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('backend/dashboard/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('backend/dashboard/vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('backend/dashboard/vendor/select2/select2.min.js')}}">
    </script>

    

    <!-- Main JS-->
    <script src="{{asset('backend/dashboard/js/main.js')}}"></script>

</body>

</html>
<!-- end document-->
