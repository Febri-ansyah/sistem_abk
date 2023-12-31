<?= $this->extend('template/main');?>

<?= $this->section('content');?>  
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1 class="m-0 text-dark">Dashboard</h1>
					</div><!-- /.col -->
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active">Dashboard</li>
						</ol>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.container-fluid -->
		</div>
		<!-- /.content-header -->

		<!-- Main content -->
		<section class="content">
			<div class="jumbotron text-light text-center" style="background-color:#595959;background-image: url(<?= base_url();?>dist/img/2.jpeg);  background-repeat: no-repeat;background-size: cover;background-position: center center;">
				<h1 class="display-5"><b>Sistem Pakar Diagnosa Karakteristik ABK</b></h1>
				<hr class="mt-4">
				<p>Selamat datang di Sistem Pakar Diagnosa Karakteristik ABK. Sistem ini bertujuan untuk memudahkan anak anak konsultasi dan memberikan solusi dalam menangani.</p>
				<a class="btn btn-light btn-md mt-3" href="<?= base_url();?>konsultasi" role="button">Konsultasi Sekarang</a>
			</div>
			<div class="container bg-light">
				<div class="card">
					<h3 class="card-header">Jenis Jenis Pada Anak Berkebutuhan Khusus</h3>
					<div class="card-body row row-cols-1 row-cols-md-2 g-4">
						<div class="col">
							<div class="card">
								<div class="card-body">
									<h5 class="card-title mb-2"><b>Tuna Netra</b></h5>
									<p class="card-text">Tuna Netra adalah anak yang mengalami permasalahan pada fungsi penglihatannya sehingga mereka mengalami permasalahan dalam berorientasi dengan lingkungan melalui indera penglihatannya.</p>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="card">
								<div class="card-body">
									<h5 class="card-title mb-2"><b>Tuna Rungu</b></h5>
									<p class="card-text">Tuna rungu dapat diartikan sebagai gangguan pendengaran, dimana anak yang mengalami ketunarunguan adalah mengalami permasalahan pada hilangnya atau berkurangnya kemampuan pendengaran. </p>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="card">
								<div class="card-body">
									<h5 class="card-title mb-2"><b>Tuna Grahita</b></h5>
									<p class="card-text">Tuna grahita merupakan istilah yang disematkan bagi anak-anak berkebutuhan khusus yang mengalami permasalahan seputar intelegensi. Di Indonesia istilah tuna grahita merupakan pengelompokan dari beberapa anak berkebutuhan khusus, namun dalam bidang pendidikan mereka memiliki hambatan yang sama dikarenakan permasalahan intelegensi.</p>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="card">
								<div class="card-body">
									<h5 class="card-title mb-2"><b>Tuna Daksa</b></h5>
									<p class="card-text">Tuna daksa dapat diartikan sebagai gangguan motorik. Pada konteks lain dapat kita temui penggunaan istilah lain dalam menyebut anak tuna daksa misalnya anak dengan hambatan gerak.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
				<!-- /.row (main row) -->
			<!-- /.container-fluid -->
		</section>
		<!-- /.content -->
	</div>
	
<!-- ./wrapper -->
<?= $this->endSection();?>
