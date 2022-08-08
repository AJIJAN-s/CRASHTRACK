<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Crash Tracker">
    <meta name="author" content="Azizan Syarofi">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url()?>assets/images/favicon.png">
    <title>Crash Tracker</title>
    <!-- <link rel="canonical" href="https://www.wrappixel.com/templates/adminwrap/"> -->
    <!-- DASHBOARD -->
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()?>assets/node_modules/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css" rel="stylesheet">
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="<?php echo base_url()?>assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <!--c3 CSS -->
    <link href="<?php echo base_url()?>assets/node_modules/c3-master/c3.min.css" rel="stylesheet">
    <!--Toaster Popup message CSS -->
    <link href="<?php echo base_url()?>assets/node_modules/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/style5.css" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="<?php echo base_url()?>assets/css/pages/dashboard1.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="<?php echo base_url()?>assets/css/colors/default.css" id="theme" rel="stylesheet">
    <!-- TABLE -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css">
    <link href="<?php echo base_url()?>assets/css/pages/table-pages.css" rel="stylesheet"> 
    <!-- MAP -->
    <!-- page css -->
    <!-- <link href="<?php echo base_url()?>assets/css/pages/google-vector-map.css" rel="stylesheet"> -->
    <!-- USER -->
    <!-- Footable CSS -->
    <!-- <link href="<?php echo base_url()?>assets/node_modules/footable/css/footable.bootstrap.min.css" rel="stylesheet"> -->
    <link href="<?php echo base_url()?>assets/node_modules/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
    <!-- page css -->
    <!-- <link href="<?php echo base_url()?>assets/css/pages/footable-page.css" rel="stylesheet"> -->
    <!--alerts CSS -->
    <link href="<?php echo base_url()?>assets/node_modules/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--hidden watermark-->
    <link href="<?php echo base_url()?>assets/css/remove.css" rel="stylesheet">
</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Crash Tracker</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">