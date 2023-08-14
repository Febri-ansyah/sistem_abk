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
            <a class="btn btn-dark" href="<?= base_url();?>user/add" role="button">Tambah</a>
            <a class="mx-3" href="<?= base_url();?>" style="color:black">Back</a>
          </div>
          <div class="card-body">
            <table class="table table-stripped table-hover">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">User ID</th>
                  <th scope="col">Level</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $i=0; ?>
                <?php foreach ($user as $u):?>
                <tr>
                  <th scope="row"><?= ++$i;?></th>
                  <td><?= $u['id_user'];?></td>
                  <?php if($u['level_user']=='1'): ?>
                    <td>Administrator</td>
                  <?php endif ?>
                  <?php if($u['level_user']!='1'): ?>
                    <td>Guest</td>
                  <?php endif ?>
                  <td>
                    <a class="mr-2" href="<?= base_url();?>edit/user/<?= $u['id_user'];?>" role="button">
                      <i class="fa-solid fa-pencil fa-lg" style="color: #212529;"></i>
                    </a>
                    <a class="ml-2" href="<?= base_url();?>delete/user/<?= $u['id_user'];?>" role="button">
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
