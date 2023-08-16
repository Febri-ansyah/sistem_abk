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
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition register-page">
<div class="register-box">
	<?php if (session()->getFlashdata('pesan')) :?>
	<div class="alert alert-success alert-dismissible fade show" role="alert">
		<?= session()->getFlashdata('pesan');?>
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>
<?php endif ?>
	<div class="register-logo">
		<a href="<?= base_url();?>">Sistem ABK</a>
	</div>

	<div class="card">
		<div class="card-body register-card-body">
			<p class="login-box-msg">Register a new membership</p>

			<form action="<?= base_url();?>register/check" method="post">
				<div class="input-group mb-3">
					<input type="text" class="form-control" name="nama_user" placeholder="Full name">
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