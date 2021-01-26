<?php

/**
 * 
 */
class Petunjuk extends CI_controller
{
	
	function __construct()
	{
		parent::__construct();

	}
	public function index ()
	{
		$this->load->view("_partials/header_Bidan");
	    $this->load->view("isi/Bidan/Petunjuk"); // yang diubah ini!!!!!!!!!!!!
		$this->load->view("_partials/footer");
	}

}