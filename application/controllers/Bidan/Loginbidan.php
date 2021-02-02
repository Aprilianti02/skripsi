<?php 

/**
 * 
 */
class loginbidan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function index ()
	{
		 $this->load->view("_partials/header_Bidan");
		 $this->load->view("isi/Bidan/login"); // yang diubah ini!!!!!!!!!!!!
		 $this->load->view("_partials/footer");
	}	
	}
}
