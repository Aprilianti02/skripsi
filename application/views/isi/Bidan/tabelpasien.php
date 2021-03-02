<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Daftar Pasien</h1>
	<p class="mb-4"><a target="_blank" href="#"></a></p>

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary"></h6>
			<a href="<?php echo base_url("bidan/daftarpasien/add_pasien")?>" class="btn btn-primary">+ Tambah
				Pasien</a></h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>No.RM</th>
							<th>Nama Ibu Hamil</th>
							<th>Tanggal Lahir</th>
							<th>Wilayah</th>
							<th>Alamat</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>No.RM</th>
							<th>Nama Ibu Hamil</th>
							<th>Tanggal Lahir</th>
							<th>Wilayah</th>
							<th>Alamat</th>
						</tr>
					</tfoot>
					<tbody>
						<?php foreach ($pasien as $p) { ?>
						<tr>
							<td><?php echo $p->no_rm ?></td>
							<td><?php echo $p->nama ?></td>
							<td><?php echo $p->tgl_lahir ?></td>
							<td><?php echo $p->wilayah ?></td>
							<td><?php echo $p->alamat ?></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!-- /.container-fluid -->