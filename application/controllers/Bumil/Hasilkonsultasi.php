<?php

/**
 * 
 */
class Hasilperiksa extends CI_Controller
{
	
	function __construct()
	{
	     parent::__construct();
	}
	public function index()
	{
	 	 $this->load->view("/_partials/header_Bumil");
	 	 $this->load->view("/isi/Bumil/Hasilkonsultasi");
	 	 $this->load->view("/_partials/footer");
	}
}
?>
