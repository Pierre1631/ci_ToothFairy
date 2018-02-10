<!DOCTYPE html>
<html lang="en">
<head>
	<title>Tenant 1 || Homepage</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/custom.css'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-theme.css'); ?>" />
</head>
<body>
	<div class="container" id="header">
		<img src="<?php echo base_url('assets/images/Tenant1Logo.png'); ?>" alt="responsive image" class="img-responsive pull-left" width="120px"/>
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
			    <li><a id="nvclr" href="<?php echo site_url('tenant1controller'); ?>"><b>HOME</b></a></li>
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
		<div class="col-md-12" id="homebann-bg">
			<div class="col-md-7">
				<h3 id="tbann1" style="margin-top:100px;font-weight:bold">WE TAKE CARE OF YOUR TEETH</h3>
				<p id="tbann1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ille, ut dixi,
				vitiose. Quod autem in homine praestantissimum atque optimum est, id deseruit.
				Quis Pullum Numitorium Fregellanum, proditorem, quamquam rei publicae nostrae
				profuit, non odit? Atqui reperies, inquit, in hoc quidem pertinacem;</p>
				<br>

			</div>
		</div>
	</div>

	<br>

	<div class="container">
		<div class="col-md-3" id="homesrv-border" style="background-color:#26e0b1;">
			<img src="<?php echo base_url('assets/images/TeethWhite1.jpg'); ?>" alt="responsive image" class="img-responsive pull-left" id="homesrv-image"/>
			<h4 style="text-align:center; color:white;">Teeth Whitening</h4>
		</div>
		<div class="col-md-3" id="homesrv-border" style="background-color:#29c8a8;">
			<img src="<?php echo base_url('assets/images/Dental-Implant1.jpg'); ?>" alt="responsive image" class="img-responsive pull-left" id="homesrv-image"/>
			<h4 style="text-align:center; color:white;">Dental Implant</h4>
		</div>
		<div class="col-md-3" id="homesrv-border" style="background-color:#349eab;">
			<img src="<?php echo base_url('assets/images/Dental-Xray1.jpg'); ?>" alt="responsive image" class="img-responsive pull-left" id="homesrv-image"/>
			<h4 style="text-align:center; color:white;">Dental X-ray</h4>
		</div>
		<div class="col-md-3" id="homesrv-border" style="background-color:#2f87ad;">
			<img src="<?php echo base_url('assets/images/Tooth-Extract1.jpg'); ?>" alt="responsive image" class="img-responsive pull-left" id="homesrv-image"/>
			<h4 style="text-align:center; color:white;">Tooth Extraction</h4>
		</div>
	</div>

	<br>

	<div class="container">
		<div class="col-md-7" id="home-about">
			<h2 style="color:#1ea8d6"><b>ABOUT OUR CLINIC</b></h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ille, ut dixi,
			vitiose. Quod autem in homine praestantissimum atque optimum est, id deseruit.
			Quis Pullum Numitorium Fregellanum, proditorem, quamquam rei publicae nostrae
			profuit, non odit? Atqui reperies, inquit, in hoc quidem pertinacem;</p>
		</div>
		<div class="col-md-5" style="min-height:300px;">
			<img src="<?php echo base_url('assets/images/Dentist1.jpg'); ?>" alt="responsive image" class="img-responsive pull-left" width="auto" style="margin:auto"/>
		</div>
	</div>

	<div class="container" id="footer">
		<div class="col-md-12">
			ToothFairy &copy; 2018, All Right Reserved
		</div>
	</div>
</body>
</html>
