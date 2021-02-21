<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Daftar Pasien Ibu Hamil</h1>
	<p class="mb-4"><a target="_blank" href="#"></p>

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
		</div>
		<div class="card-body">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>No.Rm</th>
						<th>Nama </th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>No.Rm</th>
						<th>Nama</th>
					</tr>
				</tfoot>
				<tbody>
					<?php foreach ($gejala as $g){ ?>
					<tr>
						<td><?php echo $g->kode_gejala ?></td>
						<td><?php echo $g->nama_gejala ?></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>

</div>
<!-- /.container-fluid -->