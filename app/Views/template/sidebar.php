	<!-- Navbar -->
	<nav class="main-header navbar navbar-expand navbar-white navbar-light">
		<!-- Left navbar links -->
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
			</li>
		</ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item mr-2">
      	<a class="nav-link" href='#'>
      		<i class="fa-solid fa-right-from-bracket" style="margin-top: 0.1px;"></i>
      		Logout
      	</a>
      </li>
    </ul>
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
					<a href="#" class="d-block h4">Hallo, Admin</a>
				</div>
			</div>
			<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
					<li class="nav-item">
						<a href="/" class="nav-link">
							<i class="nav-icon far fa-solid fa-house"></i>
							<p>
								Dashbord
							</p>
						</a>
					</li>
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
				</ul>				
			</nav>
			<!-- /.sidebar-menu -->
		</div>
		<!-- /.sidebar -->
	</aside>
