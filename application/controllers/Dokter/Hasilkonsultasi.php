<?php

/**
 * 
 */
class Hasilkonsultasi extends CI_Controller
{
	
	function __construct()
	{
	     parent::__construct();
		$this->load->model("Model_Gejala");
	}
	public function index()
	{
		if ($this->session->userdata('jabatan') != 'Dokter' || $this->session->userdata('status') != "login") {
			redirect(base_url('login'));
		}
		$kode_pakar		= $this->session->userdata("kode_pakar");
		$data['riwayat']	= $this->Model_Gejala->get_riwayat_for_pakar($kode_pakar);
	 	 $this->load->view("_partials/header_Dokter");
	 	 $this->load->view("isi/Dokter/Hasilkonsultasi", $data);
	 	 $this->load->view("_partials/footer");
	}
}
?>
