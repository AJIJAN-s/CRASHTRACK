<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="This website is used to track the GPS coordinates received from the device.">
    <meta name="author" content="Azizan Syarofi">
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://www.crashtrack.tk/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Crash Tracker GPS Coordinates">
    <meta property="og:description" content="This website is used to track the GPS coordinates received from the device, tracking the device from maps.">
    <meta property="og:image" content="<?php echo base_url()?>assets/images/crashtrack.png">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url()?>assets/images/favicon.png">
    <title>Crash Tracker</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/adminwrap/" />
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()?>assets/node_modules/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- page css -->
    <link href="<?php echo base_url()?>assets/css/pages/login-register-lock.css" rel="stylesheet">
    <!--alerts CSS -->
    <link href="<?php echo base_url()?>assets/node_modules/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet">
    
    <!-- You can change the theme colors from here -->
    <link href="<?php echo base_url()?>assets/css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--hidden watermark-->
    <link href="<?php echo base_url()?>assets/css/remove.css" rel="stylesheet">
</head>
<body class="card-no-border">
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
    <section id="wrapper">
        <div class="login-register" style="background-image:url('<?php echo base_url()?>assets/images/background/login-register.jpg');">
            <?php $info = $this->session->flashdata('info'); ?>
            <div class="login-box card">
                <div class="card-body">
                    <form class="form-horizontal form-material" id="loginform" method="POST" action="<?php echo base_url();?>Login/getlogin">
                        <h3 class="box-title m-b-20">Account Login</h3>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" name="username" id="username" required="" placeholder="Username">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" name="password" id="password" required="" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="checkbox checkbox-info pull-left p-t-0">
                                    <input id="checkbox-signup" type="checkbox" class="filled-in chk-col-light-blue">
                                    <label for="checkbox-signup"> Remember me </label>
                                </div> <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> Forgot pwd?</a> </div>
                        </div>
                        <div class="form-group text-center">
                            <div class="col-xs-12 p-b-20">
                                <button class="btn btn-block btn-lg btn-info btn-rounded" type="submit">Log In</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                                <div class="social">
                                    <a class="text-danger" href="javascript:void(0)" data-toggle="tooltip" title="Check username or password"><b>
                                        <?php
                                            $linfo = $this->session->flashdata('linfo');
                                            if (!empty($linfo)) {
                                                echo $linfo;
                                            }
                                        ?></b>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="form-group m-b-0">
                            <div class="col-sm-12 text-center">
                                Don't have an account? <a href="<?php echo base_url();?>Register" class="text-info m-l-5"><b>Sign Up</b></a>
                            </div>
                        </div>
                    </form>
                    <form class="form-horizontal" id="recoverform" method="POST" action="<?php echo base_url();?>Login/forgotpassword">
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <h3>Recover Password</h3>
                                <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" name="email" required="" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url()?>assets/node_modules/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url()?>assets/node_modules/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo base_url()?>assets/node_modules/bootstrap/js/bootstrap.min.js"></script>
    <!-- Sweet-Alert  -->
    <script src="<?php echo base_url()?>assets/node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script src="<?php echo base_url()?>assets/node_modules/sweetalert2/sweet-alert.init.js"></script>
    <!--Custom JavaScript -->
    <script type="text/javascript">
        $(function() {
            $(".preloader").fadeOut();
        });
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        });
        // ============================================================== 
        // Login and Recover Password 
        // ============================================================== 
        $('#to-recover').on("click", function() {
            $("#loginform").slideUp();
            $("#recoverform").fadeIn();
        });
    </script>
    <script>
        $(document).ready(function(){
            var info = "<?php echo $info; ?>"; 
            if (info) {
                if (info=="Email berhasil dikirim, Silahkan cek kontak masuk pada email Anda") {
                    Swal.fire("Operation Success!", "Send to email successfully, please check the inbox in your email to see your account username and password.", "success");
                }
                else{
                    Swal.fire("Oops...!", "Operation Failed. Email not found, use the email that is already registered", "error");
                }                
            }
            
            $('#recipient-email').change(function(){  
                var email = $('#recipient-email').val();  
                if(email != ''){
                    $.ajax({
                        url:"<?php echo base_url(); ?>Login_c/check_email_avalibility",  
                        method:"POST",  
                        data:{email:email},  
                        success:function(data){  
                            $('#email_result').html(data);  
                        }
                    });
                }
                else{
                    $('#email_result').html('<span id="email_result"></span>');
                }
            });            
        });
    </script>
    <script>
        $(function() {
            // document.querySelector('[alt="www.000webhost.com"]').parentNode.parentNode.remove();
            document.querySelector('[class="disclaimer"]').remove();
        });
    </script>

</body>
</html>