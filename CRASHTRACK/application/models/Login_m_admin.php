<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_m extends CI_Model {

	public function GetLogin($u,$p)
	{
		$pwd = md5($p);
		$this->db->where('username',$u);
		$this->db->where('password',$p);
		$query = $this->db->get('pengguna');
		if ($query->num_rows()>0) {
			foreach ($query->result() as $row) {
				$sess = array('username' => $row->username, 'password' => $row->password);
				$this->session->set_userdata($sess);
				redirect('Main');
			}
		}
		else {
			$this->session->set_flashdata('linfo','Username atau Password Salah');
			redirect('Login_c');
		}
	}

	public function GetPassword($n,$e)
	{
		$this->db->where('username',$n);
		$this->db->where('email',$e);
		$query = $this->db->get('pengguna');
		if ($query->num_rows()>0) {
			foreach ($query->result() as $row) {
			$pass1 = "";
			$pass2 = $this->db->query('SELECT password AS pass FROM pengguna WHERE username = "'.$n.'" AND email = "'.$e.'";')->row();
			return $pass1 = $pass2->pass;
			}
		}
		else {
			$this->session->set_flashdata('info','Username atau Email Tidak Ditemukan');
			redirect('Login_c');
		}
	}

	public function GetCountPengguna()
	{
		$count = 0;
		$count1 = $this->db->query('SELECT MAX(id_Pengguna) AS maxid FROM pengguna;')->row();
		return $count = $count1->maxid;
	}

	public function GetRegister($object1, $object2)
	{
		$np = $object1['no_Plat'];
		$ia = $object2['id_Alat'];
		$cek = $this->db->query('SELECT * FROM kendaraan WHERE no_Plat="'.$np.'";')->num_rows();
		$cek2 = $this->db->query('SELECT * FROM kendaraan WHERE id_Alat="'.$ia.'";')->num_rows();
		$cek3 = $this->db->query('SELECT * FROM kendaraan WHERE no_Plat="'.$np.'" AND id_Alat="'.$ia.'";')->num_rows();
		$a = "Data Gagal Ditambah, (Data Sudah Ada, Silahkan Login Menggunakan Akun yang Sudah Terdaftar Untuk Dapat Menambahkan Pengguna)";
		$b = "Data Berhasil Ditambah (Silahkan Login Menggunakan Akun yang Telah Terdaftar)";
		$c = "Data Gagal Ditambah, (Plat Ada, Silahkan Login Menggunakan Akun yang Sudah Terdaftar Untuk Dapat Menambahkan Pengguna)";
		$d = "Data Gagal Ditambah, (Alat Ada, Silahkan Login Menggunakan Akun yang Sudah Terdaftar Untuk Dapat Menambahkan Pengguna)";
		$e = "Data Gagal Ditambah, (Plat Ada dan Alat Ada, Data Sudah Ada, Silahkan Login Menggunakan Akun yang Sudah Terdaftar Untuk Dapat Menambahkan Pengguna)";

		if ($cek > 0 && $cek2 > 0) {
			return $a;
		}
		else if ($cek > 0) {
			return $c;
		}
		else if ($cek2 > 0) {			
			return $d;
		}
		else {
			if ($cek3 > 0) {
				return $e;
			}
			else {
				$this->db->insert('pengguna', $object1);
				$this->db->insert('kendaraan', $object2);
				return $b;
			}
		}
	}

	function is_email_available($email)  
	{  
	   $this->db->where('email', $email);  
	   $query = $this->db->get("pengguna");  
	   if($query->num_rows() > 0)  
	   {  
	        return true;  
	   }  
	   else  
	   {  
	        return false;  
	   }  
	}

}
