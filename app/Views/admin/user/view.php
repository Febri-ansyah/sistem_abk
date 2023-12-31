<?= $this->extend('template/main');?>

<?= $this->section('content');?>  
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1 class="m-0 text-dark">Kelola Rule</h1>
					</div><!-- /.col -->
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active">Users</li>
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
						<a class="btn btn-dark" href="<?= base_url();?>akun/add" role="button">Tambah</a>
						<a class="mx-3" href="<?= base_url();?>" style="color:black">Back</a>
					</div>
					<div class="card-body">
						<?php if (session()->getFlashdata('pesan')) :?>
						<div class="alert alert-success alert-dismissible fade show" role="alert">
							<?= session()->getFlashdata('pesan');?>
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>
						<?php endif ?>
						<table class="table table-stripped table-hover">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">Nama</th>
									<th scope="col">Email</th>
									<th scope="col">Level</th>
									<th scope="col">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $i=0; ?>
								<?php foreach ($user as $u):?>
								<tr>
									<th scope="row"><?= ++$i;?></th>
									<td><?= $u['nama_user'];?></td>
									<td><?= $u['email_user'];?></td>
									<?php if($u['level_user']=='1'): ?>
										<td>Administrator</td>
									<?php endif ?>
									<?php if($u['level_user']=='2'): ?>
										<td>Guest</td>
									<?php endif ?>
									<td>
										<a class="mr-2" href="<?= base_url();?>edit/akun/<?= $u['nama_user'];?>" role="button">
											<i class="fa-solid fa-pencil fa-lg" style="color: #212529;"></i>
										</a>
										<a class="ml-2" href="<?= base_url();?>delete/akun/<?= $u['nama_user'];?>" role="button">
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
