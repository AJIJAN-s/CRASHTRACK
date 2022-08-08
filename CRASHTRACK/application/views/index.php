<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url()?>/assets/images/favicon.png">
    <title>AdminWrap - Easy to Customize Bootstrap 4 Admin Template</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()?>assets/node_modules/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/node_modules/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="<?php echo base_url()?>assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <!--c3 CSS -->
    <link href="<?php echo base_url()?>assets/node_modules/c3-master/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="<?php echo base_url()?>assets/css/pages/dashboard1.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="<?php echo base_url()?>assets/css/colors/default.css" id="theme" rel="stylesheet">
    <!--alerts CSS -->
    <link href="<?php echo base_url()?>assets/node_modules/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->
    <!-- <script src="<?php echo base_url()?>/assets/js/jquery.js"></script> -->  
</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== onload="client.connect(options)" -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Admin Wrap</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" id="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="<?php echo base_url()?>/assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="<?php echo base_url()?>/assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                         <!-- dark Logo text -->
                         <img src="<?php echo base_url()?>/assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                         <!-- Light Logo text -->    
                         <img src="<?php echo base_url()?>/assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down waves-effect waves-dark" href="javascript:void(0)"><i class="fa fa-bars"></i></a> 
                        </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item hidden-xs-down search-box"> <a class="nav-link hidden-sm-down waves-effect waves-dark" href="javascript:void(0)"><i class="fa fa-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" name="srch_c" id="srch_c" placeholder="Search & enter"><a class="srh-btn"><i class="fa fa-times"></i></a>
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown u-pro">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url()?>/assets/images/users/1.jpg" alt="user" class=""> <span class="hidden-md-down">Mark Sanders &nbsp;<i class="fa fa-angle-down"></i></span> </a>
                            <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img"><img src="<?php echo base_url()?>/assets/images/users/1.jpg" alt="user"></div>
                                            <div class="u-text">
                                                <h4>Steave Jobs</h4>
                                                <p class="text-muted">varun@gmail.com</p><a href="pages-profile.html" class="btn btn-rounded btn-danger btn-sm">View Profile</a></div>
                                        </div>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                                    <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
                                    <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="<?php echo base_url();?>Login/getlogout"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="waves-effect waves-dark" id="dash" href="dashboard" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" id="prof" href="profile" aria-expanded="false"><i class="fa fa-user-circle-o"></i><span class="hide-menu">Profile</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" id="tabel" href="table" aria-expanded="false"><i class="fa fa-table"></i><span class="hide-menu">Tables</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" id="peta" href="map" aria-expanded="false"><i class="fa fa-globe"></i><span class="hide-menu">Map</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" id="status_mqtt" href="#" aria-expanded="false"><i class="fa fa-circle text-warning"></i><span class="hide-menu">Connecting</span></a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper" id="kontenku">
            <!-- DISINI KONTENnya -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url()?>assets/node_modules/jquery/jquery.min.js"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="<?php echo base_url()?>assets/node_modules/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo base_url()?>assets/node_modules/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url()?>assets/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url()?>assets/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url()?>assets/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url()?>assets/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--morris JavaScript -->
    <script src="<?php echo base_url()?>assets/node_modules/raphael/raphael-min.js"></script>
    <script src="<?php echo base_url()?>assets/node_modules/morrisjs/morris.min.js"></script>
    <!--c3 JavaScript -->
    <script src="<?php echo base_url()?>assets/node_modules/d3/d3.min.js"></script>
    <script src="<?php echo base_url()?>assets/node_modules/c3-master/c3.min.js"></script>
    <!-- Chart JS -->
    <script src="<?php echo base_url()?>assets/js/dashboard1.js"></script>
    <!-- Content Handle -->
    <script type='text/javascript'>var baseURL= "<?php echo base_url();?>";</script>
    <script src="<?php echo base_url()?>assets/js/jquerycontent.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery-3.4.1.min.js"></script>
    <!-- Sweet-Alert  -->
    <script src="<?php echo base_url()?>assets/node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script src="<?php echo base_url()?>assets/node_modules/sweetalert2/sweet-alert.init.js"></script>
    <!-- Mqtt -->
    <script src="<?= base_url(); ?>assets/js/mqttws31.js" type="text/javascript"></script>
    <script type="text/javascript">var passedArray = <?php echo json_encode($device->result_array()); ?>;</script>
    <script src="<?= base_url(); ?>assets/js/mqttweb.js" type="text/javascript"></script>

    <script type="text/javascript">
        (function(){
            var srch_c = document.getElementById('srch_c');
            srch_c.addEventListener('keypress', function(event) {
                if (event.keyCode == 13) {
                    event.preventDefault();
                    url = encodeURIComponent(srch_c.value);
                    $('#set_coor').empty();
                    $('#set_coor').append('<iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q='+url+'&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>');
                }
            });
        }());
        $(document).ready(function(){
            // client.connect(options);
        });
    </script>
</body>

</html>