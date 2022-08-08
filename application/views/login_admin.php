<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="<?php echo base_url()?>/assets/images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/css/main.css">
<!--===============================================================================================-->
</head>
<body>
    
    <div class="limiter">
        <div class="container-login100">
        <?php
            $info = $this->session->flashdata('info');
            if (!empty($info)) {
                if ($info=="Email berhasil dikirim, Silahkan cek kontak masuk pada email Anda") {
                    $alert="success";
                    $status="Success";
                    $icon="fa-check-circle";
                }
                else {
                    $alert="warning";
                    $status="Warning";
                    $icon="fa-exclamation-triangle";
                }
                echo '
                    <div class="alert alert-'.$alert.'" id="hide" style="position: absolute; z-index: 9999; width: 45%; top: 3%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <h3 class="text-'.$alert.'"><i class="fa '.$icon.'"></i>'.$status.'</h3> '.$info.'
                    </div>
                ';
            }
        ?>
            <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
                <form class="login100-form validate-form flex-sb flex-w" method="POST" action="<?php echo base_url();?>login_c/getlogin">
                    <span class="login100-form-title p-b-32">
                        Account Login
                    </span>
                    <span class="txt1 p-b-11">
                        Username
                    </span>
                    <div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
                        <input class="input100" type="text" name="username" id="username" value="ajijan" autofocus required>
                        <span class="focus-input100"></span>
                    </div>
                    <span class="txt1 p-b-11">
                        Password
                    </span>
                    <div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
                        <span class="btn-show-pass">
                            <i class="fa fa-eye"></i>
                        </span>
                        <input class="input100" type="password" name="password" id="password" value="ajijan" required>
                        <span class="focus-input100"></span>
                    </div>
                    <div class="flex-sb-m w-full p-b-24">
                        <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                            <label class="label-checkbox100" for="ckb1">
                                Remember me
                            </label>
                        </div>
                        <div>
                            <a href="#" class="txt3" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">
                                Forgot Password?
                            </a>                           
                        </div>
                    </div>
                    <div class="w-full p-b-24" align="center">
                        <p>
                            <?php
                                $linfo = $this->session->flashdata('linfo');
                                if (!empty($linfo)) {
                                    echo $linfo;
                                }
                            ?>
                        </p>
                    </div>
                    <div class="container-login100-form-btn"> 
                    <div class="col-md-6">                       
                        <button type="submit" class="login100-form-btn">
                            Login
                        </button>
                    </div>
                    <div class="col-md-6" align="right">
                        <button type="button" class="login100-form-btn" data-toggle="modal" data-target="#registerModal" data-whatever="@getbootstrap">
                            Register
                        </button>
                    </div>
                    </div>
                </form>

                <div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="exampleModalLabel1">
                                    New message
                                </h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <form method="POST" action="<?php echo base_url();?>login_c/forgotpassword">
                                <div class="modal-body">
                                        <div class="form-group">
                                            <label for="recipient-name" class="control-label">Username:</label>
                                            <input type="text" class="form-control" id="recipient-name1" name="username">
                                        </div>
                                        <div class="form-group">
                                            <label for="message-text" class="control-label">Email:</label>
                                            <textarea class="form-control" id="message-text1" name="email"></textarea>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Send message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="exampleModalLabel1">
                                    New Account
                                </h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <form method="POST" action="<?php echo base_url();?>login_c/getregister">
                                <div class="modal-body">
                                        <label for="recipient-name" class="control-label">Data Pengguna:</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="recipient-nama" name="nama" placeholder="Nama">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="recipient-user" name="username" placeholder="Username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="recipient-pass" name="password" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="recipient-email" name="email" placeholder="Email"><span id="email_result"></span>
                                        </div>
                                        <label for="recipient-name" class="control-label">Data Kendaraan:</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="recipient-driver" name="driver" placeholder="Nama Pengendara">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="recipient-plat" name="noplat" placeholder="Nomor Plat">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="recipient-merk" name="merk" placeholder="Merk">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="recipient-tipe" name="tipe" placeholder="Tipe">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="recipient-alat" name="idalat" placeholder="Id Alat">
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>                                
            </div>
        </div>
    </div>   

    <div id="dropDownSelect1"></div>
    
<!--===============================================================================================-->
    <script src="<?php echo base_url()?>/assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url()?>/assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url()?>/assets/vendor/bootstrap/js/popper.js"></script>
    <script src="<?php echo base_url()?>/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url()?>/assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url()?>/assets/vendor/daterangepicker/moment.min.js"></script>
    <script src="<?php echo base_url()?>/assets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url()?>/assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url()?>/assets/js/main.js"></script>
<!--===============================================================================================-->
    <script>
        $(document).ready(function(){
            $('#hide').show(0).delay(10000).hide(0);
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

</body>
</html>