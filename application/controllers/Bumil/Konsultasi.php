<?php 

     class Konsultasi extends CI_Controller
     {
          function __construct()
          {
               parent::__construct();
               $this->load->model("Model_Gejala");
          }

          public function index()
          {
               if ($this->session->userdata('jabatan') != 'Pasien' || $this->session->userdata('status') != "login") {
                    redirect(base_url('login'));
               }
               $data['gejala']     = $this->Model_Gejala->ambil_data();
               $this->load->view("_partials/header_Bumil");
               $this->load->view("isi/bumil/konsultasi", $data);
               $this->load->view("_partials/footer");
          }
          
     }
     

?>