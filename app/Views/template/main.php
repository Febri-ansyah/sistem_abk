<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <?php if (isset($title)): ?>
    <title>Sistem ABK | <?= ucfirst($title);?></title>
  <?php endif ?>
  <?php if (!isset($title)): ?>
    <title>Sistem ABK | Dashbord</title>
  <?php endif ?>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap -->
  <link href="<?= base_url();?>plugins/bootstrap/css/bootstrap5.3.1.min.css" rel="stylesheet" >
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url();?>plugins/fontawesome-free/css/all.min.css">
  <link href="<?= base_url();?>plugins/fontawesome-free-6.4.2/css/all.css" rel="stylesheet">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url();?>dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url();?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<?= $this->include('template/sidebar');?>

<?= $this->renderSection('content');?>
<!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- jQuery -->
<script src="<?= base_url();?>plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url();?>plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url();?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url();?>plugins/bootstrap/js/bootstrap5.3.1.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url();?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url();?>dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url();?>dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url();?>dist/js/demo.js"></script>
</body>
</html>