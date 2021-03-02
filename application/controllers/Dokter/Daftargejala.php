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
			if ($this->session->userdata('jabatan') != 'Dokter' || $this->session->userdata('status') != "login") {
				redirect(base_url('login'));
			}
			$data['gejala'] 	= $this->Model_Gejala->ambil_data();
	         	$this->load->view("_partials/header_Dokter");
		     $this->load->view("isi/Dokter/tabelgejala", $data); // yang diubah ini!!!!!!!!!!!!
		     $this->load->view("_partials/footer");
		}

		function add_gejala() 
		{
			$this->load->view("_partials/header_dokter");
		     $this->load->view("isi/dokter/add_gejala"); // yang diubah ini!!!!!!!!!!!!
		     $this->load->view("_partials/footer");
		}
	}
?>
   