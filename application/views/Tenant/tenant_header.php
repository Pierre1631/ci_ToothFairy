<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Clinic</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-theme.min.css'); ?>" />
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/custom.css'); ?>" />
</head>
<body>
	<div class="header">
		<div style="background-color: #146eb4">
			<div class="container">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="<?php echo site_url('userentity/register_view'); ?>"><span class="glyphicon glyphicon-user"></span> <b>SIGN UP</b></a></li>
					<li><a href="<?php echo site_url('userentity/login_view'); ?>" data-target="#LoginModal" data-toggle="modal"><span class="glyphicon glyphicon-log-in"></span> <b>LOGIN</b></a></li>
				</ul>
			</div>
		</div>
		<div class="modal fade" id="RegisterModal" role="dialog">
		    <div class="modal-dialog">
		      	<div class="modal-content">
				</div>
			</div>
		</div>
		<div class="modal fade" id="LoginModal" role="dialog">
		    <div class="modal-dialog">
		      	<div class="modal-content">
				</div>
			</div>
		</div>
		<div>
			<nav class="navbar navbar-default navbar-static-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#headercollapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="">
							<img src="<?php echo base_url('assets/images/tenantlogo.png'); ?>" alt="responsive image" class="img-responsive pull-left" width="145"/>
						</a>
					</div>
					<div class="collapse navbar-collapse" id="headercollapse">
						<nav>
							<ul class="nav navbar-nav" id="adj">
								<li><a href=""><b>HOME</b></a></li>
								<li><a href=""><b>ABOUT US</b></a></li>
								<li><a href=""><b>DENTISTS</b></a></li>
								<li><a href=""><b>LOCATION</b></a></li>
								<li><a href=""><b>SERVICES</b></a></li>
								<li><a href=""><b>UPDATES</b></a></li>
								<li><a href=""><b>MAKE AN APPOINTMENT</b></a></li>
							</ul>
						</nav>
					</div>
				</div>
			</nav>
		</div>
	</div>