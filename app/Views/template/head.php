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