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
			}else if ($this->session->userdata("jabatan") == "Bumil") {
				redirect(base_url("bumil/beranda"));
			}
		}
		 $this->load->view("_partials/Login/header_login");
		 $this->load->view("isi/login"); // yang diubah ini!!!!!!!!!!!!
		 $this->load->view("_partials/Login/footer_login");
	}
	
	function action() {
		$username = $this->input->post('username');
		$pass 	= $this->input->post('pass');
		$data1 	= $this->Pakar_model->ambil_data();
		foreach ($data1 as $pakar) {
			if ($username == $pakar->username) {
				if ($pass == $pakar->pass) {
					if ($pakar->jabatan ==  "Dokter") {
						$data = [
							'kode_pakar'	=> $pakar->kode_pakar,
							'nama'		=> $pakar->nama_pakar,
							'jabatan'		=> $pakar->jabatan,
							'status'		=> 'login'
						];
						// break;
						$this->session->set_userdata($data);
						redirect(base_url("dokter/beranda"));
					}else if ($pakar->jabatan == "Bidan") {
						$data = [
							'kode_pakar'	=> $pakar->kode_pakar,
							'nama'		=> $pakar->nama_pakar,
							'jabatan'		=> $pakar->jabatan,
							'status'		=> 'login'
						];
						// break;
						$this->session->set_userdata($data);
						redirect(base_url("bidan/beranda"));
					}
					else{
						$this->cek_bumil($username, $pass);
					}
				}
				else{
					$this->cek_bumil($username, $pass);
				}				
			}
			else{
				$this->cek_bumil($username, $pass);
			}
		}
	}

	function cek_bumil($username, $pass){
		$data2 	= $this->Pasien_model->ambil_data();
		foreach ($data2 as $pasien) {
			if ($username == $pasien->username) {
				echo $pass ." == ".$pasien->pass;
				if ($pass == $pasien->pass) {
					$data = [
						'kode_pasien'	=> $pasien->kode_pasien,
						'nama'		=> $pasien->nama,
						'tgl_lahir'	=> $pasien->tgl_lahir,
						'wilayah'		=> $pasien->wilayah,
						'alamat'		=> $pasien->alamat,
						'jabatan'		=> 'Pasien',
						'status'		=> 'login'
					];
					// break;
					$this->session->set_userdata($data);
					redirect(base_url("bumil/beranda"));
				}
				else {
					echo "gagal";
				}
			}
		}
	}

	function logout() {
		$this->session->sess_destroy();
		redirect(base_url("login"));
	}
}
?>