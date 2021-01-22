<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class Welcometo extends CI_Controller {

	function __construct(){
		parent::__construct();
	    $this->load->helper('html');
	}

	public function index(){
		$this->load->view('Welcometo');
	}

}