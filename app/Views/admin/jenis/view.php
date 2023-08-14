<?= $this->extend('template/main');?>

<?= $this->section('content');?>  
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1 class="m-0 text-dark">Jenis Jenis ABK</h1>
					</div><!-- /.col -->
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active">Jenis</li>
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
						<a class="btn btn-dark" href="<?= base_url();?>jenis/add" role="button">Tambah</a>
						<a class="mx-3" href="<?= base_url();?>" style="color:black">Back</a>
					</div>
					<div class="card-body">
						<?php if (session()->getFlashdata('pesan')) :?>
						</div>
						<div class="alert alert-success alert-dismissible fade show" role="alert">
						  <?= session()->getFlashdata('pesan');?>
						  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>
						<?php endif ?>
						<table class="table table-stripped table-hover">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">Kode Jenis</th>
									<th scope="col">Jenis ABK</th>
									<th scope="col">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $i=0; ?>
								<?php foreach ($jenis as $j):?>
								<tr>
									<th scope="row"><?= ++$i;?></th>
									<td><?= $j['kode_jenis'];?></td>
									<td><?= $j['nama_jenis'];?></td>
									<td>
										<a class="mr-2" href="<?= base_url();?>edit/jenis/<?= $j['kode_jenis'];?>" role="button">
											<i class="fa-solid fa-pencil fa-lg" style="color: #212529;"></i>
										</a>
										<a class="ml-2" href="<?= base_url();?>delete/jenis/<?= $j['kode_jenis'];?>" role="button">
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
