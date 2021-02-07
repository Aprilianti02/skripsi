<?php 

/**
 * 
 */
class Login extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function index ()
	{
		 $this->load->view("_partials/Login/header_login");
		 $this->load->view("isi/login"); // yang diubah ini!!!!!!!!!!!!
		 $this->load->view("_partials/Login/footer_login");
	}	
}
?>
