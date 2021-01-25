<?php 

/**
  * 
  */
 class Daftarpasien extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 	}
 	
 	function index()
 	{
 		    $this->load->view("admin/_partials/header_Bidan");
			$this->load->view("admin/isi/tabelpasien"); // yang diubah ini!!!!!!!!!!!!
			$this->load->view("admin/_partials/footer");
 	}
 } 
?>