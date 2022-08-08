<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Security_m extends CI_Model {
	public function GetSecurity(){
		$username = $this->session->userdata('username');
		if(empty($username)){
			$this->session->sess_destroy();
			redirect('Login');
		}
	}
}