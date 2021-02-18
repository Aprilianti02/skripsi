<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Gejala Anemia</h1>

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary"></h6>
			<a href="<?php echo base_url("bidan/daftargejala/add_gejala")?>" class="btn btn-primary">+ Tambah
				Gejala</a></h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>Kode Gejala</th>
							<th>Nama Gejala</th>
							<th>Action</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>Kode Gejala</th>
							<th>Nama Gejala</th>
							<th>Action</th>
						</tr>
					</tfoot>
					<tbody>
                        <?php foreach ($gejala as $g){ ?>
						<tr>
							<td><?php echo $g->kode_gejala ?></td>
							<td><?php echo $g->nama_gejala ?></td>
							<td></td>
						</tr>
                        <?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>
<!-- /.container-fluid -->