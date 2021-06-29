<br>
<br>
<!-- Outer Row -->
<div class="row justify-content-center">

	<div class="col-xl-10 col-lg-12 col-md-9">

		<div class="card o-hidden border-0 shadow-lg my-5">
			<div class="card-body p-0">
				<!-- Nested Row within Card Body -->
				<div class="row">
					<div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
					<div class="col-lg-6">
						<div class="p-5">
							<div class="text-center">
								<h1 class="h4 text-gray-900 mb-4">Selamat Datang</h1>
							</div>
							<?php if ($this->session->userdata("msg") != null){ ?>
								<center><p style="color : #ff0000"><?php echo $this->session->userdata("msg") ?></p></center>
							<?php } ?>
							<br>
							<form class="user" method="POST" action="<?php echo base_url('login/action') ?>">
								<div class="form-group">
									<input type="text" class="form-control form-control-user"
										id="username" name="username" aria-describedby="emailHelp"
										placeholder="Masukkan Username ...">
								</div>
								<div class="form-group">
									<input type="password" class="form-control form-control-user"
										id="pass" name="pass" placeholder="Password">
								</div>
								<br>
								<!-- <div class="form-group">
									<div class="custom-control custom-checkbox small">
										<input type="checkbox" class="custom-control-input" id="customCheck">
										<label class="custom-control-label" for="customCheck">Remember
											Me</label>
									</div>
								</div> -->
								<input type="submit" class="btn btn-primary btn-user btn-block" value="Login">
								<br><br>
							</form>
							<hr>
							<div class="text-center">
								<a class="small" href="<?php echo base_url('register') ?>">Registrasi</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

</div>