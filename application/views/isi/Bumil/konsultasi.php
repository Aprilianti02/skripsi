    <!-- Begin Page Content -->
    <div class="container-fluid">
    	<!-- Page Heading -->
    	<div class="d-sm-flex align-items-center justify-content-between mb-4">
    		<h1 class="h3 mb-0 text-gray-800">Keluhan Ibu Hamil</h1>
    		<div class="col-lg-4 breadcrumb-right">
    			<ol class="breadcrumb">
    				<?php //$this->load->view("partials2/main/breadcrumb/breadcrumb2") ?>
    			</ol>
    		</div>
    	</div>
    	<div class="row">
    		<div class="col-md-2"></div>
    		<div class="col-md-8">
    			<div class="card shadow mb-4">
    				<div class="card-header py-3">
    					<form enctype="multipart/form-data" action="<?php echo base_url("bumil/hasilkonsultasi") ?>"
    						method="POST">
    						<div class="card-body">
    							<div class="row">
    								<div class="col-md-5">
    									<div class="form-group">
    										<span style='color:#F00;'>*</span>
    										<label class="col-form-label pt-0" for="kode_pasien">Nomor Pasien</label>
    										<input class="form-control" id="kode_pasien" name="kode_pasien"
    											type="text" placeholder="Nomor Rekam Medis" required="" value="<?php echo $this->session->userdata("kode_pasien") ?>" readonly="">
    									</div>
    								</div>
    								<div class="col-md-2"></div>
    								<div class="col-md-5">
    									<div class="form-group">
    										<span style='color:#F00;'>*</span>
    										<label class="col-form-label pt-0" for="nama_pasien">Nama Pasien</label>
    										<input class="form-control" id="nama_pasien" name="nama_pasien"
    											type="text" placeholder="Nama Pasien" required="" value="<?php echo $this->session->userdata("nama")?>" readonly>
    									</div>
    								</div>
    							</div>
    							<div class="row">
    								<div class="col-md-5">
    									<div class="form-group">
    										<span style='color:#F00;'>*</span>
    										<label class="col-form-label pt-0" for="tgl_lahir">Tanggal Lahir</label>
    										<input class="form-control" id="tgl_lahir" name="tgl_lahir"
    											type="text" placeholder="Tanggal Lahir" required="" value="<?php echo $this->session->userdata("tgl_lahir")?>" readonly>
    									</div>
    								</div>
    								<div class="col-md-2"></div>
    								<div class="col-md-5">
    									<div class="form-group">
                                                 <span style='color:#F00;'>*</span>
    										<label class="col-form-label pt-0" for="wilayah">Wilayah / Desa</label>
    										<input class="form-control" id="wilayah" name="wilayah"
    											type="text" placeholder="wilayah" required="" value="<?php echo $this->session->userdata("wilayah")?>" readonly>
    									</div>
    								</div>
    							</div>
    							<div class="row">
    								<div class="col-md-12">
    									<div class="form-group">
    										<span style='color:#F00;'>*</span>
    										<label class="col-form-label pt-0" for="alamat">Alamat</label>
                                                      <textarea class="form-control" name="alamat" id="alamat" cols="10" rows="2" readonly><?php echo $this->session->userdata("nama")?></textarea>
    									</div>
    								</div>
    							</div>
    							<hr>
							    <center><h5>Silahkan pilih gejala yang sedang anda alami</h5></center>
							<hr>
    							<?php foreach($gejala as $g){ ?>
    							<div class="row">
    								<div class="col">
    									<div class="form-group">
    										<span style='color:#F00;'>*</span>
    										<label class="col-form-label pt-0"
    											for="<?php echo $g->kode_gejala ?>"><?php echo $g->nama_gejala ?></label>
    										<select class="custom-select" id="<?php echo $g->kode_gejala ?>"
    											name="gejala[]" required="">
    											<option value="">--Pilih--</option>
    											<option value="0">Tidak Yakin</option>
    											<option value="0.2">Kurang Yakin</option>
    											<option value="0.4">Sedikit Yakin</option>
    											<option value="0.6">Cukup Yakin</option>
    											<option value="0.8">Yakin</option>
    											<option value="1">Sangat Yakin</option>
    										</select>
    									</div>
    								</div>
    							</div>
    							<?php } ?>
    						</div>
    						<div class="card-footer">
    							<button class="btn btn-primary btn-pill">Submit</button>
    						</div>
    					</form>
    				</div>
    			</div>
    			<div class="col-md-3"></div>
    		</div>
    	</div>
    </div>