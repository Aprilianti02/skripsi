<?php 

/**
 * 
 */
class Beranda extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function index ()
	{
		if ($this->session->userdata('jabatan') != 'Pasien' || $this->session->userdata('status') != "login") {
			redirect(base_url('login'));
		}
		     $this->load->view("_partials/header_Bumil");
		     $this->load->view("isi/Bumil/Beranda"); // yang diubah ini!!!!!!!!!!!!
		     $this->load->view("_partials/footer");
	}
}
?>