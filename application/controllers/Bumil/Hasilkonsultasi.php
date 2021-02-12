<?php

/**
 * 
 */
class Hasilkonsultasi extends CI_Controller
{
	
	function __construct()
	{
	     parent::__construct();
	}
	public function index()
	{
	 	 $this->load->view("/_partials/header_Bumil");
	 	 $this->load->view("/isi/Bumil/hasil");
	 	 $this->load->view("/_partials/footer");
	}
	function perhitungan(){
		
	}
}
?>
