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
				<ul class="siglog">
					<li><a href="<?php echo site_url('Customer_entity/logout'); ?>"  class="pull-right"><span id="sig" class="glyphicon glyphicon-log-in"></span> <b>Logout</b></a></li>
					<li><a href="<?php echo site_url('Customer_entity/index/dashboard'); ?>" class="pull-right" ><b><?php echo $UserFirstName;?></b></a></li>
				</ul>
			</div>
		</div>
		<div class="modal fade" id="LoginModal" role="dialog">
		    <div class="modal-dialog">
		      	<div class="modal-content">
				</div>
			</div>
		</div>
		<div class="content white">
			<nav class="navbar navbar-default" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#headercollapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="<?php echo site_url('userentity'); ?>">
							<img src="<?php echo base_url('assets/images/tenantlogo.png'); ?>" alt="responsive image" class="img-responsive pull-left" width="145"/>
						</a>
					</div>
					<div class="collapse navbar-collapse" id="headercollapse">
						<nav>
							<ul class="nav navbar-nav">
								<li><a href="<?php echo site_url('userentity'); ?>"><b>HOME</b></a></li>
								<li><a href="<?php echo site_url('userentity/tenant_about'); ?>"><b>ABOUT US</b></a></li>
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