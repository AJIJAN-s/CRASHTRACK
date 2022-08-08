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
    <meta name="description" content="">
    <meta name="author" content="Azizan Syarofi">
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
                    <form class="form-horizontal form-material" id="loginform" onsubmit="return checkForm(this);" method="POST" action="<?php echo base_url();?>Register/getregister">
                        <h3 class="box-title m-b-20">Account Register</h3>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" id="recipient-device" name="device" required="" placeholder="ID Alat">
                                <span style="position: fixed;" id="device_result"></span>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" id="recipient-email" name="email" required="" placeholder="Email">
                                <span style="position: fixed;" id="email_result"></span>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" id="recipient-username" name="username" required="" placeholder="Username">
                                <span style="position: fixed;" id="username_result"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" id="recipient-password" name="password" required="" placeholder="Password">
                                <span style="position: fixed;" id="password_result"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="checkbox checkbox-success p-t-0">
                                    <input id="checkbox-signup" type="checkbox" name="terms" class="filled-in chk-col-light-blue">
                                    <label for="checkbox-signup"> I agree to all <a href="javascript:void(0)">Terms</a></label>
                                    <span id="terms_result"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center p-b-20">
                            <div class="col-xs-12">
                                <button class="btn btn-info btn-lg btn-block btn-rounded text-uppercase waves-effect waves-light" type="submit">Sign Up</button>
                            </div>
                        </div>
                        <div class="form-group m-b-0">
                            <div class="col-sm-12 text-center">
                                Already have an account? <a href="<?php echo base_url();?>Login" class="text-info m-l-5"><b>Sign In</b></a>
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
            $('#recipient-device').on('input', function(evt){
                var device = $('#recipient-device').val();  
                if(device != ''){
                    $.ajax({
                        url:"<?php echo base_url(); ?>Register/check_device_availability",  
                        method:"POST",
                        data:{device:device},
                        success:function(data){
                            $('#device_result').html(data);
                            $('[data-toggle="tooltip"]').tooltip();
                        }
                    });
                }
                else{
                    $('#device_result').html('');
                }
            });
            $('#recipient-email').on('input', function(evt){  
                var email = $('#recipient-email').val();  
                if(email != ''){
                    $.ajax({
                        url:"<?php echo base_url(); ?>Register/check_email_availability",  
                        method:"POST",  
                        data:{email:email},  
                        success:function(data){  
                            $('#email_result').html(data);
                            $('[data-toggle="tooltip"]').tooltip();
                        }
                    });
                }
                else{
                    $('#email_result').html('');
                }
            });
            $('#recipient-username').on('input', function(evt){  
                var username = $('#recipient-username').val();  
                if(username != ''){
                    $.ajax({
                        url:"<?php echo base_url(); ?>Register/check_username_availability",  
                        method:"POST",  
                        data:{username:username},  
                        success:function(data){  
                            $('#username_result').html(data);
                            $('[data-toggle="tooltip"]').tooltip();
                        }
                    });
                }
                else{
                    $('#username_result').html('');
                }
            });
            $('#recipient-password').on('input', function(evt){ // $('#recipient-password').change(function(){
                var password = $('#recipient-password').val();  
                if(password != ''){
                    $('#password_result').html('<label class="text-success"><i class="fa fa-check" data-toggle="tooltip" title="Make Sure Password is Strong"></i></label>');
                    $('[data-toggle="tooltip"]').tooltip();
                }
                else{
                    $('#password_result').html('');
                }
            });
            $('#checkbox-signup').change(function(){  
                if($('#checkbox-signup').prop("checked")){
                    $('#terms_result').html('<label class="text-success"><i class="fa fa-check" data-toggle="tooltip" title="Terms Accepted"></i></label>');
                    $('[data-toggle="tooltip"]').tooltip();
                }
                else{
                    $('#terms_result').html('');
                }
            });
        });

        function checkForm(form){
            if(!form.terms.checked) {
                $('#terms_result').html('<label class="text-danger"><i class="fa fa-times" data-toggle="tooltip" title="Please Accept Terms"></i></label>');
                $('[data-toggle="tooltip"]').tooltip();
                form.terms.focus();
                return false;
            }
            if ($('#device_succses').hasClass("text-success") && $('#email_succses').hasClass("text-success") && $('#username_succses').hasClass("text-success")) {
                return true;
            }
            else{
                Swal.fire("Oops...!", "Operation Failed. Something is not correct, Make sure all of form are correct", "error");
                return false;
            }
        }

        $(document).ready(function(){
            var info = "<?php echo $info; ?>"; 
            if (info) {
                if (info=="Data Berhasil Ditambah (Silahkan Login Menggunakan Akun yang Telah Terdaftar)") {
                    Swal.fire({
                        title: "Operation Success!",
                        text: "Add data successfully, please login using your account that is registered.",
                        type: "success"
                    }).then(function(){
                        window.location="<?php echo base_url(); ?>Login";
                    });
                }
                else{
                    Swal.fire("Oops...!", "Operation Failed. Something is not correct, Make sure all of form are correct", "error");
                }
            }
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