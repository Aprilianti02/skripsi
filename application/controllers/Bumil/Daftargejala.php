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
		     $this->load->view("_partials/header_Bumil");
		     $this->load->view("isi/Bumil/tabelgejala", $data); // yang diubah ini!!!!!!!!!!!!
		     $this->load->view("_partials/footer");
		}
		function coba()
		{
			$this->load->view("_partials/header_Bumil");
		     $this->load->view("isi/inputbumil"); // yang diubah ini!!!!!!!!!!!!
		     $this->load->view("_partials/footer");
		}
	}
?>
   