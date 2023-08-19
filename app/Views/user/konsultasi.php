<?= $this->extend('template/main');?>

<?= $this->section('content');?>  
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Konsultasi Anak Berkebutuhan Khusus</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Konsultasi</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!--  -->
	<form class="content bg-light">
		<div class="container">
			<?php foreach($karakter as $k): ?>
			<div class="card active">
			  <div class="card-header">
				Apakah anak <?= strtolower($k['karakteristik_karakter']);?> ?
			  </div>
			  <div class="card-body">
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="<?= $k['gejala_karakter'];?>" id="<?= $k['gejala_karakter'];?>y" value="Y">
					  <label class="form-check-label" for="<?= $k['gejala_karakter'];?>y">Ya</label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="<?= $k['gejala_karakter'];?>" id="<?= $k['gejala_karakter'];?>n" value="N">
					  <label class="form-check-label" for="<?= $k['gejala_karakter'];?>n">Tidak</label>
					</div>
			  </div>
			</div>

			<?php endForeach; ?>
			<input class="btn btn-dark" type="submit" role="button" value="Simpan">
		</div>
	</form>
	<!--  -->
</div>
<!-- ./wrapper -->


<style>
	.card.inactive{
		opacity: 0;
		pointer-events: none;
	}
</style>
<?= $this->endSection();?>