<?php 

     class Riwayat extends CI_Controller 
     {
          function __construct()
	     {
               parent::__construct();
               $this->load->model("Model_Gejala");
               $this->load->model("Pakar_model");
          }

          function index()
          {
               if ($this->session->userdata('jabatan') != 'Pasien' || $this->session->userdata('status') != "login") {
			     redirect(base_url('login'));
		     }
               $data["riwayat"] = $this->Model_Gejala->get_riwayat_for_pasien($this->session->userdata('kode_pasien'));
		     $this->load->view("_partials/header_Bumil");
		     $this->load->view("isi/Bumil/Riwayat", $data); // yang diubah ini!!!!!!!!!!!!
		     $this->load->view("_partials/footer");
          }
     }
     

?>