@php
use App\Http\Controllers\admin\AdminsController;
if(!(AdminsController::checkLogged(0))){
header("Location: /admin/login");
die();
}
$admin=AdminsController::getAdmin();                      
@endphp
<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <!-- Required meta tags-->         
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
        <meta name="description" content="This is an Web Based Event Management System"> 
        <meta name="author" content="TeamTwoSquared"> 
        <meta name="keywords" content="ems event management template"> 
        <!-- CSRF Token -->         
        <meta name="csrf-token" content="{{ csrf_token() }}"> 
        <!-- Title Page-->         
        <title>{{ config('app.name', 'Laravel') }}</title>         
        <!-- Fontfaces CSS-->         
        <link href="/admin/css/font-face.css" rel="stylesheet" media="all"> 
        <link href="/admin/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all"> 
        <link href="/admin/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all"> 
        <link href="/admin/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all"> 
        <!-- Bootstrap core CSS -->         
        <link href="/admin/bootstrap/css/bootstrap.css" rel="stylesheet"> 
        <!-- Custom styles for this template -->         
        <link href="/admin/style.css" rel="stylesheet"> 
        <!-- Bootstrap CSS-->         
        <link href="/admin/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all"> 
        <!-- Vendor CSS-->         
        <link href="/admin/vendor/animsition/animsition.min.css" rel="stylesheet" media="all"> 
        <link href="/admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all"> 
        <link href="/admin/vendor/wow/animate.css" rel="stylesheet" media="all"> 
        <link href="/admin/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all"> 
        <link href="/admin/vendor/slick/slick.css" rel="stylesheet" media="all"> 
        <link href="/admin/vendor/select2/select2.min.css" rel="stylesheet" media="all"> 
        <link href="/admin/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all"> 
        <!-- Main CSS-->         
        <link href="/admin/css/theme.css" rel="stylesheet" media="all"> 
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}"> 
        <link rel="stylesheet" href="/admin/components/pg.blocks/css/blocks.css"> 
        <link rel="stylesheet" href="/admin/components/pg.blocks/css/plugins.css"> 
        <!-- <link rel="stylesheet" href="/admin/components/pg.blocks/css/style-library-1.css"> -->     
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700"> 
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic"> 
        <!-- External Styles -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
        <!-- External Scripts -->
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    </head>     
    <body class="animsition bg-ems-admin border-ems-admin"> 
        <div class="page-wrapper bg-ems-admin border-ems-admin"> 
            <!-- HEADER MOBILE-->             
            <header class="header-mobile d-block d-lg-none border-ems-admin bg-ems-admin"> 
                <div class="header-mobile__bar"> 
                    <div class="container-fluid"> 
                        <div class="header-mobile-inner"> 
                            <a class="logo" href="/admin/dash"> 
                                <img src="/admin/images/icon/logo.png" alt="EMSAdmin"/> 
                            </a>                             
                            <button class="hamburger hamburger--slider bg-ems-admin border-ems-admin" type="button"> 
                                <span class="hamburger-box"> <span class="hamburger-inner"></span> </span> 
                            </button>                             
                        </div>                         
                    </div>                     
                </div>                 
                <nav class="navbar-mobile"> 
                    <div class="container-fluid"> 
                        <ul class="navbar-mobile__list list-unstyled bg-ems-admin border-ems-admin"> 
                            <li> 
                                <a class="js-arrow" href="/admin/dash"> <i class="fas fa-tachometer-alt"></i>Site Stats</a> 
                            </li>                             
                            <li class="has-sub"> 
                                <a class="js-arrow" href="#"><i class="far fa-calendar-alt"></i>Manage Events</a> 
                                <ul class="navbar-mobile-sub__list list-unstyled js-sub-list bg-ems-admin"> 
                                    <li> 
                                        <a href="/admin/catergory">Catergories</a> 
                                    </li>                                     
                                    <li> 
                                        <a href="/admin/template">Templates</a> 
                                    </li>                                     
                                    <li> 
                                        <a href="/admin/task">Tasks</a> 
                                    </li>                                     
                                </ul>                                 
                            </li>                             
                            <li> 
                                <a href="/admin/svp"> <i class="fas fa-user-circle"></i>Manage Service Providers</a> 
                            </li>                             
                            <li> 
                                <a href="/admin/client"> <i class="far fa-user-circle"></i>Manage Clients</a> 
                            </li>                             
                            <li> 
                                <a href="/admin/payment"> <i class="fas fa-money-bill-alt"></i>Manage Payments</a> 
                            </li>                             
                            <li> 
                                <a href="/admin/ad"> <i class="fab fa-adversal"></i></i>Manage Ads</a> 
                            </li>                             
                            <li> 
                                <a href="/admin/support"> <i class="fa-support fa"></i>Support Requests</a> 
                            </li>                                                          
                        </ul>                         
                    </div>                     
                </nav>                 
            </header>             
            <!-- END HEADER MOBILE-->             
            <!-- MENU SIDEBAR-->             
            <aside class="menu-sidebar d-none d-lg-block"> 
                <div class="logo border-ems-admin bg-ems-admin"> 
                    <a href="/admin/dash"> 
                        <img src="/admin/images/icon/logo.png" alt="EMS Admin" class="ems-admin-logo"/> 
                    </a>                     
                </div>                 
                <div class="js-scrollbar1 bg-ems-admin border-ems-admin menu-sidebar__content"> 
                    <nav class="navbar-sidebar bg-ems-admin border-ems-admin"> 
                        <ul class="list-unstyled navbar__list"> 
                            <li> 
                                <a class="js-arrow" href="/admin/dash"> <i class="fas fa-tachometer-alt"></i>Site Stats</a> 
                            </li>                             
                            <li class="has-sub"> 
                                <a class="js-arrow" href="#"><i class="far fa-calendar-alt"></i>Manage Events</a> 
                                <ul class="list-unstyled navbar__sub-list js-sub-list"> 
                                    <li> 
                                        <a href="/admin/catergory">Catergories</a> 
                                    </li>                                     
                                    <li> 
                                        <a href="/admin/template">Templates</a> 
                                    </li>                                     
                                    <li> 
                                        <a href="/admin/task">Tasks</a> 
                                    </li>                                     
                                </ul>                                 
                            </li>                             
                            <li> 
                                <a href="/admin/svp"> <i class="fas fa-user-circle"></i>Manage Service Providers</a> 
                            </li>                             
                            <li> 
                                <a href="/admin/client"> <i class="far fa-user-circle"></i>Manage Clients</a> 
                            </li>                             
                            <li> 
                                <a href="/admin/payment"> <i class="fas fa-money-bill-alt"></i>Manage Payments</a> 
                            </li>                             
                            <li> 
                                <a href="/admin/ad"> <i class="fab fa-adversal"></i></i>Manage Ads</a> 
                            </li>                             
                            <li> 
                                <a href="/admin/support"> <i class="fa-support fa"></i>Support Requests</a> 
                            </li>                                                          
                        </ul>                         
                    </nav>                     
                </div>                 
            </aside>             
            <!-- END MENU SIDEBAR-->             
            <!-- PAGE CONTAINER-->             
            <div class="page-container"> 
                <!-- HEADER DESKTOP-->                 
                <header class="header-desktop bg-ems-admin border-ems-admin"> 
                    <div class="section__content section__content--p30"> 
                        <div class="container-fluid"> 
                            <div class="header-wrap"> 
                                <form class="form-header" action="" method="POST"> 
                                    <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..."/> 
                                    <button class="au-btn--submit" type="submit"> 
                                        <i class="zmdi zmdi-search"></i> 
                                    </button>                                     
                                </form>                                 
                                <div class="header-button"> 
                                    <div class="noti-wrap"> 
                                        <div class="noti__item js-item-menu"> 
                                            <i class="zmdi zmdi-comment-more"></i> 
                                            <span class="quantity">1</span> 
                                            <div class="mess-dropdown js-dropdown"> 
                                                <div class="mess__title"> 
                                                    <p>You have 2 news message</p> 
                                                </div>                                                 
                                                <div class="mess__item"> 
                                                    <div class="image img-cir img-40"> 
                                                        <img src="/admin/images/icon/avatar-06.jpg" alt="Michelle Moreno"/> 
                                                    </div>                                                     
                                                    <div class="content"> 
                                                        <h6>Michelle Moreno</h6> 
                                                        <p>Have sent a photo</p> 
                                                        <span class="time">3 min ago</span> 
                                                    </div>                                                     
                                                </div>                                                 
                                                <div class="mess__item"> 
                                                    <div class="image img-cir img-40"> 
                                                        <img src="/admin/images/icon/avatar-04.jpg" alt="Diane Myers"/> 
                                                    </div>                                                     
                                                    <div class="content"> 
                                                        <h6>Diane Myers</h6> 
                                                        <p>You are now connected on message</p> 
                                                        <span class="time">Yesterday</span> 
                                                    </div>                                                     
                                                </div>                                                 
                                                <div class="mess__footer"> 
                                                    <a href="#">View all messages</a> 
                                                </div>                                                 
                                            </div>                                             
                                        </div>                                         
                                        <div class="noti__item js-item-menu"> 
                                            <i class="zmdi zmdi-email"></i> 
                                            <span class="quantity">1</span> 
                                            <div class="email-dropdown js-dropdown"> 
                                                <div class="email__title"> 
                                                    <p>You have 3 New Emails</p> 
                                                </div>                                                 
                                                <div class="email__item"> 
                                                    <div class="image img-cir img-40"> 
                                                        <img src="/admin/images/icon/avatar-06.jpg" alt="Cynthia Harvey"/> 
                                                    </div>                                                     
                                                    <div class="content"> 
                                                        <p>Meeting about new dashboard...</p> 
                                                        <span>Cynthia Harvey, 3 min ago</span> 
                                                    </div>                                                     
                                                </div>                                                 
                                                <div class="email__item"> 
                                                    <div class="image img-cir img-40"> 
                                                        <img src="/admin/images/icon/avatar-05.jpg" alt="Cynthia Harvey"/> 
                                                    </div>                                                     
                                                    <div class="content"> 
                                                        <p>Meeting about new dashboard...</p> 
                                                        <span>Cynthia Harvey, Yesterday</span> 
                                                    </div>                                                     
                                                </div>                                                 
                                                <div class="email__item"> 
                                                    <div class="image img-cir img-40"> 
                                                        <img src="/admin/images/icon/avatar-04.jpg" alt="Cynthia Harvey"/> 
                                                    </div>                                                     
                                                    <div class="content"> 
                                                        <p>Meeting about new dashboard...</p> 
                                                        <span>Cynthia Harvey, April 12,,2018</span> 
                                                    </div>                                                     
                                                </div>                                                 
                                                <div class="email__footer"> 
                                                    <a href="#">See all emails</a> 
                                                </div>                                                 
                                            </div>                                             
                                        </div>                                         
                                        <div class="noti__item js-item-menu"> 
                                            <i class="zmdi zmdi-notifications"></i> 
                                            <span class="quantity">3</span> 
                                            <div class="notifi-dropdown js-dropdown"> 
                                                <div class="notifi__title"> 
                                                    <p>You have 3 Notifications</p> 
                                                </div>                                                 
                                                <div class="notifi__item"> 
                                                    <div class="bg-c1 img-cir img-40"> 
                                                        <i class="zmdi zmdi-email-open"></i> 
                                                    </div>                                                     
                                                    <div class="content"> 
                                                        <p>You got a email notification</p> 
                                                        <span class="date">April 12, 2018 06:50</span> 
                                                    </div>                                                     
                                                </div>                                                 
                                                <div class="notifi__item"> 
                                                    <div class="bg-c2 img-cir img-40"> 
                                                        <i class="zmdi zmdi-account-box"></i> 
                                                    </div>                                                     
                                                    <div class="content"> 
                                                        <p>Your account has been blocked</p> 
                                                        <span class="date">April 12, 2018 06:50</span> 
                                                    </div>                                                     
                                                </div>                                                 
                                                <div class="notifi__item"> 
                                                    <div class="bg-c3 img-cir img-40"> 
                                                        <i class="zmdi zmdi-file-text"></i> 
                                                    </div>                                                     
                                                    <div class="content"> 
                                                        <p>You got a new file</p> 
                                                        <span class="date">April 12, 2018 06:50</span> 
                                                    </div>                                                     
                                                </div>                                                 
                                                <div class="notifi__footer"> 
                                                    <a href="#">All notifications</a> 
                                                </div>                                                 
                                            </div>                                             
                                        </div>                                         
                                    </div>                                     
                                    <div class="account-wrap"> 
                                        <div class="account-item clearfix js-item-menu"> 
                                            <div class="image"> 
                                                <img src="/storage/images/profile/{{$admin->profilepic}}" alt="{{$admin->username}}"/> 
                                            </div>                                             
                                            <div class="content"> 
                                                <a class="js-acc-btn" href="#">{{$admin->username}}</a> 
                                            </div>                                             
                                            <div class="account-dropdown js-dropdown"> 
                                                <div class="info clearfix"> 
                                                    <div class="image"> 
                                                        <a href="#"> 
                                                            <img src="/storage/images/profile/{{$admin->profilepic}}" alt="{{$admin->username}}"/> 
                                                        </a>                                                         
                                                    </div>                                                     
                                                    <div class="content"> 
                                                        <h5 class="name"> <a href="#" class="text-body">{{$admin->username}}</a> </h5> 
                                                        <span class="email text-body">{{$admin->email}}</span> 
                                                    </div>                                                     
                                                </div>                                                 
                                                <div class="account-dropdown__body"> 
                                                    <div class="account-dropdown__item"> 
                                                        <a href="/admin/profile" class="text-justify text-body"> <i class="zmdi zmdi-account"></i>Account</a> 
                                                    </div>                                                     
                                                    <div class="account-dropdown__item"> 
                                                        <a href="/admin/settings" class="text-body"> <i class="zmdi zmdi-settings"></i>Setting</a> 
                                                    </div>                                                     
                                                </div>                                                 
                                                <div class="account-dropdown__footer"> 
                                                    <a href="/admin/logout" class="text-body"> <i class="zmdi zmdi-power"></i>Logout</a> 
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
                <div class="ems-admin-main-bg main-content"> 
                    <div class="section__content section__content--p30"> 
                        <div class="container-fluid"> 
                            @include('inc.messages')
                            @yield('content')
                        </div>                         
                                                 
                    </div> 
                                        
                </div> 
                <div class="row"> 
                        <div class="col-md-12"> 
                            <div class="copyright"> 
                                <strong><p>Copyright © 2018 EMS. All rights reserved.</p> </strong>
                            </div>                                 
                        </div>                             
                    </div>                
                <!-- END MAIN CONTENT-->                 
                <!-- END PAGE CONTAINER-->                 
            </div>             
        </div>         
        <!-- Jquery JS-->         
        <script src="/admin/vendor/jquery-3.2.1.min.js"></script>         
        <!-- Bootstrap JS-->         
        <script src="/admin/vendor/bootstrap-4.1/popper.min.js"></script>         
        <script src="/admin/vendor/bootstrap-4.1/bootstrap.min.js"></script>         
        <!-- Vendor JS       -->         
        <script src="/admin/vendor/slick/slick.min.js">
        </script>         
        <script src="/admin/vendor/wow/wow.min.js"></script>         
        <script src="/admin/vendor/animsition/animsition.min.js"></script>         
        <script src="/admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
        </script>         
        <script src="/admin/vendor/counter-up/jquery.waypoints.min.js"></script>         
        <script src="/admin/vendor/counter-up/jquery.counterup.min.js">
        </script>         
        <script src="/admin/vendor/circle-progress/circle-progress.min.js"></script>         
        <script src="/admin/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>         
        <script src="/admin/vendor/chartjs/Chart.bundle.min.js"></script>         
        <script src="/admin/vendor/select2/select2.min.js">
        </script>         
        <!-- Main JS-->         
        <script src="/admin/js/main.js"></script>         
        <script type="text/javascript" src="/admin/components/pg.blocks/js/plugins.js"></script>         
        <script type="text/javascript" src="/admin/components/pg.blocks/js/bskit-scripts.js"></script>         
        <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>   
        <!-- Custom Scripts -->
        <script>
                $(document).ready(function() {
                $('.table').DataTable();
            });
        </script>
        <!-- External Scripts -->
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>      
    </body>     
</html> 
<!-- end document-->