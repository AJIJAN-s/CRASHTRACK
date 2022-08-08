<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_m extends CI_Model {

	public function GetLogin($u,$p){
		$pwd = md5($p);
		$this->db->where('username',$u);
		$this->db->where('password',$p);
		$query = $this->db->get('pengguna');
		if ($query->num_rows()>0) {
			foreach ($query->result() as $row) {
				$sess = array('idpengguna' => $row->id_Pengguna, 'username' => $row->username, 'password' => $row->password);
				$this->session->set_userdata($sess);
				redirect('Main');
			}
		}
		else {
			$this->session->set_flashdata('linfo','Username atau Password Salah');
			redirect('Login');
		}
	}

	public function GetPassword($e){
		$this->db->where('email',$e);
		$query = $this->db->get('pengguna');
		if ($query->num_rows()>0) {
			foreach ($query->result() as $row) {
			// $pass1 = "";
			$pass2 = $this->db->query('SELECT username AS user, password AS pass FROM pengguna WHERE email = "'.$e.'";')->row();
			return $pass1 = array('u' => $pass2->user, 'p' => $pass2->pass);
			}
		}
		else {
			$this->session->set_flashdata('info','Email Tidak Ditemukan');
			redirect('Login');
		}
	}

}
