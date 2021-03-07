<?php

  /**
   * 
   */
  	class Daftargejala extends CI_Controller
  	{
  	
	  	function __construct()
	  	{
	  		parent::__construct();
			$this->load->model("Model_Gejala");
	  	}

	  	public function index()
	     {
			if ($this->session->userdata('jabatan') != 'Bidan' || $this->session->userdata('status') != "login") {
			redirect(base_url('login'));
		}
			$data['gejala']	= $this->Model_Gejala->ambil_data(); 
	          $this->load->view("_partials/header_Bidan");
		     $this->load->view("isi/Bidan/tabelgejala", $data); // yang diubah ini!!!!!!!!!!!!
		     $this->load->view("_partials/footer");
		}
	}
?>
   