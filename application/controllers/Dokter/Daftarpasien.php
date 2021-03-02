<?php 

/**
  * 
  */
 class Daftarpasien extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
		$this->load->model("Pasien_model");
 	}
 	
 	function index()
 	{
		if ($this->session->userdata('jabatan') != 'Dokter' || $this->session->userdata('status') != "login") {
			redirect(base_url('login'));
		}
		$data["pasien"]	= $this->Pasien_model->ambil_data();
 		$this->load->view("_partials/header_Dokter");
		$this->load->view("isi/Dokter/tabelpasien", $data); // yang diubah ini!!!!!!!!!!!!
		$this->load->view("_partials/footer");
	}

	function add_pasien()
	{
		$this->load->view("_partials/header_Dokter");
		$this->load->view("isi/Dokter/add_pasien"); // yang diubah ini!!!!!!!!!!!!
		$this->load->view("_partials/footer");
	}
	 
 } 
?>