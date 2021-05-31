<?php 

     class Register extends CI_Controller
     {
          function __construct(){
               parent::__construct();
               $this->load->model("Register_model");
          }

          public function index()
          {
               # code...
               $data['kode']  = $this->Register_model->generate_code();
               $this->load->view("_partials/Login/header_login");
               $this->load->view("isi/register", $data);
               $this->load->view("_partials/Login/footer_login");
          }

          function tambah(){
               $kode_pasien   = $this->input->post("kode_pasien");
               $nama          = $this->input->post("nama");
               $tgl_lahir     = $this->input->post("tgl_lahir");
               $wilayah       = $this->input->post("wilayah");
               $alamat        = $this->input->post("alamat");
               $username      = $this->input->post("username");
               $pass          = $this->input->post("pass");

               $data = [
                    'kode_pasien'  => $kode_pasien,
                    'nama'         => $nama,
                    'tgl_lahir'    => $tgl_lahir,
                    'wilayah'      => $wilayah,
                    'alamat'       => $alamat,
                    'username'     => $username,
                    'pass'         => $pass
               ];

               $this->Register_model->tambah_data($data);
               redirect(base_url("login"));
          }
     }
     
?>