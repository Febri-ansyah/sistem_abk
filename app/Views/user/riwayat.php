<?= $this->extend('template/main');?>

<?= $this->section('content');?>  
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1 class="m-0 text-dark">Riwayat Konsultasi</h1>
					</div><!-- /.col -->
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active">Riwayat</li>
						</ol>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.container-fluid -->
		</div>
		<!-- /.content-header -->

		<!-- Main content -->
		<section class="content bg-light">
			<div class="container">
				<!-- Main row -->
				<div class="card pt-3">
					<div class="card-title ml-auto mr-3">
						<a class="btn btn-dark" href="<?= base_url();?>konsultasi" role="button">Konsultasi Ulang</a>
						<a class="mx-3" href="<?= base_url();?>" style="color:black">Back</a>
					</div>
					<div class="card-body">
						<table class="table table-stripped table-hover">
							<thead>
								<tr>
									<th scope="col">Id Konsultasi</th>
									<th scope="col">Nama</th>
									<th scope="col">Email</th>
									<th scope="col">Kode Jenis</th>
									<th scope="col">Jenis</th>
									<th scope="col">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($daftar as $d):?>
								<tr>
									<td><?= $d['id_konsultasi'];?></td>
									<td><?= $d['nama_user'];?></td>
									<td><?= $d['email_user'];?></td>
									<td><?= $d['kode_jenis'];?></td>
									<td><?= $d['nama_jenis'];?></td>
									<td>
										<a class="ml-2" href="<?= base_url();?>hasil/cetak/<?= $d['id_konsultasi'];?>" target="_blank">
											<i class="fa-solid fa-print" style="color: #212529;"></i>
										</a>
										<a class="ml-2" href="<?= base_url();?>riwayat/delete/<?= $d['id_konsultasi'];?>">
											<i class="fa-solid fa-trash fa-lg" style="color: #212529;"></i>
										</a>
									</td>
								</tr>
								<?php endForeach; ?>
							</tbody>
						</table>
					</div>
				</div>
				<!-- /.row (main row) -->
			<!-- /.container-fluid -->
		</section>
		<!-- /.content -->
	</div>
<!-- ./wrapper -->
<?= $this->endSection();?>
