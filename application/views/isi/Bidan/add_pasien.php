    <!-- Begin Page Content -->
    <div class="container-fluid">
    	<!-- Page Heading -->
    	<div class="d-sm-flex align-items-center justify-content-between mb-4">
    		<h1 class="h3 mb-0 text-gray-800">Add User</h1>
    		<div class="col-lg-4 breadcrumb-right">
    			<ol class="breadcrumb">
    				<?php //$this->load->view("partials2/main/breadcrumb/breadcrumb2") ?>
    			</ol>
    		</div>
    	</div>
    </div>
    <div class="row">
    	<div class="col-md-3"></div>
    	<div class="col-md-6 ">
    		<div class="card shadow mb-4">
    			<div class="card-header py-3">
    				<form enctype="multipart/form-data" action="<?php echo base_url("admin/user/add") ?>" method="POST">
                        <hr>
    					<div class="card-body">
    						<div class="row">
    							<div class="col">
    								<div class="form-group">
    									<span style='color:#F00;'>*</span>
    									<label class="col-form-label pt-0" for="no_rm">Nomor Rm</label>
    									<input class="form-control" id="no_rm" name="no_rm" type="text"
    										placeholder="Nomor Rekam Medis" required="">
    								</div>
    							</div>
    						</div>
    						<div class="row">
    							<div class="col">
    								<div class="form-group">
    									<span style='color:#F00;'>*</span>
    									<label class="col-form-label pt-0" for="nama_pasien">Nama Pasien</label>
    									<input class="form-control" id="nama_pasien" name="nama_pasien" type="text"
    										placeholder="Nama Pasien" required="">
    								</div>
    							</div>
    						</div>
    						<div class="row">
    							<div class="col">
    								<div class="form-group">
    									<span style='color:#F00;'>*</span>
    									<label class="col-form-label pt-0" for="tgl_lahir">Tanggal Lahir</label>
    									<input class="form-control" id="tgl_lahir" name="tgl_lahir" type="date"
    										placeholder="Tanggal Lahir" required="">
    								</div>
    							</div>
    						</div>
    						<div class="row">
    							<div class="col">
    								<div class="form-group">
    									<span style='color:#F00;'>*</span>
    									<label class="col-form-label pt-0" for="wilayah">Wilayah /Desa</label>
    									<select class="custom-select" id="wilayah" name="wilayah" required="">
    										<option value="">--Pilih--</option>
    										<option value="Alas Tengah">Alas Tengah</option>
    										<option value="Bhinor">Bhinor</option>
    										<option value="Pandean">Pandean</option>
    										<option value="Randu Tatah">Randu Tatah</option>
    										<option value="Karang Anyar">Karang Anyar</option>
    										<option value="Plampang">Plampang</option>
    										<option value="Petunjungan">Petunjungan</option>
    										<option value="Taman">Taman</option>
    										<option value="Pondok kelor">Pondok kelor</option>
    										<option value="Sumber Anyar">Sumber Anyar</option>
    										<option value="Paiton">Paiton</option>
    										<option value="Sukodadi">Sukodadi</option>
    										<option value="Sumber Rejo">Sumber Rejo</option>
    									</select>
    								</div>
    							</div>
    						</div>
    						<div class="row">
    							<div class="col">
    								<div class="form-group">
    									<span style='color:#F00;'>*</span>
    									<label class="col-form-label pt-0" for="alamat">Alamat</label>
    									<textarea class="form-control" name="alamat" id="alamat" cols="10"
    										rows="2"></textarea>

    								</div>
    							</div>
    						</div>
    					</div>
    					<div class="card-footer">
    						<button class="btn btn-primary btn-pill">Submit</button>
    					</div>
    				</form>
    			</div>
    		</div>
    		<div class="col-md-3"></div>
    	</div>