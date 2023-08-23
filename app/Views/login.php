<?= 	$this->include('template/head');?>
<body class="hold-transition login-page">
<div class="login-box">
<?php if (session()->getFlashdata('pesan')) :?>
	<div class="alert alert-danger alert-dismissible fade show fixed-top" style="border-radius: 0;" role="alert">
	<?= session()->getFlashdata('pesan');?>
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>
<?php 	endif ?>
	<div class="login-logo">
		<a href="<?= base_url();?>">Sistem Pakar Diagnosa Karakteristik ABK</a>
	</div>
	<!-- /.login-logo -->
	<div class="card">
		<div class="card-body login-card-body">
			<p class="login-box-msg">Sign in to your account</p>

			<form action="<?= base_url();?>login/check" method="POST">
				<div class="input-group mb-3">
					<input type="text" class="form-control" name="nama_user" placeholder="Masukan Nama Anda" autocomplete="off">
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-user"></span>
						</div>
					</div>
				</div>
				<div class="input-group mb-3">
					<input type="password" class="form-control" name="password_user" placeholder="Masukan Password Anda">
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-lock"></span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-8">
						<div class="icheck-primary">
							<input type="checkbox" id="remember">
							<label for="remember">
								Remember Me
							</label>
						</div>
					</div>
					<!-- /.col -->
					<div class="col-4">
						<button type="submit" class="btn btn-primary btn-block">Sign In</button>
					</div>
					<!-- /.col -->
				</div>
			</form>

			<p class="mb-0">
				<a href="<?= base_url();?>register" class="text-center">Register a new membership</a>
			</p>
		</div>
		<!-- /.login-card-body -->
	</div>
</div>
<!-- /.login-box -->

<?= $this->include('template/close');?>