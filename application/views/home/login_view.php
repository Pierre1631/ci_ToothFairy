<!DOCTYPE html>
<html lang="en">
<header class="login-top-header">
	<div class="container">
		<div class="row">
			<div class="col-xs-3 header-logo">
				<br>
				<a href="index.html"><img src="assets/images/logo3.png" alt="logo" class="img-responsive logo"></a>
			</div>
		</div>
	</div>
</header> <!-- end of header area -->
<body>
	<!-- Header -->
	<div id="intro">
	  <div class="intro-body">
			<div class="container">
				<div class="row">
					<div class="login-caption clearfix">
						<div class="login-heading text-center">
							<h2>Sign In</h2>
						</div>
						<div class="col-md-6 col-md-offset-3 login-contact-form">
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
									<center><a style="color:#3a9dca" href="<?php echo site_url('tenant1controller/register_view'); ?>">Forget Password?</a></center>
									<center><b style="color:#000">No account yet?</b> <br><a style="color:#3a9dca" href="<?php echo site_url('tenant1controller/register_view'); ?>">Register here</a></center>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src='https://andwecode.com/wp-content/uploads/2015/10/jquery.leanModal.min_.js'></script>
	<script  src="assets/js/login.js"></script>
</div>
	<!-- footer starts here -->
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
