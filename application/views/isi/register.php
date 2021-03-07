<div class="card o-hidden border-0 shadow-lg my-5">
	<div class="card-body p-0">
		<!-- Nested Row within Card Body -->
		<div class="row">
			<div class="col-lg-5 d-none d-lg-block bg-register-"></div>
			<div class="col-lg-7">
				<div class="p-5">
					<div class="text-center">
						<h1 class="h4 text-gray-900 mb-4">Buat Akun !</h1>
					</div>
					<form class="user" action="register/tambah" method="POST">
						<div class="form-group row">
							<div class="col-sm-6 mb-3 mb-sm-0">
								<label class="col-form-label pt-0" for="no_rm">Kode Pasien</label>
								<input type="text" class="form-control" id="kode_pasien" name="kode_pasien"
									placeholder="Kode Pasien" value="<?php echo $kode ?>" readonly>
							</div>
						</div>
						<div class="form-group">
							<label class="col-form-label pt-0" for="no_rm">Nama Lengkap</label>
							<input type="text" class="form-control" id="nama" name="nama"
								placeholder="Nama Lengkap" required>
						</div>
						<div class="form-group row">
							<div class="col-sm-6">
								<label class="col-form-label pt-0" for="no_rm">Tanggal Lahir</label>
								<input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir"
									placeholder="Tanggal Lahir" required>
							</div>
							<div class="col-sm-6">
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
						<div class="form-group row">
							<div class="col-sm-12">
								<span style='color:#F00;'>*</span>
								<label class="col-form-label pt-0" for="alamat">Alamat</label>
								<textarea name="alamat" id="alamat" class="form-control" cols="20"
									rows="2"></textarea>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-6">
								<span style='color:#F00;'>* </span>
								<label class="col-form-label pt-0" for="alamat">Username</label>
								<input type="text" class="form-control" id="username" name="username"
									placeholder="Username">
							</div>
							<div class="col-sm-6">
								<span style='color:#F00;'>* </span>
								<label class="col-form-label pt-0" for="alamat">Password</label>
								<input type="password" class="form-control" id="pass" name="pass"
									placeholder="Password">
							</div>
						</div>
						<div class="form-group row">
							<span style='color:#F00;'>* Nb: Username dan Password, Jangan Sampai Hilang !</span>
						</div>

						<input type="submit" class="btn btn-primary btn-user btn-block" value="Daftar Akun">
					</form>
					<hr>
					<div class="text-center">
						<a class="small" href="login">Sudah mempunyai akun? Login!</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>