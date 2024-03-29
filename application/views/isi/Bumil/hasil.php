    <!-- Begin Page Content -->
    <div class="container-fluid">
    	<!-- Page Heading -->
    	<div class="d-sm-flex align-items-center justify-content-between mb-4">
    		<h1 class="h3 mb-0 text-gray-800">Hasil</h1>
    		<div class="col-lg-4 breadcrumb-right">
    			<ol class="breadcrumb">
    				<?php //$this->load->view("partials2/main/breadcrumb/breadcrumb2") ?>
    			</ol>
    		</div>
    	</div>
    	<div class="row">
    		<div class="col-md-8"></div>
    		<div class="col-md-12">
    			<div class="card shadow mb-4">
    				<div class="card-header py-3">
    					<form enctype="multipart/form-data" action="<?php echo base_url("bumil/hasilkonsultasi/coba") ?>" method="POST">
    						<div class="card-body">
    							<div class="row">
    								<div class="col-md-5">
    									<div class="form-group">
    										<span style='color:#F00;'>*</span>
    										<label class="col-form-label pt-0" for="kode_pasien">Nomor
    											Pasien</label>
    										<input class="form-control" id="kode_pasien" name="kode_pasien"
    											type="text" placeholder="Nomor Rekam Medis" required=""
    											value="<?php echo $this->session->userdata("kode_pasien") ?>"
    											readonly="">
    										<input class="form-control" id="kode_periksa" name="kode_periksa"
    											type="text" placeholder="Nomor Rekam Medis" required=""
    											value="<?php echo date('Ymd') ?>"
    											readonly="" hidden="">
    									</div>
    								</div>
    								<div class="col-md-2"></div>
    								<div class="col-md-5">
    									<div class="form-group">
    										<span style='color:#F00;'>*</span>
    										<label class="col-form-label pt-0" for="nama_pasien">Nama
    											Pasien</label>
    										<input class="form-control" id="nama_pasien" name="nama_pasien"
    											type="text" placeholder="Nama Pasien" required=""
    											value="<?php echo $this->session->userdata("nama")?>"
    											readonly>
    									</div>
    								</div>
    							</div>
    							<div class="row">
    								<div class="col-md-5">
    									<div class="form-group">
    										<span style='color:#F00;'>*</span>
    										<label class="col-form-label pt-0" for="tgl_lahir">Tanggal
    											Lahir</label>
    										<input class="form-control" id="tgl_lahir" name="tgl_lahir"
    											type="text" placeholder="Tanggal Lahir" required=""
    											value="<?php echo $this->session->userdata("tgl_lahir")?>"
    											readonly>
    									</div>
    								</div>
    								<div class="col-md-2"></div>
    								<div class="col-md-5">
    									<div class="form-group">
    										<span style='color:#F00;'>*</span>
    										<label class="col-form-label pt-0" for="wilayah">Wilayah /
    											Desa</label>
    										<input class="form-control" id="wilayah" name="wilayah"
    											type="text" placeholder="wilayah" required=""
    											value="<?php echo $this->session->userdata("wilayah")?>"
    											readonly>
    									</div>
    								</div>
    							</div>
    							<div class="row">
    								<div class="col-md-12">
    									<div class="form-group">
    										<span style='color:#F00;'>*</span>
    										<label class="col-form-label pt-0" for="alamat">Alamat</label>
    										<textarea class="form-control" name="alamat" id="alamat" cols="10"
    											rows="2"
    											readonly><?php echo $this->session->userdata("nama")?></textarea>
    									</div>
    								</div>
    							</div>
    							<hr>
    							<center>
							    	<div class="col-md-8" style="border: 0; padding: 10px; background-color: #FF0000; text-align: left;">
									<center>
									
    										<?php if ($hasil[5][0]['rata2_cf'] != 0){ ?>
    										<h3 style="color:#FFFFFF">Anda Mengalami Tanda Gejala Anemia : </h3>
										<?php }else{ ?>
    										<h3 style="color:#FFFFFF">Anda Tidak Mengalami Tanda Gejala Anemia : </h3>
										<?php } ?>
    									</center>
								</div>
							</center>
    							<hr>
    							<center>
    								<div class="row">
    									<div class="col-md-12">
    										<?php foreach ($hasil as $key) { ?> 			
										<?php if($key['kode_pakar'] == '' && $key['hasil'] == ''){ ?>
											<h5 style="color:#000000">Dengan Presentase : <?php echo $key[0]['rata2_cf']."%"?></h5>
											
										<?php } ?>
    										<?php } ?>
    									</div>
    								</div>
    							</center>
    							<hr>
							<center>
							    	<div class="col-md-6" style="border: 0; padding: 10px; background-color: #0000FF; text-align: left;">
								<center>
									<h3 style="color:#FFFFFF">Rutin Mengkonsumsi Tablet Fe</h3>
								</center>
							    	</div>
							</center>
    							<hr>
    							<div class="row">
    								<div class="col-md-2">
    									<div class="form-group">
    										<input type="submit" class="form-control btn btn-primary btn-pill"
    											value="Simpan Data" name="simpan_data" id="simpan_data">
    									</div>
    								</div>
    								<div class="col-md-2">
    									<div class="form-group">
									    <a href="<?php echo base_url("bumil/hasilkonsultasi/cetak_pdf") ?>" target="_blank" class="form-control btn btn-primary btn-pill" ame="cetak_data" id="cetak_data">Cetak PDF</a>
    									</div>
    								</div>
    							</div>
    						</div>
    					</form>
    				</div>
    			</div>
    		</div>
    	</div>