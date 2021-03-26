<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

	<!-- Sidebar - Brand -->
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
		<div class="sidebar-brand-text mx-3">Suspect Anemia Bumil</div>
	</a>

	<!-- Divider -->
	<hr class="sidebar-divider my-0">

	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Nav Item - Beranda-->
	<?php if ($this->uri->segment('2') == 'beranda') {?>
	<li class="nav-item active">
		<?php }else{ ?>
	<li class="nav-item ">
		<?php } ?>
		<a class="nav-link" href="<?php echo base_url ('Bumil/beranda')?> ">
			<span>Beranda</span>
		</a>
	</li>

	<!-- Nav Item - Petunjuk -->
	<?php if ($this->uri->segment('2') == 'petunjuk') {?>
	<li class="nav-item active">
		<?php }else{ ?>
	<li class="nav-item ">
		<?php } ?>
		<a class="nav-link" href="<?php echo base_url ('Bumil/petunjuk')?> ">
			<span>Petunjuk</span></a>
	</li>
	<!-- Nav Item - informasi -->
	<?php if ($this->uri->segment('2') == 'informasi') {?>
	<li class="nav-item active">
		<?php }else{ ?>
	<li class="nav-item ">
		<?php } ?>
		<a class="nav-link" href="<?php echo base_url ('Bumil/informasi')?> ">
			<span>Informasi</span></a>
	</li>
	<!-- Nav Item - Gejala -->
	<?php if ($this->uri->segment('2') == 'daftargejala') {?>
	<li class="nav-item active">
		<?php }else{ ?>
	<li class="nav-item ">
		<?php } ?>
		<a class="nav-link" href="<?php echo base_url ('Bumil/daftargejala')?> ">
			<span>Gejala</span></a>
	</li>
	<!-- Nav Item - Gejala -->
	<?php if ($this->uri->segment('2') == 'konsultasi') {?>
	<li class="nav-item active">
		<?php }else{ ?>
	<li class="nav-item ">
		<?php } ?>
		<a class="nav-link" href="<?php echo base_url ('Bumil/konsultasi')?> ">
			<span>Konsultasi</span></a>
	</li>
	<!-- Nav Item - Gejala -->
	<?php if ($this->uri->segment('2') == 'riwayat') {?>
	<li class="nav-item active">
		<?php }else{ ?>
	<li class="nav-item ">
		<?php } ?>
		<a class="nav-link" href="<?php echo base_url ('Bumil/riwayat')?> ">
			<span>Hasil</span></a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider d-none d-md-block">

	<!-- Sidebar Toggler (Sidebar) -->
	<div class="text-center d-none d-md-inline">
		<button class="rounded-circle border-0" id="sidebarToggle"></button>
	</div>

	<!-- Sidebar Message -->
	<div class="sidebar-card">
	</div>

</ul>