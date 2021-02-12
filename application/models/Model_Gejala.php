<?php

class Model_Gejala extends CI_Model {
	function ambil_data(){
		return $this->db->get('tbl_gejala')->result();
	}
}

?>