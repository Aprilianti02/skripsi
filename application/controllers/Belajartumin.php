<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class Belajartumin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_data');	
	}

	public function index(){
	    $data['user'] = $this->m_data->ambil_data()->result();	
		$this->load->view('v_user.php,$data');
	}

}