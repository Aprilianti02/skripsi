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
 		    $this->load->view("/_partials/header_Bidan");
			$this->load->view("/isi/Bidan/tabelpasien"); // yang diubah ini!!!!!!!!!!!!
			$this->load->view("/_partials/footer");
 	}
 } 
?>