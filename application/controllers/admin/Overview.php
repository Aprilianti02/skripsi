<?php  
	/**
	 * 
	 */
	class Overview extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
		}
		public function index()
		{
			//load view admin/overview.php
			// $this->load->view("admin/overview");
			$this->load->view("admin/_partials/header");
			$this->load->view("admin/isi/coba"); // yang diubah ini!!!!!!!!!!!!
			$this->load->view("admin/_partials/footer");

		}
	}
?>