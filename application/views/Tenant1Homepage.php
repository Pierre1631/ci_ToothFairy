<!DOCTYPE html>
<html lang="en">
<head>
	<title>Tenant 1 | Homepage</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/custom.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-theme.css" />
</head>
<body>
	<div class="container" id="header">
		<img src="assets/images/Tenant1Logo.png" alt="responsive image" class="img-responsive pull-left" width="118"/>
		<h1 id="adj"><b>DENTAL </b>CLINIC</h1>
		<small>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="<?php echo site_url('tenant1controller/register_view'); ?>"><span class="glyphicon glyphicon-user"></span> <b>SIGN UP</b></a></li>
			<li><a href="<?php echo site_url('tenant1controller/login_view'); ?>"><span class="glyphicon glyphicon-log-in"></span> <b>LOGIN</b></a></li>
    	</ul>
		</small>
	</div>
	<div class="container">
		<nav>
			<ul class="nav navbar-nav">
			    <li><a id="nvclr" href=""><b>HOME</b></a></li>
			    <li><a id="nvclr" href=""><b>APPOINTMENT</b></a></li>
			    <li><a id="nvclr" href=""><b>ABOUT US</b></a></li>
	      		<li><a id="nvclr" href=""><b>DENTISTS</b></a></li>
	      		<li><a id="nvclr" href=""><b>LOCATION</b></a></li>
	      		<li><a id="nvclr" href=""><b>SERVICES</b></a></li>
	      		<li><a id="nvclr" href=""><b>UPDATES</b></a></li>
			</ul>
		</nav>
	</div>
	<div class="container">
		<img src="assets/images/Banner.png" alt="responsive image" class="img-responsive"/>
	</div>
	<div class="container" id="footer">
		<div class="col-md-12">
			ToothFairy &copy; 2018, All Right Reserved
		</div>
	</div>
</body>
</html>
