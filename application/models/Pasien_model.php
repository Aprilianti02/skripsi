<?php 

     class Pasien_model extends CI_Model
     {
          function ambil_data()
          {
               return $this->db->get("tbl_pasien")->result();
          }
     }
     

?>