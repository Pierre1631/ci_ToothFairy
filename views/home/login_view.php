<!DOCTYPE html>
<html lang="en">

<header class="top-header">
	<div class="container">
		<div class="row">
			<div class="col-xs-3 header-logo">
				<br>
				<a href="index.html"><img src="assets/images/logo3.png" alt="logo" class="img-responsive logo"></a>
			</div>

			<div class="col-md-9">
				<nav class="navbar navbar-default">
					<div class="container-fluid nav-bar">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

							<ul class="nav navbar-nav navbar-right">
								<li><a class="menu" href="#home" >HOME</a></li>
								<li><a class="menu" href="#about">ABOUT US</a></li>
								<li><a class="menu" href="#service">OUR SERVICES</a></li>
								<li><a class="menu" href="#team">OUR TEAM</a></li>
								<li><a class="menu" href="#contact">CONTACT US</a></li>
								<li role="presentation" class="divider"><a>|</a></li>
								<li><a class="active" href="index.php/Tenant1Controller/login_view/">Log In</a></li>
								<li><a href="index.php/Tenant1Controller/register_view/">Sign Up</a></li>
							</ul>
						</div><!-- /navbar-collapse -->
					</div><!-- / .container-fluid -->
				</nav>
			</div>
		</div>
	</div>
</header> <!-- end of header area -->
<body>
<div class="api-map" id="contact">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 map" id="map"></div>
		</div>
	</div>
</div><!-- end of map section -->

<!-- contact section starts here -->
<section class="contact">
	<div class="container">
		<div class="row">
			<div class="contact-caption clearfix">
				<div class="contact-heading text-center">
					<h2>Log In</h2>
				</div>

				<div class="col-md-6 col-md-offset-3 contact-form">
					<h3>LOG IN</h3>
					<div class="panel-body">
						<?php
							$success_msg = $this->session->flashdata('success_msg');
							$error_msg = $this->session->flashdata('error_msg');

							if ($success_msg) {
								?>
								<div class="alert alert-success">
									<?php echo $success_msg; ?>
								</div>
								<?php
							}
							if ($error_msg) {
								?>
								<div class="alert alert-danger">
									<?php echo $error_msg; ?>
								</div>
								<?php
							}
							?>
							<form role="form" method="post" action="<?php echo site_url('tenant1controller/login_user'); ?>">
								<fieldset >
									<div class="form-group">
										<input class="form-control" placeholder="Email" name="UserEmail" type="email">
									</div>
									<div class="form-group">
										<input class="form-control" placeholder="Password" name="UserPass" type="password">
									</div>
									<input class="btn btn-lg btn-success btn-block" type="submit" name="login" value="Login">
								</fieldset>
							</form>
							<br>
							<center><b>No account yet?</b> <br><a style="color:white" href="<?php echo site_url('tenant1controller/register_view'); ?>">Register here</a></center>
						</div>
					</div>
				</div>
			</div>
		</div>
</section><!-- end of contact section -->



<!-- script tags
============================================================= -->
<script src="assets/js/jquery-2.1.1.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
<script src="assets/js/gmaps.js"></script>
<script src="assets/js/smoothscroll.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/custom.js"></script>
</body>
</html>
