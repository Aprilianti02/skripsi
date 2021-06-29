<?php 

/**
 * 
 */
class Login extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("Pakar_model");
		$this->load->model("Pasien_model");
	}

	public function index ()
	{
		if ($this->session->userdata("status") == "login") {
			if ($this->session->userdata("jabatan") == "Dokter") {
				redirect(base_url("dokter/beranda"));
			}else if ($this->session->userdata("jabatan") == "Bidan") {
				redirect(base_url("bidan/beranda"));
			}else if ($this->session->userdata("jabatan") == "Pasien") {
				redirect(base_url("bumil/beranda"));
			}
		}
		 $this->load->view("_partials/Login/header_login");
		 $this->load->view("isi/login"); // yang diubah ini!!!!!!!!!!!!
		 $this->load->view("_partials/Login/footer_login");
	}
	
	function action() {
		$username = $this->input->post('username'); //mengambil data username dari tampilan
		$pass 	  = $this->input->post('pass'); // mengambil data password dari tampilan
		$data1 	  = $this->Pakar_model->ambil_data(); // mengambil data pakar dari database 
		foreach ($data1 as $pakar) { //menampilkan semua data pakar
			if ($username == $pakar->username) { // jika username sama dengan username di database
				if ($pass == $pakar->pass) { // jika password sama dengan password di database
					if ($pakar->jabatan ==  "Dokter") { // jika jabatan = dokter maka
						$data = [
							'kode_pakar'	=> $pakar->kode_pakar,
							'nama'			=> $pakar->nama_pakar,
							'jabatan'		=> $pakar->jabatan,
							'status'		=> 'login'
						];
						// break;
						$this->session->set_userdata($data);
						redirect(base_url("dokter/beranda"));
					}else if ($pakar->jabatan == "Bidan") { // tidak jika jabatan = bidan maka
						echo $pakar->jabatan;
						$data = [
							'kode_pakar'	=> $pakar->kode_pakar,
							'nama'		    => $pakar->nama_pakar,
							'jabatan'		=> $pakar->jabatan,
							'status'		=> 'login'
						];
						// break;
						$this->session->set_userdata($data);
						redirect(base_url("bidan/beranda"));
					}
					else{ // jabatan tidak ada maka cek bumil
						// echo "pasien";
						$this->cek_bumil($username, $pass);
					}
				}else{ // password tidak sama maka cekbumil
					// echo "pasien";
					$this->cek_bumil($username, $pass);
				}				
			}
		}
		$this->cek_bumil($username, $pass); // username tidak terdaftar di tabel pakar maka cek bumil
	}

	function cek_bumil($username, $pass){
		$data2 	= $this->Pasien_model->ambil_data(); //
		foreach ($data2 as $pasien) { //Menampilkan semua data pasien
			if ($username == $pasien->username) { //jika username sama dengan username yang ada di database
				if ($pass == $pasien->pass) { //jika passwrd sama dengan passwrd yang ada di database
					$data = [
						'kode_pasien'	=> $pasien->kode_pasien,
						'nama'		    => $pasien->nama,
						'tgl_lahir'	    => $pasien->tgl_lahir,
						'wilayah'		=> $pasien->wilayah,
						'alamat'		=> $pasien->alamat,
						'jabatan'		=> 'Pasien',
						'status'		=> 'login'
					];
					// break;
					$this->session->set_userdata($data); //membuat session login
					redirect(base_url("bumil/beranda")); //pindah halaman berandanya bumil
				}
				else {
					$data = ['msg' => "Username atau Password Salah !!!"]; //jika tidak maka usernamedan pasword salah
					$this->session->set_userdata($data); //membuat sesion lagi
					redirect(base_url("login")); //pindah halaman berandanya login
				}
			}
		}
		$data = ['msg' => "Username atau Password Salah !!!"];
		$this->session->set_userdata($data);
		redirect(base_url("login"));
	}

	function logout() {
		$this->session->sess_destroy();
		redirect(base_url("login"));
	}
}
?>