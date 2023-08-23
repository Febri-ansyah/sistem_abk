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
				<?php if(session()->get('id_konsultasi')!==null || $daftar!==null) :?>
					<?php foreach ($daftar as $d):?>
					<section id="biodata" class="mt-2 p-3">
						<div class="id_konsultasi">Id Konsultasi : <?= $d['id_konsultasi'];?></div>
						<h3 class="biodata-header">Biodata Konsultasi</h3>
						<div class="biodata-body">Nama: <?= $d['nama_user'];?></div>
						<div class="biodata-body">Email: <?= $d['email_user'];?></div>
					</section>
					<section id="analisa" class="mb-2 p-3">
						<h3 class="analisa-header">Hasil Analisa</h3>
						<div class="analisa-body">Kode: <?= $d['kode_jenis'];?></div>
						<div class="analisa-body">Jenis ABK: <?= $d['nama_jenis'];?></div>
						<div class="analisa-body">Solusi: <?= $d['solusi_jenis'];?></div>
					</section>
					<?php endForeach; ?>
				<?php endIf; ?>
			</div>
			<div style="width:100%; display:flex; justify-content:center;">
				<a class="btn btn-dark mx-3" href="<?= base_url();?>konsultasi" role="button">Mulai Konsultasi Baru</a>
				<?php if(session()->get('id_konsultasi')!==null) :?>
				<a class="btn btn-primary mx-3" href="<?= base_url();?>hasil/cetak/<?= session()->get('id_konsultasi');?>" role="button" target="_blank">Cetak</a>
				<?php endif; ?>
			</div>
		</div>
	</section>
		<!-- /.content -->
</div>
<!-- ./wrapper -->
<?= $this->endSection();?>