<?php

class M_data extend CI_Model {
	function ambil_data(){
		return $this->db->get('user');
	}
}