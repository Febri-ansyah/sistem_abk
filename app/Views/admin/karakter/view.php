<?= $this->extend('template/main');?>

<?= $this->section('content');?>  
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Karakteristik ABK</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Karakter</li>
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
					<a class="btn btn-dark" href="<?= base_url();?>karakter/add" role="button">Tambah</a>
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
								<th scope="col">Gejala</th>
								<th scope="col">Karakteristik</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php $i=0; ?>
							<?php foreach ($karakter as $k):?>
							<tr>
								<th scope="row"><?= ++$i;?></th>
								<td><?= $k['gejala_karakter'];?></td>
								<td><?= $k['karakteristik_karakter'];?></td>
								<td>
									<a class="mr-2" href="<?= base_url();?>edit/karakter/<?= $k['gejala_karakter'];?>" role="button">
										<i class="fa-solid fa-pencil fa-lg" style="color: #212529;"></i>
									</a>
									<a class="ml-2" href="<?= base_url();?>delete/karakter/<?= $k['gejala_karakter'];?>" role="button">
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