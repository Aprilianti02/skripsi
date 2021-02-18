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
			$data['gejala']	= $this->Model_Gejala->ambil_data(); 
	          $this->load->view("_partials/header_Bidan");
		     $this->load->view("isi/Bidan/tabelgejala", $data); // yang diubah ini!!!!!!!!!!!!
		     $this->load->view("_partials/footer");
		}

		function add_gejala() 
		{
			$this->load->view("_partials/header_bidan");
		     $this->load->view("isi/bidan/add_gejala"); // yang diubah ini!!!!!!!!!!!!
		     $this->load->view("_partials/footer");
		}
	}
?>
   