<?php

/**
 * 
 */
class Hasilkonsultasi extends CI_Controller
{
	
	protected $array_gejala = [];

	function __construct()
	{
	     parent::__construct();
		$this->load->model("Model_Gejala");
		$this->load->model("Pakar_model");
	}

	public function index()
	{
		if ($this->session->userdata('jabatan') != 'Pasien' || $this->session->userdata('status') != "login") {
			redirect(base_url('login'));
		}

		$data['pakar'] = $this->Pakar_model->ambil_data();
		$data["hasil"] = $this->perhitungan();
		// $this->session->set_userdata('data_gejala_pasien', $this->array_gejala);
	 	// $this->load->view("/_partials/header_Bumil");
	 	// $this->load->view("/isi/Bumil/hasil", $data);
	 	// $this->load->view("/_partials/footer");
	}
	function perhitungan(){
		$nilai1 		= $this->Model_Gejala->ambil_nilai();
		$data 		= $this->Model_Gejala->ambil_data();
		if (isset($_POST['gejala']) && is_array($_POST['gejala'])) {
			$this->array_gejala = $_POST['gejala'];
			$nilai_hitung = [];
			$gejalainput1 = [];
			$gejalainput2 = [];
			$gejalainput3 = [];
			$gejalainput4 = [];
			$gejalainput5 = [];
			for ($i=0; $i < count($this->array_gejala); $i++) { 
				$batas = str_pad($i+1, 2, "0", STR_PAD_LEFT);
               	$kode_gejala = "G" . $batas;
				$data = ["kode_gejala" => $kode_gejala, "cf" => $this->array_gejala[$i], 'cf_baru'	=> ''];
				array_push($gejalainput1,$data);
				array_push($gejalainput2,$data);
				array_push($gejalainput3,$data);
				array_push($gejalainput4,$data);
				array_push($gejalainput5,$data);
			}
		}

		foreach ($nilai1 as $pk) {
			if ($pk->kode_pakar == "PK01") {
				for ($i=0; $i < count($gejalainput1) ; $i++) { 
					if ($gejalainput1[$i]['kode_gejala'] == $pk->kode_gejala) {
						$cf		= $gejalainput1[$i]['cf'] * $pk->cf_pakar;
						$gejalainput1[$i]['cf_baru'] = $cf;
					}
				}
			}elseif ($pk->kode_pakar == "PK02") {
				for ($i=0; $i < count($gejalainput2) ; $i++) { 
					if ($gejalainput2[$i]['kode_gejala'] == $pk->kode_gejala) {
						$cf		= $gejalainput2[$i]['cf'] * $pk->cf_pakar;
						echo "<pre>";
						echo "cf PK02		= ".$gejalainput2[$i]['cf']." * ".$pk->cf_pakar." = ".$cf;
						echo "</pre>";
						$gejalainput2[$i]['cf_baru'] = $cf;
					}
				}
			}elseif ($pk->kode_pakar == "PK03") {
				for ($i=0; $i < count($gejalainput3) ; $i++) { 
					if ($gejalainput3[$i]['kode_gejala'] == $pk->kode_gejala) {
						$cf		= $gejalainput3[$i]['cf'] * $pk->cf_pakar;
						echo "<pre>";
						echo "cf PK03		= ".$gejalainput3[$i]['cf']." * ".$pk->cf_pakar." = ".$cf;
						echo "</pre>";
						$gejalainput3[$i]['cf_baru'] = $cf;
					}
				}
			}elseif ($pk->kode_pakar == "PK04") {
				for ($i=0; $i < count($gejalainput4) ; $i++) { 
					if ($gejalainput4[$i]['kode_gejala'] == $pk->kode_gejala) {
						$cf		= $gejalainput4[$i]['cf'] * $pk->cf_pakar;
						echo "<pre>";
						echo "cf PK04		= ".$gejalainput4[$i]['cf']." * ".$pk->cf_pakar." = ".$cf;
						echo "</pre>";
						$gejalainput4[$i]['cf_baru'] = $cf;
					}
				}
			}elseif ($pk->kode_pakar == "PK05") {
				for ($i=0; $i < count($gejalainput5) ; $i++) { 
					if ($gejalainput5[$i]['kode_gejala'] == $pk->kode_gejala) {
						$cf		= $gejalainput5[$i]['cf'] * $pk->cf_pakar;
						echo "<pre>";
						echo "cf PK05		= ".$gejalainput5[$i]['cf']." * ".$pk->cf_pakar." = ".$cf;
						echo "</pre>";
						$gejalainput5[$i]['cf_baru'] = $cf;
					}
				}
			}
		}
		array_push($nilai_hitung, $gejalainput1);
		array_push($nilai_hitung, $gejalainput2);
		array_push($nilai_hitung, $gejalainput3);
		array_push($nilai_hitung, $gejalainput4);
		array_push($nilai_hitung, $gejalainput5);
		$hasil = [];
		$rata2 = [];
		$total_cf = 0;
		for ($a=0; $a < count($nilai_hitung); $a++) { 
			$batas = str_pad($a+1, 2, "0", STR_PAD_LEFT);
               $kode_pakar = "PK" . $batas;
			echo $kode_pakar."\n";
			for ($i=0; $i < count($nilai_hitung[$a]) ; $i++) {
				// echo "<pre>";
				// print_r($nilai_hitung[$a][$i]);
				// echo "</pre>";
				if ($i == 0) {
					$cfold = $nilai_hitung[$a][$i]['cf_baru'];
				}else{
					$cfold = $cfcombine;
				}
				if ($i == (count($nilai_hitung[$a]) - 1)) {
					# code...
					break;
				}
				
				$b = $i+1;
				echo "<pre>";
				$cfcombine = $cfold +  $nilai_hitung[$a][$i+1]['cf_baru'] * (1 - $cfold);
				echo "cfcombine = ".$cfold." +  ".$nilai_hitung[$a][$i+1]['cf_baru']." * (1 - ".$cfold.") = ". $cfcombine;
				$cfcombine = round($cfcombine, 3);
				echo "</pre>";
				
			}
			echo "<pre>";
			$total_cf = $total_cf + $cfcombine;
			echo "total_cf = ".$total_cf." + ".$cfcombine." = ". $total_cf;
			$hasil_cf = $cfcombine * 100 . "%";
			echo "hasil_cf = ".$cfcombine." * ". 100 ." = ". $hasil_cf;
			$data = ["kode_pakar" => $kode_pakar, "hasil" => $hasil_cf];
			echo "</pre>";
			array_push($hasil, $data);
		}
		$rata2_cf = ($total_cf/5) * 100;
		// array_push($rata2, );
		array_push($hasil, ["kode_pakar" => "", "hasil" => "", ["rata2_cf" => $rata2_cf]]);
		// echo $hasil;
		$this->session->set_userdata('hasil', $hasil);
		return $hasil;
	}
	
	function coba(){
		$kode_periksa	= $this->Model_Gejala->kode_periksa();
		$kode_pasien	= $this->input->post("kode_pasien");
		$hasil		= $this->session->userdata('hasil');
		$data_gejala_pasien = $this->session->userdata('data_gejala_pasien');
		
		$data1 		= [
			'kode_periksa'		=> $kode_periksa,
			'kode_pasien'		=> $kode_pasien,
			'nilai_gejala1'	=> $data_gejala_pasien[0],
			'nilai_gejala2'	=> $data_gejala_pasien[1],
			'nilai_gejala3'	=> $data_gejala_pasien[2],
			'nilai_gejala4'	=> $data_gejala_pasien[3],
			'nilai_gejala5'	=> $data_gejala_pasien[4],
			'nilai_gejala6'	=> $data_gejala_pasien[5],
			'nilai_gejala7'	=> $data_gejala_pasien[6],
			'nilai_gejala8'	=> $data_gejala_pasien[7],
			'nilai_gejala9'	=> $data_gejala_pasien[8],
			'nilai_gejala10'	=> $data_gejala_pasien[9],
			'nilai_gejala11'	=> $data_gejala_pasien[10],
			'nilai_gejala12'	=> $data_gejala_pasien[11],
			'nilai_gejala13'	=> $data_gejala_pasien[12],
			'nilai_gejala14'	=> $data_gejala_pasien[13],
			'nilai_gejala15'	=> $data_gejala_pasien[14],
			'rata2'			=> $hasil[5][0]['rata2_cf']
		];

		$this->Model_Gejala->simpan_hasil($data1);
		foreach ($hasil as $key) {
			if ($key['kode_pakar'] != "" && $key['hasil'] != '') {
				# code...
				$data2 = [
					"kode_periksa"	=> $kode_periksa,
					"kode_pakar"	=> $key['kode_pakar'],
					"nilai_hasil"	=> $key['hasil']
				];
				$this->Model_Gejala->simpan_detail($data2);
			}
		}
		redirect(base_url("bumil/riwayat"));
	}

	function ajax(){
		$data = $this->Model_Gejala->get_riwayat();
		echo json_encode($data);
	}

	function cetak_pdf(){
		$data['pakar'] 	= $this->Pakar_model->ambil_data();
		$data['gejala']	= $this->Model_Gejala->ambil_data();
		$data['hasil']		= $this->session->userdata('hasil');
		$this->load->view("/isi/Bumil/hasil_pdf", $data);
	}
}
?>
