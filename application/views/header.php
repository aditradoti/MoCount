<!DOCTYPE html>
<html>
<head>
	<title>WELCOME MOCOUNT</title>
	<link href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php echo base_url();?>assets/css/theme.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php echo base_url();?>assets/images/icons/css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />

</head>
<body>
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <img src="<?php echo base_url();?>assets/images/logo.jpg" class="img-responsive">
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo base_url();?>user/home">HOME</a></li>
        <li><a href="<?php echo base_url();?>penyimpanan/tambah_penyimpanan">PENYIMPANAN</a></li>
        <li><a href="<?php echo base_url();?>pemasukan/tambah_pemasukan">PEMASUKAN</a></li>
        <li><a href="<?php echo base_url();?>pengeluaran/tambah_pengeluaran">PENGELUARAN</a></li>
        <li><a href="<?php echo base_url();?>keinginan/tambah_keinginan">KEINGINAN</a></li>
        <li><a href="<?php echo base_url();?>login/logout">LOGOUT</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>