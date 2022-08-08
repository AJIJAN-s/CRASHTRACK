<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_m extends CI_Model {

	public function GetCountPengguna(){
		$count = 0;
		$count1 = $this->db->query('SELECT MAX(id_Pengguna) AS maxid FROM pengguna;')->row();
		return $count = $count1->maxid;
	}

	public function GetCountPemilik(){
		$count = 0;
		$count1 = $this->db->query('SELECT MAX(id_Pemilik) AS maxid FROM pemilik;')->row();
		return $count = $count1->maxid;
	}

	public function GetRegister($object1, $object2, $object3){
		// $np = $object1['no_Plat'];
		// $ia = $object2['id_Alat'];
		// $cek = $this->db->query('SELECT * FROM kendaraan WHERE no_Plat="'.$np.'";')->num_rows();
		// $cek2 = $this->db->query('SELECT * FROM kendaraan WHERE id_Alat="'.$ia.'";')->num_rows();
		// $cek3 = $this->db->query('SELECT * FROM kendaraan WHERE no_Plat="'.$np.'" AND id_Alat="'.$ia.'";')->num_rows();
		$id = $object2['id_Alat'];
		// $cek1 = $this->is_device_available($object2['id_Alat']);
		// $cek2 = $this->is_email_available($object1['email']);
		// $cek3 = $this->is_username_available($object1['username']);
		// $a = "Data Gagal Ditambah, (Data Sudah Ada, Silahkan Login Menggunakan Akun yang Sudah Terdaftar Untuk Dapat Menambahkan Pengguna)";
		$b = "Data Berhasil Ditambah (Silahkan Login Menggunakan Akun yang Telah Terdaftar)";
		// $c = "Data Gagal Ditambah, (Plat Ada, Silahkan Login Menggunakan Akun yang Sudah Terdaftar Untuk Dapat Menambahkan Pengguna)";
		// $d = "Data Gagal Ditambah, (Alat Ada, Silahkan Login Menggunakan Akun yang Sudah Terdaftar Untuk Dapat Menambahkan Pengguna)";
		// $e = "Data Gagal Ditambah, (Plat Ada dan Alat Ada, Data Sudah Ada, Silahkan Login Menggunakan Akun yang Sudah Terdaftar Untuk Dapat Menambahkan Pengguna)";
		// $f = "Pastikan Semua Isian Sudah Benar";
		
		// if ($cek1 == "3" && !$cek2 && !$cek3) {
			$this->db->insert('pengguna', $object1);
			$this->db->insert('kendaraan', $object2);
			$this->db->insert('pemilik', $object3);
			$this->db->query('UPDATE daftaralat SET status="registered" WHERE id_Alat="'.$id.'";');
			return $b;
	// }
	// else{
	// 	return $f;
	// }

		// if ($cek > 0 && $cek2 > 0) {
		// 	return $a;
		// }
		// else if ($cek > 0) {
		// 	return $c;
		// }
		// else if ($cek2 > 0) {			
		// 	return $d;
		// }
		// else {
		// 	if ($cek3 > 0) {
		// 		return $e;
		// 	}
		// 	else {
		// 		$this->db->insert('pengguna', $object1);
		// 		$this->db->insert('kendaraan', $object2);
		// 		return $b;
		// 	}
		// }
	}

	public function is_device_available($device){
		$this->db->where('id_Alat', $device);
		$this->db->where('status', "registered");  
		$query = $this->db->get("daftaralat");
		if($query->num_rows() > 0){
			return "2";
		}
		else{
			$this->db->where('id_Alat', $device);
			$this->db->where('status', "not registered");
			$query2 = $this->db->get("daftaralat");
			if ($query2->num_rows() > 0){
				return "3";
			}
	        else{
				return "1";
			}
		}
	}

	public function is_email_available($email){
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
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
		else{
			return "invalid";
		}
	}

	public function is_username_available($username){  
	   $this->db->where('username', $username);  
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

	public function is_email_available_me($email, $id){
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$this->db->where('email', $email);
			$this->db->where('id_Pengguna !=', $id);
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
		else{
			return "invalid";
		}
	}

	public function is_username_available_me($username, $id){  
	   $this->db->where('username', $username);
	   $this->db->where('id_Pengguna !=', $id);
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
