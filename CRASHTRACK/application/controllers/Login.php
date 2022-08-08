<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    function __construct() {
        parent:: __construct();
        $this->load->model('Login_m');
    }

    public function index(){
        $username = $this->session->userdata('username');
        if(!empty($username)){
            redirect('Main');
        }
        else {
            $this->load->view('login');
        }
    }

    public function getlogin(){
        $u = $this->input->post('username');
        $p = $this->input->post('password');
        $info = $this->Login_m->GetLogin($u,$p);
    }

    public function getlogout(){
        $this->Security_m->GetSecurity();
        $this->session->sess_destroy();
        redirect('Login');
    }

    public function forgotpassword(){
        $e = $this->input->post('email');
        $data = $this->Login_m->GetPassword($e);
        // Konfigurasi email
        $config = [
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'protocol'  => 'smtp',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_user' => 'crashdetectiongpstracking@gmail.com',  // Email gmail
            'smtp_pass'   => 'crashpass123',  // Password gmail
            'smtp_crypto' => 'ssl',
            'smtp_port'   => 465,
            'crlf'    => "\r\n",
            'newline' => "\r\n"
        ];
        
        // Load library email dan konfigurasinya
        $this->load->library('email', $config);
        
        // Email dan nama pengirim
        $this->email->from('crashdetectiongpstracking@gmail.com', 'Crash.System.com');
        
        // Email penerima
        $this->email->to($e); // Ganti dengan email tujuan
        
        // Lampiran email, isi dengan url/path file
        // $this->email->attach('https://masrud.com/content/images/20181215150137-codeigniter-smtp-gmail.png');
        
        // Subject email
        $this->email->subject('User Get Password | Crash System');
        
        // Isi email
        $this->email->message("
        <html>
        <head>
        <title>Email</title>
        </head>
        <body>
        <p>This email attaches a username and password!</p>
        <table>
        <tr>
        <th>USERNAME</th>
        <th>PASSWORD</th>
        </tr>
        <tr>
        <td>".$data['u']."</td>
        <td>".$data['p']."</td>
        </tr>
        </table>
        </body>
        </html>
        ");
        
        // Tampilkan pesan sukses atau error
        if ($this->email->send()) {
            $this->session->set_flashdata('info','Email berhasil dikirim, Silahkan cek kontak masuk pada email Anda');
            redirect('Login');
        } else {
            echo 'Error! email tidak dapat dikirim.';
            redirect('Login');
        }
    }

}
