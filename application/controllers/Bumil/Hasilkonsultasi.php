<?php

/**
 * 
 */
class Hasilkonsultasi extends CI_Controller
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
	 	$this->load->view("/_partials/header_Bumil");
	 	$this->load->view("/isi/Bumil/hasil");
	 	$this->load->view("/_partials/footer");
	}
	function coba(){
		$nilai1 		= $this->Model_Gejala->ambil_nilai();
		$data 		= $this->Model_Gejala->ambil_data();
		$gejala1 		= $this->input->post("$gejala1"); 
		$gejala2 		= $this->input->post("$gejala2"); 
		$gejala3 		= $this->input->post("$gejala3"); 
		$gejala4 		= $this->input->post("$gejala4"); 
		$gejala5 		= $this->input->post("$gejala5"); 
		$gejala6		= $this->input->post("$gejala6"); 
		$gejala7 		= $this->input->post("$gejala7"); 
		$gejala8 		= $this->input->post("$gejala8"); 
		$gejala9 		= $this->input->post("$gejala9"); 
		$gejala10 	= $this->input->post("$gejala10"); 
		$gejala11 	= $this->input->post("$gejala11"); 
		$gejala12 	= $this->input->post("$gejala12"); 
		$gejala13 	= $this->input->post("$gejala13"); 
		$gejala14 	= $this->input->post("$gejala14"); 
		$gejala15 	= $this->input->post("$gejala15"); 
		// $gejala1 		= 0; 
		// $gejala2 		= 0.2; 
		// $gejala3 		= 0; 
		// $gejala4 		= 0.2; 
		// $gejala5 		= 0; 
		// $gejala6		= 0; 
		// $gejala7 		= 0; 
		// $gejala8 		= 0.2; 
		// $gejala9 		= 0; 
		// $gejala10 	= 0; 
		// $gejala11 	= 0.1; 
		// $gejala12 	= 0.2; 
		// $gejala13 	= 0; 
		// $gejala14 	= 0.2; 
		// $gejala15 	= 0.2;
		$gejalainput = array(
			["kode_gejala" => "G01", "cf" => $gejala1, 'cf_baru'	=> ''],		 
			["kode_gejala" => "G02", "cf" => $gejala2, 'cf_baru'	=> ''],
			["kode_gejala" => "G03", "cf" => $gejala3, 'cf_baru'	=> ''],
			["kode_gejala" => "G04", "cf" => $gejala4, 'cf_baru'	=> ''],
			["kode_gejala" => "G05", "cf" => $gejala5, 'cf_baru'	=> ''],
			["kode_gejala" => "G06", "cf" => $gejala6, 'cf_baru'	=> ''],
			["kode_gejala" => "G07", "cf" => $gejala7, 'cf_baru'	=> ''],
			["kode_gejala" => "G08", "cf" => $gejala8, 'cf_baru'	=> ''],
			["kode_gejala" => "G09", "cf" => $gejala9, 'cf_baru'	=> ''],
			["kode_gejala" => "G10", "cf" => $gejala10, 'cf_baru'	=> ''],
			["kode_gejala" => "G11", "cf" => $gejala11, 'cf_baru'	=> ''],
			["kode_gejala" => "G12", "cf" => $gejala12, 'cf_baru'	=> ''],
			["kode_gejala" => "G13", "cf" => $gejala13, 'cf_baru'	=> ''],
			["kode_gejala" => "G14", "cf" => $gejala14, 'cf_baru'	=> ''],
			["kode_gejala" => "G15", "cf" => $gejala15, 'cf_baru'	=> ''],
		);

		// foreach ($gejalainput as $key) {
		// 	echo '<pre>';
		// 	// print_r($key);
		// 	echo '</pre>';
		// }
		

		foreach ($nilai1 as $pk) {
			for ($i=0; $i < count($gejalainput) ; $i++) { 
				
				echo "<pre>";
				// echo $key['kode_gejala'];
				// echo $key['cf'];
				if ($gejalainput[$i]['kode_gejala'] == $pk->kode_gejala) {
					$cf		= $gejalainput[$i]['cf'] * $pk->cf_pakar;
					echo $cf;
					$gejalainput[$i]['cf_baru'] = $cf;
				}
				// echo $pk->kode_gejala. " : ". $pk->cf_pakar;
				echo "</pre>"; 
			}
		}
		
		for ($i=0; $i < count($gejalainput) ; $i++) {
			if ($i == 0) {
				$cfold = $gejalainput[$i]['cf_baru'];
			}else{
				$cfold = $cfcombine;
			}
			if ($i == (count($gejalainput) - 1)) {
				# code...
				break;
			} 
			echo "<pre>"; 
			echo 'iterasi ke : '. $i. "\n";
			
			$a = $i+1;
			$cfcombine = $cfold +  $gejalainput[$a]['cf_baru'] * (1 - $cfold);
			echo "CF Combine : ". $cfold ." + ".  $gejalainput[$a]['cf_baru'] ." * " ."(1 - ".$cfold.")". " = ". $cfcombine;
			$cfcombine = round($cfcombine, 3);

			echo "</pre>"; 

		}
		echo $cfcombine * 100 . "%";
	}

	function perhitungan(){
		$nilai1 		= $this->Model_Gejala->ambil_nilai(); 
		$gejala1 		= $this->input->post("$gejala1"); 
		$gejala2 		= $this->input->post("$gejala2"); 
		$gejala3 		= $this->input->post("$gejala3"); 
		$gejala4 		= $this->input->post("$gejala4"); 
		$gejala5 		= $this->input->post("$gejala5"); 
		$gejala6		= $this->input->post("$gejala6"); 
		$gejala7 		= $this->input->post("$gejala7"); 
		$gejala8 		= $this->input->post("$gejala8"); 
		$gejala9 		= $this->input->post("$gejala9"); 
		$gejala10 	= $this->input->post("$gejala10"); 
		$gejala11 	= $this->input->post("$gejala11"); 
		$gejala12 	= $this->input->post("$gejala12"); 
		$gejala13 	= $this->input->post("$gejala13"); 
		$gejala14 	= $this->input->post("$gejala14"); 
		$gejala15 	= $this->input->post("$gejala15"); 
		// $gejala1 		= 0; 
		// $gejala2 		= 0.2; 
		// $gejala3 		= 0; 
		// $gejala4 		= 0.2; 
		// $gejala5 		= 0; 
		// $gejala6		= 0; 
		// $gejala7 		= 0; 
		// $gejala8 		= 0.2; 
		// $gejala9 		= 0; 
		// $gejala10 	= 0; 
		// $gejala11 	= 0.1; 
		// $gejala12 	= 0.2; 
		// $gejala13 	= 0; 
		// $gejala14 	= 0.2; 
		// $gejala15 	= 0.2;
		$gejalainput = array(
			["kode_gejala" => "G01", "cf" => $gejala1, 'cf_baru'	=> ''],		 
			["kode_gejala" => "G02", "cf" => $gejala2, 'cf_baru'	=> ''],
			["kode_gejala" => "G03", "cf" => $gejala3, 'cf_baru'	=> ''],
			["kode_gejala" => "G04", "cf" => $gejala4, 'cf_baru'	=> ''],
			["kode_gejala" => "G05", "cf" => $gejala5, 'cf_baru'	=> ''],
			["kode_gejala" => "G06", "cf" => $gejala6, 'cf_baru'	=> ''],
			["kode_gejala" => "G07", "cf" => $gejala7, 'cf_baru'	=> ''],
			["kode_gejala" => "G08", "cf" => $gejala8, 'cf_baru'	=> ''],
			["kode_gejala" => "G09", "cf" => $gejala9, 'cf_baru'	=> ''],
			["kode_gejala" => "G10", "cf" => $gejala10, 'cf_baru'	=> ''],
			["kode_gejala" => "G11", "cf" => $gejala11, 'cf_baru'	=> ''],
			["kode_gejala" => "G12", "cf" => $gejala12, 'cf_baru'	=> ''],
			["kode_gejala" => "G13", "cf" => $gejala13, 'cf_baru'	=> ''],
			["kode_gejala" => "G14", "cf" => $gejala14, 'cf_baru'	=> ''],
			["kode_gejala" => "G15", "cf" => $gejala15, 'cf_baru'	=> ''],
		);

		// foreach ($gejalainput as $key) {
		// 	echo '<pre>';
		// 	// print_r($key);
		// 	echo '</pre>';
		// }
		

		foreach ($nilai1 as $pk) {
			for ($i=0; $i < count($gejalainput) ; $i++) { 
				
				echo "<pre>";
				// echo $key['kode_gejala'];
				// echo $key['cf'];
				if ($gejalainput[$i]['kode_gejala'] == $pk->kode_gejala) {
					$cf		= $gejalainput[$i]['cf'] * $pk->cf_pakar;
					echo $cf;
					$gejalainput[$i]['cf_baru'] = $cf;
				}
				// echo $pk->kode_gejala. " : ". $pk->cf_pakar;
				echo "</pre>"; 
			}
		}
		
		for ($i=0; $i < count($gejalainput) ; $i++) {
			if ($i == 0) {
				$cfold = $gejalainput[$i]['cf_baru'];
			}else{
				$cfold = $cfcombine;
			}
			if ($i == (count($gejalainput) - 1)) {
				# code...
				break;
			} 
			echo "<pre>"; 
			echo 'iterasi ke : '. $i. "\n";
			
			$a = $i+1;
			$cfcombine = $cfold +  $gejalainput[$a]['cf_baru'] * (1 - $cfold);
			echo "CF Combine : ". $cfold ." + ".  $gejalainput[$a]['cf_baru'] ." * " ."(1 - ".$cfold.")". " = ". $cfcombine;
			$cfcombine = round($cfcombine, 3);

			echo "</pre>"; 

		}
		echo $cfcombine * 100 . "%";
	}
}
?>
