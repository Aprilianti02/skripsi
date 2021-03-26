<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<table style="width:100%">
		<thead>
			<tr>
				<th><img src="<?php echo base_url('img/1200px-Logo_Kabupaten_Probolinggo_-_Seal_of_Probolinggo_Regency.svg.png')?>"
						alt=""></th>
				<th>
					<font size="5" face="Times New Roman">PEMERINTAH KABUPATEN PROBOLINGGO</font><br><font size="6" face="Times New Roman">DINAS KESEHATAN</font><br><font size="5" face="Times New Roman">PUSKESMAS
					PAITON</font><br><font size="3" face="Times New Roman">Jln.Raya Paiton No. 302 ☎ 0335 - 771039 <i> email : phcpaiton@gmail.com </i></font><br><font size="3" face="Times New Roman">Ds. Sukodadi Kec. Paiton,  Kode Pos 67291 </font>
				</th>
				<th><img src="<?php echo base_url('img/logo-puskesmas-terbaru-sesuai-permenkes-tahun-1.png')?>"
						alt=""></th>
			</tr>
		</thead>
	</table>
	<br>
	<hr>
	<br>
	<?php 
          $birthDate = date('m-d-Y', strtotime($this->session->userdata('tgl_lahir')));
          //explode the date to get month, day and year
          $birthDate = explode("-", $birthDate);
          //get age from date or birthdate
          $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")? ((date("Y") - $birthDate[2]) - 1): (date("Y") - $birthDate[2]));              
     ?>
	<table style="width:100%">
		<thead>
			<tr>
				<td>Nomor Pasien</td>
				<td> : <?php echo $this->session->userdata('kode_pasien') ?></td>
				<td width="20%"></td>
				<td>Nama Pasien</td>
				<td> : <?php echo $this->session->userdata('nama') ?></td>
			</tr>
			<tr>
				<td>Tanggal Lahir / Umur</td>
				<td> :
					<?php echo date('D, d M Y', strtotime($this->session->userdata('tgl_lahir')))." / ". $age." Tahun" ?>
				</td>
				<td width="20%"></td>
				<td>Wilayah / Desa</td>
				<td> : <?php echo $this->session->userdata('wilayah') ?></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td colspan="3"> : <?php echo $this->session->userdata('alamat') ?></td>
			</tr>
		</thead>
		<tbody>

		</tbody>
	</table>
	<br>
	<hr>
	<br>
	<table style="width:75%;border-collapse: collapse; ">
		<thead>
			<tr>
				<th style="border:1px solid black;padding: 5px">No.</th>
				<th style="border:1px solid black;padding: 5px">Gejala</th>
				<th style="border:1px solid black;padding: 5px">Nilai</th>
			</tr>
		</thead>
		<tbody>
			<?php 
               $n = 0;
               $data_gejala_pasien = $this->session->userdata('data_gejala_pasien');
               foreach ($gejala as $key) {
          ?>
			<tr>
				<td style="border:1px solid black;padding: 5px">
					<center><?php echo $n+1 ."." ?></center>
				</td>
				<td style="border:1px solid black;padding: 5px"><?php echo $key->nama_gejala ?></td>
				<td style="border:1px solid black;padding: 5px">
					<center>
						<?php
                                   if ($data_gejala_pasien[$n] == 0) {
                                        echo "Tidak Yakin";
                                   }elseif ($data_gejala_pasien[$n] == 0.2) {
                                        echo "Kurang Yakin";
                                   }elseif ($data_gejala_pasien[$n] == 0.4) {
                                        echo "Sedikit Yakin";
                                   }elseif ($data_gejala_pasien[$n] == 0.6) {
                                        echo "Cukup Yakin";
                                   }elseif ($data_gejala_pasien[$n] == 0.8) {
                                        echo "Yakin";
                                   }elseif ($data_gejala_pasien[$n] == 1) {
                                        echo "Sangat Yakin";
                                   }
                              ?>
					</center>
				</td>
			</tr>
			<?php $n++; } ?>
		</tbody>
	</table>
     <br>
	<table style="width:50%;border-collapse: collapse; ">
		<thead>
			<tr>
				<th style="border:1px solid black;padding: 5px">No.</th>
				<th style="border:1px solid black;padding: 5px">Nama Pakar</th>
				<th style="border:1px solid black;padding: 5px">Persentase</th>
			</tr>
		</thead>
		<tbody>
               <?php 
                    $i = 0;
                    foreach ($pakar as $value) {
                         ?>
			<tr>
				<td style="border:1px solid black;padding: 5px"><center><?php echo $i+1 . "." ?></center></td>
				<td style="border:1px solid black;padding: 5px"><?php echo $value->nama_pakar ?></td>
				<td style="border:1px solid black;padding: 5px"><center><?php echo $hasil[$i]['hasil'] ?></center></td>
			</tr>
               <?php $i++; } ?>
		</tbody>
	</table>
     <p><b>* Jangan Lupa Mengkonsumsi Tablet Fe</b></p>
</body>
<script>
     window.print();
</script>

</html>