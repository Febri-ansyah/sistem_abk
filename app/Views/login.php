<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistem ABK | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap -->
  <link href="<?= base_url();?>plugins/bootstrap/css/bootstrap5.3.1.min.css" rel="stylesheet" >
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url();?>plugins/fontawesome-free/css/all.min.css">
  <link href="<?= base_url();?>plugins/fontawesome-free-6.4.2/css/all.css" rel="stylesheet">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url();?>dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url();?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
<?php if (session()->getFlashdata('pesan')) :?>
	<div class="alert alert-success alert-dismissible fade show" role="alert">
	<?= session()->getFlashdata('pesan');?>
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>
<?php endif ?>
	<div class="login-logo">
		<a href="<?= base_url();?>">Sistem ABK</a>
	</div>
	<!-- /.login-logo -->
	<div class="card">
		<div class="card-body login-card-body">
			<p class="login-box-msg">Sign in to your account</p>

			<form action="<?= base_url();?>login/check" method="POST">
				<div class="input-group mb-3">
					<input type="text" class="form-control" name="nama_user" placeholder="Masukan Nama Anda">
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

<!-- jQuery -->
<script src="<?= base_url();?>plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url();?>plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url();?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url();?>plugins/bootstrap/js/bootstrap5.3.1.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url();?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url();?>dist/js/adminlte.js"></script>
</body>
</html>