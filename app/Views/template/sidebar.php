<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
	<!-- Navbar -->
	<nav class="main-header navbar navbar-expand navbar-white navbar-light">
		<!-- Left navbar links -->
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
			</li>
		</ul>
		<?php if(!session()->has('status')): ?>
		<ul class="navbar-nav ml-auto">
      <li class="nav-item mr-2">
      	<a class="nav-link" href='<?= base_url();?>login'>
      		<i class="fa-solid fa-right-to-bracket" style="margin-top: 0.1px;"></i>
      		Login
      	</a>
      </li>
    </ul>
  	<?php endif; ?>
		<?php if(session()->has('status')): ?>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item mr-2">
      	<a class="nav-link" href='<?= base_url();?>logout'>
      		<i class="fa-solid fa-right-from-bracket" style="margin-top: 0.1px;"></i>
      		Logout
      	</a>
      </li>
    </ul>
  	<?php endif; ?>
	</nav>
	<!-- /.navbar -->

<!-- Main Sidebar Container -->
	<aside class="main-sidebar sidebar-dark-primary elevation-4">

		<!-- Sidebar -->
		<div class="sidebar">
			<!-- Sidebar user panel (optional) -->
			<div class="user-panel mt-3 pb-3 mb-3 d-flex">
				<div class="image">
					<img src="<?= base_url();?>dist/img/brand.png" alt="brand">
				</div>
				<div class="info">
					<?php if(session()->has('nama')): ?>
					<a href="#" class="d-block h5">Hallo, <?= session()->get('nama');?></a>
  				<?php endif; ?>
  				<?php if(!session()->has('nama')): ?>
					<a href="#" class="d-block h5">Hallo, Guest</a>
  				<?php endif; ?>
				</div>
			</div>
			<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
					<li class="nav-item">
						<a href="<?= base_url();?>" class="nav-link">
							<i class="nav-icon far fa-solid fa-house"></i>
							<p>
								Dashbord
							</p>
						</a>
					</li>

					<?php if(session()->get('level')=='1'): ?>
					<!-- for admin -->
					<li class="nav-header">MENU ADMIN</li>				
					<li class="nav-item">
						<a href="<?= base_url();?>admin/karakter" class="nav-link">
							<i class="nav-icon far fa-user"></i>
							<p>
								Karakteristik ABK
							</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url();?>admin/jenis" class="nav-link">
							<i class="nav-icon far fa-user"></i>
							<p>
								Jenis ABK
							</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url();?>admin/akun" class="nav-link">
							<i class="nav-icon far fa-user"></i>
							<p>
								Kelola Rules
							</p>
						</a>
					</li>
					<!-- /endAdmin -->
					<?php endif; ?>

					<?php if(session()->get('level')=='2'): ?>
					<!-- for user -->
					<li class="nav-header">MENU USER</li>				
					<li class="nav-item">
						<a href="<?= base_url();?>konsultasi" class="nav-link">
							<i class="nav-icon far fa-user"></i>
							<p>
								Konsultasi
							</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url();?>hasil" class="nav-link">
							<i class="nav-icon far fa-user"></i>
							<p>
								Cetak Diagnosa
							</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url();?>riwayat" class="nav-link">
							<i class="nav-icon far fa-user"></i>
							<p>
								Riwayat Konsultasi
							</p>
						</a>
					</li>
					<!-- /endUser -->
					<?php endif; ?>
				</ul>				
			</nav>
			<!-- /.sidebar-menu -->
		</div>
		<!-- /.sidebar -->
	</aside>
</div>

<script type="text/javascript">
	window.addEventListener('load', ()=>{

	});
	
	let links = document.querySelectorAll('div.sidebar li a');
	let linkCurrent = window.location.href;

	links.forEach((e,i)=>{
		if(e==linkCurrent)
			e.classList.add('active');
	});
	
</script>