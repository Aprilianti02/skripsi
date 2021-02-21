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
    					<form enctype="multipart/form-data" action="<?php echo base_url("bumil/perhitungan") ?>"
    						method="POST">
    						<div class="card-body">
    							<div class="row">
    								<div class="col-md-5">
    									<div class="form-group">
    										<span style='color:#F00;'>*</span>
    										<label class="col-form-label pt-0" for="no_rm">Nomor Rm</label>
    										<input class="form-control" id="no_rm" name="no_rm" type="text"
    											placeholder="Nomor Rekam Medis" required="">
    									</div>
    								</div>
    								<div class="col-md-2"></div>
    								<div class="col-md-5">
    									<div class="form-group">
    										<span style='color:#F00;'>*</span>
    										<label class="col-form-label pt-0" for="nama_pasien">Nama
    											Pasien</label>
    										<input class="form-control" id="nama_pasien" name="nama_pasien"
    											type="text" placeholder="Nama Pasien" required="">
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
    											type="text" placeholder="Tanggal Lahir" required="">
    									</div>
    								</div>
    								<div class="col-md-2"></div>
    								<div class="col-md-5">
    									<div class="form-group">
    										<span style='color:#F00;'>*</span>
    										<label class="col-form-label pt-0" for="wilayah">Wilayah /
    											Desa</label>
    										<input class="form-control" id="wilayah" name="wilayah"
    											type="text" placeholder="wilayah" required="">
    									</div>
    								</div>
    							</div>
    							<div class="row">
    								<div class="col-md-12">
    									<div class="form-group">
    										<span style='color:#F00;'>*</span>
    										<label class="col-form-label pt-0" for="alamat">Alamat</label>
    										<textarea class="form-control" name="alamat" id="alamat" cols="10"
    											rows="2"></textarea>
    									</div>
    								</div>
    							</div>
    						<hr>
    						</div>
    					</form>
    				</div>
    			</div>
    			<div class="col-md-3"></div>
    		</div>
    	</div>
    </div>