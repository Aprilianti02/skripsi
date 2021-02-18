<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Add Gejala</h1>
		<div class="col-lg-4 breadcrumb-right">
			<ol class="breadcrumb">
				<?php //$this->load->view("partials2/main/breadcrumb/breadcrumb2") ?>
			</ol>
		</div>
	</div>
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6 ">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<form enctype="multipart/form-data" action="<?php echo base_url("bidan/daftarpasien/add") ?>"
						method="POST">
						<div class="card-body">
							<div class="row">
								<div class="col">
									<div class="form-group">
										<span style='color:#F00;'>*</span>
										<label class="col-form-label pt-0" for="add_kode_gejala">Kode
											Gejala</label>
										<input class="form-control" id="add_kode_gejala"
											name="add_kode_gejala" type="text" placeholder="Kode Gejala ...."
											required="">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="form-group">
										<span style='color:#F00;'>*</span>
										<label class="col-form-label pt-0" for="add_nama_gejala">Nama
											Gejala</label>
										<input class="form-control" id="add_nama_gejala"
											name="add_nama_gejala" type="text" placeholder="Nama Gejala..."
											required="">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="form-group">
										<span style='color:#F00;'>*</span>
										<label class="col-form-label pt-0"
											for="add_nilai_gejala">Nilai</label>
										<input class="form-control" id="add_nilai_gejala"
											name="add_nilai_gejala" type="number"
											placeholder="Nilai Gejala..." required="">
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
	</div>
</div>