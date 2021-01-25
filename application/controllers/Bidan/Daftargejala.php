<?php

  /**
   * 
   */
  	class Daftargejala extends CI_Controller
  	{
  	
	  	function __construct()
	  	{
	  		parent::__construct();
	  	}

	  	public function index()
	    {
	         $this->load->view("admin/_partials/header_Bidan");
		     $this->load->view("admin/isi/tabelgejala"); // yang diubah ini!!!!!!!!!!!!
		     $this->load->view("admin/_partials/footer");
		}
	}
?>
   