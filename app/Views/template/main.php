<?= $this->include('template/head');?>

<?= $this->include('template/sidebar');?>

<?= $this->renderSection('content');?>
<!-- /.content-wrapper -->
  
<?= $this->include('template/footer');?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
<!-- jQuery -->
<?= $this->include('template/close');?>
