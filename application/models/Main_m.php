<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_m extends CI_Model {

	public function GetAccount($s_idpengguna){
		$this->db->where('id_Pengguna', $s_idpengguna);
		$query = $this->db->get('pengguna');
		return $query->result();
		// return $query;
		// return $query->result_array();
	}

	public function GetParent($s_idpengguna){
		$query = $this->db->query('SELECT parent FROM pengguna WHERE id_Pengguna='.$s_idpengguna.';');
		return $query->result();
		// return $query;
		// return $query->result_array();
	}

	public function GetUserAll($s_idpengguna){
		$query = $this->db->query('SELECT * FROM pengguna WHERE id_Pengguna IN (SELECT id_Pengguna FROM pemilik WHERE id_Alat IN (SELECT id_Alat FROM pemilik WHERE id_Pengguna='.$s_idpengguna.'));');
		return $query->result();
	}	

	public function GetUser($s_idpengguna){
		$query = $this->db->query('SELECT * FROM pengguna WHERE id_Pengguna IN (SELECT id_Pengguna FROM pemilik WHERE id_Alat IN (SELECT id_Alat FROM pemilik WHERE id_Pengguna='.$s_idpengguna.')) AND id_Pengguna!='.$s_idpengguna.';');
		return $query->result();
	}

	public function GetId($id){
		$query = $this->db->query('SELECT id_Alat FROM pemilik WHERE id_Pengguna="'.$id.'";');
		return $query->result();
	}

	// public function GetUserAlat($username){
	// 	$query = $this->db->query('SELECT pengguna.*, pemilik.id_Alat FROM pengguna LEFT JOIN pemilik ON pengguna.id_Pengguna=pemilik.id_Pengguna ORDER BY pengguna.username;');
	// 	return $query->result();
	// }

	public function GetIdAlatKu($s_idpengguna){
		$query = $this->db->query('SELECT id_Alat FROM pemilik WHERE id_Pengguna='.$s_idpengguna.';');
		return $query->result();
	}	

	// public function GetIdAlat($username){
	// 	$query = $this->db->query('SELECT id_Alat FROM pemilik WHERE id_Pengguna IN (SELECT id_Pengguna FROM pengguna WHERE id_Pengguna IN (SELECT id_Pengguna FROM pemilik WHERE id_Alat IN (SELECT id_Alat FROM pemilik GROUP BY id_Alat HAVING COUNT(id_Alat) > 1)) AND username!="'.$username.'");');
	// 	return $query->result();
	// }
	
	public function GetCrash($s_idpengguna){
		$query = $this->db->query('SELECT * FROM daftarlacak WHERE id_Alat IN (SELECT id_Alat FROM pemilik WHERE id_Pengguna='.$s_idpengguna.') ORDER BY Id_Lacak DESC;');
		return $query->result();
	}
	
	public function GetDeleteCrash($id){
		$this->db->where('Id_Lacak', $id);
		$this->db->delete('daftarlacak');
		return "Berhasil Dihapus";
	}
	
	public function GetDevice($s_idpengguna){
		$query = $this->db->query('SELECT * FROM kendaraan WHERE id_Alat IN (SELECT id_Alat FROM pemilik WHERE id_Pengguna='.$s_idpengguna.');');
		return $query->result();
	}

	public function GetDevice2($id){
		$this->db->where('id_Alat', $id);
		$query = $this->db->get('kendaraan');
		return $query->row();
	}

	public function GetUpdateProfile($object){
		$u = $object['username'];
		$e = $object['email'];
		$id = $object['id_Pengguna'];
		if (filter_var($e, FILTER_VALIDATE_EMAIL)) {
			$this->db->where('username', $u);
			$this->db->where('id_Pengguna !=', $id);
			$query1 = $this->db->get("pengguna");  
			$this->db->where('email', $e);
			$this->db->where('id_Pengguna !=', $id);
			$query2 = $this->db->get("pengguna");
			if($query1->num_rows()>0 || $query2->num_rows()>0){  
				return "Gagal";  
			}
			else {
				$this->db->where('id_Pengguna', $id);
				$this->db->update('pengguna', $object);
				return "Berhasil";
			}
		}
		else {
			return "Gagal";
		}
	}

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

	public function GetAddUser($object1, $idalat){
		$idpengguna = $object1['id_Pengguna'];
		$b = "Berhasil";
		$this->db->insert('pengguna', $object1);
		foreach ($idalat as $key) {
			$count = 0;
			$count1 = $this->db->query('SELECT MAX(id_Pemilik) AS maxid FROM pemilik;')->row();
			$count = $count1->maxid;
			$idpemilik = $count+1;
			$object2 = array();
			$object2 = array(
	            'id_Pemilik' => $idpemilik,
	            'id_Alat' => $key,
	            'id_Pengguna' => $idpengguna,
            );
			$this->db->insert('pemilik', $object2);	
		}
		// $c = $idalat[0];
		return $b;
	}

	public function GetDeleteUser($id){
		$b = "Berhasil";
		$this->db->where('id_Pengguna', $id);
		$this->db->delete('pengguna');
		$this->db->where('id_Pengguna', $id);
		$this->db->delete('pemilik');
		return $b;
	}

	public function GetAddDevice($object1, $s_idpengguna){
		$count = 0;
		$idpengguna = 0;
		$count1 = $this->db->query('SELECT MAX(id_Pemilik) AS maxid FROM pemilik;')->row();
		$count = $count1->maxid;
		$idpemilik = $count+1;
		$idalat = $object1['id_Alat'];
		$idpengguna = $s_idpengguna;
		$object2 = array(
			'id_Pemilik' => $idpemilik,
			'id_Alat' => $idalat,
			'id_Pengguna' => $idpengguna,
		);
		$this->db->insert('kendaraan', $object1);
		$this->db->insert('pemilik', $object2);
		$this->db->query('UPDATE daftaralat SET status="registered" WHERE id_Alat="'.$idalat.'";');
		return "Berhasil";
	}

	public function GetEditDevice($object1){
		$id = $object1['id_Alat'];
		$this->db->where('id_Alat', $id);
		$this->db->update('kendaraan', $object1);
		return "Berhasil";
	}
	
	public function GetAddData($coor, $id){
	    $count = 0;
		$count1 = $this->db->query('SELECT MAX(id_Lacak) AS maxid FROM daftarlacak;')->row();
		$count = $count1->maxid;
		$idlacak = $count+1;
		$pengendara = $this->db->query('SELECT nm_Pengendara FROM kendaraan WHERE id_Alat="'.$id.'";')->row()->nm_Pengendara;
		date_default_timezone_set('Asia/Makassar');
		$now = date('Y-m-d H:i:s');
		$object1 = array(
			'id_Lacak' => $idlacak,
			'Pengendara' => $pengendara,
			'Id_Alat' => $id,
			'Koordinat' => $coor,
			'Waktu' => $now,
		);
		$this->db->insert('daftarlacak', $object1);
		
		return "Berhasil";
	}
	
	public function GetCID($id){
	    $query = $this->db->query('SELECT cid FROM pengguna WHERE id_Pengguna IN (SELECT id_Pengguna FROM pemilik WHERE id_Alat="'.$id.'");');
	    return $query->result();
	}
	
	public function GetSetCID($user, $pass, $cid){
	    $this->db->where('username',$user);
		$this->db->where('password',$pass);
		$query = $this->db->get('pengguna');
		if ($query->num_rows()>0) {
			$this->db->set('cid',$cid);
			$this->db->where('id_Pengguna',$query->row()->id_Pengguna);
			$this->db->update('pengguna');
			return "ada";
		}
		else {
			return "tidak ada";
		}
	}
	
	public function GetCheckCID($cid){
	    $this->db->where('cid',$cid);
	    $query = $this->db->get('pengguna');
	    if ($query->num_rows()>0) {
			return "ada";
		}
		else {
			return "tidak ada";
		}
	}
}