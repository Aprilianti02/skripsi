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
	 	 $this->load->view("admin/_partials/header_Bumil");
	 	 $this->load->view("admin/isi/Hasilkonsultasi");
	 	 $this->load->view("admin/_partials/footer");
	}
}
?>
