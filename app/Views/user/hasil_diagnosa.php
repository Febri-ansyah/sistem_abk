<?= $this->extend('template/main');?>

<?= $this->section('content');?>  
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Hasil Diagnosa</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Cetak</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content bg-light">
		<div class="container">
			<div class="card px-3">
				<section id="biodata" class="mt-2 p-3">
					<h3 class="biodata-header">Biodata Konsultasi</h3>
					<div class="biodata-body">Nama: </div>
					<div class="biodata-body">Email: </div>
				</section>
				<section id="analisa" class="mb-2 p-3">
					<h3 class="analisa-header">Hasil Analisa</h3>
					<div class="analisa-body">ID ABK: XXXXXX</div>
					<div class="analisa-body">Jenis ABK: XXXXXX</div>
					<div class="analisa-body">Solusi: XXXXXX</div>
				</section>
			</div>
			<div style="width:100%; display:flex; justify-content:center;">
				<a class="btn btn-dark mx-3" href="#" role="button">Konsultasi Ulang</a>
				<a class="btn btn-primary mx-3" href="<?= base_url();?>hasil/cetak" role="button" target="_blank">Cetak</a>
			</div>
		</div>
	</section>
		<!-- /.content -->
</div>
<!-- ./wrapper -->
<?= $this->endSection();?>