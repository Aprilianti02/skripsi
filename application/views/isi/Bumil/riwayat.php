<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Riwayat</h1>
	<p class="mb-4"><a target="_blank" href="#"></p>

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
		</div>
		<div class="card-body">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>Kode Periksa</th>
						<th>Nama Pasien</th>
						<th>Nama Pakar</th>
						<th>Tanda Gejala Anemia</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>Kode Periksa</th>
						<th>Nama Pasien</th>
						<th>Nama Pakar</th>
						<th>Tanda Gejala Anemia</th>
					</tr>
				</tfoot>
				<tbody>
					<?php foreach ($riwayat as $r){ ?>
					<tr>
						<td><?php echo $r->kode_periksa ?></td>
						<td><?php echo $r->nama ?></td>
						<td><?php echo $r->nama_pakar ?></td>
						<td><?php echo $r->nilai_hasil."%" ?></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>

</div>
<!-- /.container-fluid -->