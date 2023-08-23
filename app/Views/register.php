<?= 	$this->include('template/head');?>
<body class="hold-transition register-page">
<div class="register-box">
	<?php if (session()->getFlashdata('pesan')) :?>
	<div class="alert alert-danger alert-dismissible fade show fixed-top" style="border-radius:0 ;" role="alert">
		<?= session()->getFlashdata('pesan');?>
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>
<?php endif ?>
	<div class="register-logo">
		<a href="<?= base_url();?>">Sistem Pakar Diagnosa Karakteristik ABK</a>
	</div>

	<div class="card">
		<div class="card-body register-card-body">
			<p class="login-box-msg">Register a new membership</p>

			<form action="<?= base_url();?>register/check" method="post">
				<div class="input-group mb-3">
					<input type="text" class="form-control" name="nama_user" placeholder="Full name" autocomplete="off">
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-user"></span>
						</div>
					</div>
				</div>
				<div class="input-group mb-3">
					<input type="email" class="form-control" name="email_user" placeholder="Email">
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-envelope"></span>
						</div>
					</div>
				</div>
				<div class="input-group mb-3">
					<input type="password" class="form-control" name="password_user" placeholder="Password">
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-lock"></span>
						</div>
					</div>
				</div>
				<div class="input-group mb-3">
					<input type="password" class="form-control" name="repassword_user" placeholder="Retype password">
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-lock"></span>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- /.col -->
					<div class="col">
						<button type="submit" class="btn btn-primary btn-block mb-3">Register</button>
					</div>
					<!-- /.col -->
				</div>
			</form>

			<a href="<?= base_url();?>login" class="text-center">I already have a membership</a>
		</div>
		<!-- /.form-box -->
	</div><!-- /.card -->
</div>
<!-- /.register-box -->
<?= 	$this->include('template/close');?>