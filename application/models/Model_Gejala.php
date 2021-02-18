<?php

class Model_Gejala extends CI_Model {

	function ambil_data(){
		return $this->db->get('tbl_gejala')->result();
	}

     function ambil_nilai(){
          return $this->db->get('tbl_nilai')->result();
     }
}

?>