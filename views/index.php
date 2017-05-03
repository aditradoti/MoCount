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
        <li><a href="<?php echo base_url();?>user/tambah_user">Register</a></li>
        <!-- <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li> -->
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="content">
	<div class="form-login" >
  <center>
		<form class="navbar-form " action="<?php echo base_url();?>login/cek_login" method="POST">
		    <div class="form-group">
        
		  		<input type="text" class="form-control" placeholder="Username" name="username">
		    </div><br><br>
		    <div class="form-group">
		    	<input type="password" class="form-control" placeholder="Password" name="password">
		    </div><br><br>
		   	<input type="submit" class="btn btn-primary"  value="LOGIN"></input>
		</form>
  </center>
	</div>
</div>
</body>
</html>