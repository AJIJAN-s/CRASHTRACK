<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	function __construct() {
		parent:: __construct();
		$this->load->model('Main_m');
	}

	public function index(){
		$this->Security_m->GetSecurity();
		$s_idpengguna = $this->session->userdata('idpengguna');
		$data['device'] = $this->Main_m->GetDevice($s_idpengguna);
		$this->load->view('header');
		$this->load->view('topbar');
		$this->load->view('sidebar');
		$this->load->view('dashboard');
		$this->load->view('table');
		$this->load->view('map');
		$this->load->view('profile');
		$this->load->view('user');
		$this->load->view('device');
		$this->load->view('connection');
		$this->load->view('footer', $data);
	}
	public function profile(){
		$this->Security_m->GetSecurity();
		$s_idpengguna = $this->session->userdata('idpengguna');
		// $s_username = $this->session->userdata('username');
		$data['account'] = $this->Main_m->GetAccount($s_idpengguna);
		$data['userall'] = $this->Main_m->GetUserAll($s_idpengguna);
		$data['user'] = $this->Main_m->GetUser($s_idpengguna);
		$data['idalt'] = $this->Main_m->GetId($this->input->post('id'));
		$data['idalatku'] = $this->Main_m->GetIdAlatKu($s_idpengguna);
		$data['device'] = $this->Main_m->GetDevice($s_idpengguna);

		// $data = $this->Main_m->GetAccount($username);
		// $data['account'] = $this->Main_m->GetAccount($username);
		// $data['userall'] = $this->Main_m->GetUserAll($username);
		// $data['user'] = $this->Main_m->GetUser($username);
		// $data['idalt'] = $this->Main_m->GetId($this->input->post('id'));
		// // $data['user'] = $this->Main_m->GetUserAlat($username);
		// $data['idalatku'] = $this->Main_m->GetIdAlatKu($username);
		// // $data['idalat'] = $this->Main_m->GetIdAlat($username);
		// $data['device'] = $this->Main_m->GetDevice($username);
		// // $data = $this->Main_m->GetAccount($username);
		echo json_encode($data);
	}
	public function crash(){
	    $this->Security_m->GetSecurity();
		$s_idpengguna = $this->session->userdata('idpengguna');
	    $data['list'] = $this->Main_m->GetCrash($s_idpengguna);
	    echo json_encode($data);
	}
	public function DeleteCrash(){
	    $this->Security_m->GetSecurity();
		$id = $this->input->post('id');
		$go = $this->Main_m->GetDeleteCrash($id);
		echo json_encode($go);
	}
	public function UpdateDevice(){
		$this->Security_m->GetSecurity();
		$data = $this->Main_m->GetDevice2($this->input->post('id'));
		echo json_encode($data);
	}
	public function ParentUser(){
		$this->Security_m->GetSecurity();
		$s_idpengguna = $this->session->userdata('idpengguna');
		// $username = $this->session->userdata('username');
		$data['parent'] = $this->Main_m->GetParent($s_idpengguna);
		echo json_encode($data);
	}
	// public function index()
	// {
	// 	$this->Security_m->GetSecurity();
	// 	$data['device'] = $this->Main_m->GetDevice();
	// 	$this->load->view('index', $data);
	// }

	// public function dashboard()
	// {
	// 	$this->Security_m->GetSecurity();
	// 	$aku = $this->uri->segment(3);
	// 	if ($this->uri->segment(3) == "616a696a616e") {
	// 		$this->load->view('dashboard');
	// 	}
	// 	else{
	// 		echo "Page Not Found";
	// 	}
	// }

	// public function profile()
	// {
	// 	$this->Security_m->GetSecurity();
	// 	$aku = $this->uri->segment(3);
	// 	if ($this->uri->segment(3) == "616a696a616e") {
	// 		$data['account'] = $this->Main_m->GetAccount();
	// 		$data['device'] = $this->Main_m->GetDevice();
	// 		// foreach ($data as $account) {
	// 		// 	echo "Nama Pengguna:".$account['nm_Pengguna']."<br/>";
	// 		// 	echo "Username:".$account['username']."<br/>";
	// 		// 	echo "Password:".$account['password']."<br/>";
	// 		// 	echo "Email:".$account['email']."<br/>";
	// 		// }
	// 		$this->load->view('profile', $data);
	// 	}
	// 	else{
	// 		echo "Page Not Found";
	// 	}
	// }

	// public function table()
	// {
	// 	$this->Security_m->GetSecurity();
	// 	$aku = $this->uri->segment(3);
	// 	if ($this->uri->segment(3) == "616a696a616e") {
	// 		$this->load->view('table');
	// 	}
	// 	else{
	// 		echo "Page Not Found";
	// 	}
	// }

	// public function map()
	// {
	// 	$this->Security_m->GetSecurity();
	// 	$aku = $this->uri->segment(3);
	// 	if ($this->uri->segment(3) == "616a696a616e") {
	// 		$this->load->view('map');
	// 	}
	// 	else{
	// 		echo "Page Not Found";
	// 	}
	// }

	public function UpdateProfile(){
		$this->Security_m->GetSecurity();
		$idpengguna = $this->input->post('idacc');
		$fullname = $this->input->post('nmacc');
		$username = $this->input->post('useacc');
		$password = $this->input->post('pasacc');
		$email = $this->input->post('emacc');
		$cid = $this->input->post('cidacc');
		$object = array(
            'id_Pengguna' => $idpengguna,
            'nm_Pengguna' => $fullname,
            'username' => $username,
            'password' => $password,
            'email' => $email,
            'cid' => $cid,
            );
		$go = $this->Main_m->GetUpdateProfile($object);
		echo json_encode($go);
	}

	public function AddUser(){
		$this->Security_m->GetSecurity();
		$count1 = $this->Main_m->GetCountPengguna();
		$idpengguna = $count1+1;
		$fullname = $this->input->post('u-name');
		$username = $this->input->post('u-username');
		$password = $this->input->post('u-password');
		$email = $this->input->post('u-email');
		$idalat = $this->input->post('idalatnya');
		$object1 = array(
            'id_Pengguna' => $idpengguna,
            'nm_Pengguna' => $fullname,
            'username' => $username,
            'password' => $password,
            'email' => $email,
            'cid' => 'not set',
            'parent' => 'no',
            );
		// foreach ($idalat as $key => $value) {
		// 	$count2 = $this->Main_m->GetCountPemilik();
		// 	$idpemilik = $count2+1;
		// }
		// $object2 = array(
  //           'id_Pemilik' => $idpemilik,
  //           'id_Alat' => $idalat,
  //           'id_Pengguna' => $idpengguna,
  //           );
		$go = $this->Main_m->GetAddUser($object1, $idalat);
		echo json_encode($go);
	}

	public function DeleteUser(){
		$this->Security_m->GetSecurity();
		$id = $this->input->post('id');
		$go = $this->Main_m->GetDeleteUser($id);
		echo json_encode($go);
	}

	public function AddDevice(){
		$this->Security_m->GetSecurity();
		$iddevice = $this->input->post('d-id');
		$noplat = $this->input->post('d-noplat');
		$nmp = $this->input->post('d-nmp');
		$merk = $this->input->post('d-merk');
		$tipe = $this->input->post('d-tipe');
		$s_idpengguna = $this->session->userdata('idpengguna');
		// $username = $this->session->userdata('username');
		$object1 = array(
            'id_Alat' => $iddevice,
            'no_Plat' => $noplat,
            'nm_Pengendara' => $nmp,
            'merk' => $merk,
            'tipe' => $tipe,
            );
		$go = $this->Main_m->GetAddDevice($object1, $s_idpengguna);
		echo json_encode($go);
	}

	public function EditDevice(){
		$this->Security_m->GetSecurity();
		$iddevice = $this->input->post('d-id');
		$noplat = $this->input->post('d-noplat');
		$nmp = $this->input->post('d-nmp');
		$merk = $this->input->post('d-merk');
		$tipe = $this->input->post('d-tipe');
		$object1 = array(
            'id_Alat' => $iddevice,
            'no_Plat' => $noplat,
            'nm_Pengendara' => $nmp,
            'merk' => $merk,
            'tipe' => $tipe,
            );
		$go = $this->Main_m->GetEditDevice($object1);
		echo json_encode($go);
	}
	
	//Gunakan jika pesan dalam bentuk NMEA (GPRMC)
	public function GetDataDua(){
	    $coor = $this->input->get('coor');
	    $id = $this->input->get('id');
	    
        $gprmc = explode(',',$coor);
        $x = 0;
        $a = 0;
        $z = 0;
        while($a != 99) {
        	if (strpos($gprmc[$x],'GPRMC')){
                $a = 99;
                $z = $x;
            }
          $x++;
        }
        $deg = substr($gprmc[$z+3], 0, 2);
        $min = substr($gprmc[$z+3], 2, 8);
        $deg2 = substr($gprmc[$z+5], 0, 3);
        $min2 = substr($gprmc[$z+5], 3, 8);
        $data1 = $deg+(($min*60)/3600);
        $data2 = $deg2+(($min2*60)/3600);
        $latitude= $gprmc[$z+4];
        $longitude= $gprmc[$z+6];
        if ($latitude == 'S' && $longitude == 'W'){
            $data = 'https://maps.google.com/maps?q=-'.$data1.',-'.$data2;
            $addcoor = '-'.round($data1,9).',-'.round($data2,9);
        }
        else if ($latitude == 'S'){
            $data = 'https://maps.google.com/maps?q=-'.$data1.','.$data2;
            $addcoor = '-'.round($data1,9).','.round($data2,9);
        }
        else if ($longitude == 'W'){
            $data = 'https://maps.google.com/maps?q='.$data1.',-'.$data2;
            $addcoor = round($data1,9).',-'.round($data2,9);
        }
        else {
            $data = 'https://maps.google.com/maps?q='.$data1.','.$data2;
            $addcoor = round($data1,9).','.round($data2,9);
        }
        $ll=strpos($addcoor, ",");
	    $latitided=substr($addcoor,0,($ll));
        $longituded=substr($addcoor,($ll+1));
	    $go = $this->Main_m->GetAddData($addcoor, $id);
	    $path = "https://api.telegram.org/bot1794184598:AAEt_W92dpsUnHR3p1Xz2IlmuNrb-OkD23s";
	    $cid = $this->Main_m->GetCID($id);
	    foreach ($cid as $row){
	       // echo $row->cid;
	       if ($row->cid != "not set"){
	           file_get_contents($path."/sendMessage?chat_id=".$row->cid."&text=*ALERT !!! CRASH DETECTED !!!*%0A%0ACrash detected on GPS coordinate:%0A[".$addcoor."](https://crashtrack.tk/)%0A%0A_Click_ the map below to track position and direction.&parse_mode=Markdown");
	           file_get_contents($path."/sendLocation?chat_id=".$row->cid."&latitude=".$latitided."&longitude=".$longituded);
	       }
	    };
	}
	
	public function GetData(){
	    $coor = $this->input->get('coor');
	    $id = $this->input->get('id');
	    $c=strpos($coor, ",");
	    $latituded=substr($coor,0,($c));
        $longituded=substr($coor,($c+1));
        $addcoor = $latituded.','.$longituded;
        $go = $this->Main_m->GetAddData($addcoor, $id);
	    $path = "https://api.telegram.org/bot1794184598:AAEt_W92dpsUnHR3p1Xz2IlmuNrb-OkD23s";
	    $cid = $this->Main_m->GetCID($id);
	    foreach ($cid as $row){
	       // echo $row->cid;
	       if ($row->cid != "not set"){
	           file_get_contents($path."/sendMessage?chat_id=".$row->cid."&text=*ALERT !!! CRASH DETECTED !!!*%0A%0ACrash detected on GPS coordinate:%0A[".$addcoor."](https://crashtrack.tk/)%0A%0A_Click_ the map below to track position and direction.&parse_mode=Markdown");
	           file_get_contents($path."/sendLocation?chat_id=".$row->cid."&latitude=".$latituded."&longitude=".$longituded);
	       }
	    };
	}
	
	public function ServiceControl(){
	    $path = "https://api.telegram.org/bot1794184598:AAEt_W92dpsUnHR3p1Xz2IlmuNrb-OkD23s";
        $update = json_decode(file_get_contents("php://input"), TRUE);
        $chatId = $update["message"]["chat"]["id"];
        $chatUs = $update["message"]["chat"]["username"];
        $message = $update["message"]["text"];
        if ($message=="/start") {
            file_get_contents($path."/sendMessage?chat_id=".$chatId."&text=Hello <i>".$chatUs."</i>%0AHere is Your <b>CID</b>: <code>".$chatId."</code>%0APress that number to copy%0APlease set on <a href='https://crashtrack.tk'>Website</a>%0Aor you can set it via this bot by sending your <strong>username%23password</strong> that was registered on website&parse_mode=HTML");
        }else if (strpos($message, "#") !== false) {
            $c=strpos($message, "#");
            if ($c > 0 && ($c != strlen($message)-1) && (substr_count($message,"#") < 2)){
                file_get_contents($path."/sendMessage?chat_id=".$chatId."&text=Please wait a second..&parse_mode=Markdown");
                $username=substr($message,0,($c));
                $password=substr($message,($c+1));
                $go = $this->Main_m->GetSetCID($username, $password, $chatId);
                if ($go == "ada"){
                    file_get_contents($path."/sendMessage?chat_id=".$chatId."&text=*CID* Successfully set on website%0ANow this telegram account will get notification via this bot&parse_mode=Markdown");
                }else {
                    file_get_contents($path."/sendMessage?chat_id=".$chatId."&text=*CID* Failed set on website%0A_incorrect username or password_&parse_mode=Markdown");
                }
            }else{
                file_get_contents($path."/sendMessage?chat_id=".$chatId."&text=*CID* Failed to set on [website](https://crashtrack.tk)%0ACause _incorrect_ format%0AUse this format *username%23password*&parse_mode=Markdown");
            }
        }else if ($message=="/cid") {
            file_get_contents($path."/sendMessage?chat_id=".$chatId."&text=*CID* number: `".$chatId."`&parse_mode=Markdown");
        }else if($message=="/check"){
            $go = $this->Main_m->GetCheckCID($chatId);
            if ($go == "ada"){
                file_get_contents($path."/sendMessage?chat_id=".$chatId."&text=*CID* is already set on the website%0AThank you.&parse_mode=Markdown");
            }else {
                file_get_contents($path."/sendMessage?chat_id=".$chatId."&text=*CID* is not set on the website%0APlease set it by follow the instruction%0AThank you.&parse_mode=Markdown");
            }
        }else {
            file_get_contents($path."/sendMessage?chat_id=".$chatId."&text=*Command:*%0A%2Fstart - See instruction to set CID%0A%2Fcid - See CID number for this account%0A%2Fcheck - Check your CID is set or not on the website system%0AThanks for your attention.&parse_mode=Markdown");
        }
	}
	
	public function JsonData()
	{
	   // $path = "https://api.telegram.org/bot1794184598:AAEt_W92dpsUnHR3p1Xz2IlmuNrb-OkD23s";
	   // file_get_contents($path."/sendMessage?chat_id=1864881662&text=*ALERT !!!*&parse_mode=Markdown");
        $data = $this->input->get('data');
        if($data != '' || $data != null){
			$data_json = file_get_contents('assets/data.json');
			$data_array = json_decode($data_json, true);
			if(empty($data_array)){
			    $no = 1;
			}else{
			    $last = count($data_array);
			    $no = $last+1;
			}
			$append = array(
			    'No' => $no,
                'Data' => $data
            );
            $data_array[] = $append;
            $final_data = json_encode($data_array, JSON_PRETTY_PRINT);
            file_put_contents('assets/data.json', $final_data);
		}
	}
	
	public function jsonview()
	{
	    $data_json = file_get_contents('assets/data.json');
	    var_dump($data_json);
	}
	
	public function jsondel()
	{
	    file_put_contents('assets/data.json', json_decode("{}"));
	}
}