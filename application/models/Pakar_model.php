<?php 

     class Pakar_model extends CI_Model
     {
          function ambil_data(){
               return $this->db->get("tbl_pakar")->result();
          }
     }
     

?>