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
		if ($this->session->userdata('jabatan') != 'Dokter' || $this->session->userdata('status') != "login") {
			redirect(base_url('login'));
		}
		$this->load->view("_partials/header_Dokter");
	    	$this->load->view("isi/Dokter/Petunjuk"); // yang diubah ini!!!!!!!!!!!!
		$this->load->view("_partials/footer");
	}

}