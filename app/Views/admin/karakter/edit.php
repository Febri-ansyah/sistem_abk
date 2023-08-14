<?= $this->extend('template/main');?>

<?= $this->section('content');?>  
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Edit Data Karakter</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?= base_url();?>">Home</a></li>
					<li class="breadcrumb-item"><a href="<?= base_url();?>admin/karakter">Karakter</a></li>
					<li class="breadcrumb-item active">Edit</li>
				</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<form action="<?= base_url();?>karakter/save" method="POST">
		<?= csrf_field();?>
		<section class="content bg-light">
			<div class="container">
				<!-- Main row -->
				<div class="card pt-3">
					<div class="card-title ml-auto mr-3">
						<input class="btn btn-dark" type="submit" role="button" value="Simpan">
						<a class="mx-3" href="<?= base_url();?>" style="color:black">Back</a>
					</div>
					<div class="card-body">
							<div class="mb-3 row">
								<label for="staticEmail" class="col-sm-2 col-form-label">Gejala ABK</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="gejala_karakter" value="<?= $karakter['gejala_karakter'];?>" readonly>
								</div>
							</div>
							<div class="mb-3 row">
								<label for="inputPassword" class="col-sm-2 col-form-label">Karakteristik</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="karakteristik_karakter" value="<?= $karakter['karakteristik_karakter'];?>">
								</div>
							</div>

					</div>
				</div>
				<!-- /.row (main row) -->
			<!-- /.container-fluid -->
		</section>
	</form>
</div>
<?= $this->endSection();?>