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
	 	 $this->load->view("_partials/header_Dokter");
	 	 $this->load->view("isi/Hasilkonsultasi");
	 	 $this->load->view("_partials/footer");
	}
}
?>
