<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
    function __construct() {
        parent:: __construct();
        $this->load->model('Register_m');
    }

    public function index(){
        $username = $this->session->userdata('username');
        if(!empty($username)){
            redirect('Main');
        }
        else {
            $this->load->view('register');
        }
    }

    function check_device_availability(){
            $data = $this->Register_m->is_device_available($_POST["device"]); 
            if($data == "1"){
                echo '<label class="text-danger"><i class="fa fa-times" data-toggle="tooltip" title="Device Not Found"></i></label>';
            }
            if ($data == "2"){
                echo '<label class="text-warning"><i class="fa fa-exclamation" data-toggle="tooltip" title="Device Already Registered"></i></label>';
            }
            if ($data == "3"){
                echo '<label class="text-success" id="device_succses"><i class="fa fa-check" data-toggle="tooltip" title="Device Available"></i></label>';
            }
    }

    function check_email_availability(){  
        if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){  
            echo '<label class="text-danger"><i class="fa fa-times" data-toggle="tooltip" title="Invalid Email"></i></label>';  
        }
        else{
            if($this->Register_m->is_email_available($_POST["email"])){  
                echo '<label class="text-warning"><i class="fa fa-exclamation" data-toggle="tooltip" title="Email Already Registered"></i></label>';
            }
            else{  
                echo '<label class="text-success" id="email_succses"><i class="fa fa-check" data-toggle="tooltip" title="Email Available"></i></label>';
            }
        }
    }

    function check_username_availability(){
            if($this->Register_m->is_username_available($_POST["username"])){  
                echo '<label class="text-warning"><i class="fa fa-exclamation" data-toggle="tooltip" title="Username Already Taken"></i></label>';
            }
            else{  
                echo '<label class="text-success" id="username_succses"><i class="fa fa-check" data-toggle="tooltip" title="Username Available"></i></label>';
            }
    }

    public function check_email_availability_me(){  
        if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){  
            echo '<label class="text-danger"><i class="fa fa-times" data-toggle="tooltip" title="Invalid Email"></i></label>';  
        }
        else{
            if($this->Register_m->is_email_available_me($_POST["email"], $this->session->userdata('idpengguna'))){  
                echo '<label class="text-warning"><i class="fa fa-exclamation" data-toggle="tooltip" title="Email Already Registered"></i></label>';
            }
            else{  
                echo '<label class="text-success" id="email_succses"><i class="fa fa-check" data-toggle="tooltip" title="Email Available"></i></label>';
            }
        }
    }

    public function check_username_availability_me(){
            if($this->Register_m->is_username_available_me($_POST["username"], $this->session->userdata('idpengguna'))){  
                echo '<label class="text-warning"><i class="fa fa-exclamation" data-toggle="tooltip" title="Username Already Taken"></i></label>';
            }
            else{  
                echo '<label class="text-success" id="username_succses"><i class="fa fa-check" data-toggle="tooltip" title="Username Available"></i></label>';
            }
    }

    public function getregister(){
        $device = $this->input->post('device');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $email = $this->input->post('email');

        $count1 = $this->Register_m->GetCountPengguna();
        $idpengguna = $count1+1;
        $count2 = $this->Register_m->GetCountPemilik();
        $idpemilik = $count2+1;

        $object1 = array(
            'id_Pengguna' => $idpengguna,
            'nm_Pengguna' => "not set",
            'username' => $username,
            'password' => $password,
            'email' => $email,
            'parent' => "yes",
            );
        $object2 = array(
            'id_Alat' => $device,
            'no_Plat' => "not set",
            'nm_Pengendara' => "not set",
            'merk' => "not set",
            'tipe' => "not set",
            );
        $object3 = array(
            'id_Pemilik' => $idpemilik,
            'id_Alat' => $device,
            'id_Pengguna' => $idpengguna,
            );

        // $this->Register_m->GetRegister($object1, $object2);
        $go = $this->Register_m->GetRegister($object1, $object2, $object3);

        $this->session->set_flashdata('info',$go);
        redirect($_SERVER['HTTP_REFERER']);
    }

}
