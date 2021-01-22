<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Web extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['judul'] = "Halaman depan";
		$this->load->view('v_header',$data);
		$this->load->view('v_index2',$data);
		$this->load->view('v_footer',$data);
	}

	public function about(){
		$data['judul'] = "Halaman about";
		$this->load->view('v_header',$data);
		$this->load->view('v_about',$data);
		$this->load->view('v_footer',$data);
	}
}