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
			            $error_msg = $this->session->flashdata('error_msg');
			            if ($error_msg) {
			              echo $error_msg;
			            }
			            ?>
			            <form role="form" method="post" action="<?php echo site_url('tenant1controller/register_user'); ?>">
			              <fieldset>
			                <div class="form-group">
			                  <input class="form-control" placeholder="First name" name="UserFirstName" type="text">
			                </div>
			                <div class="form-group">
			                  <input class="form-control" placeholder="Middle name" name="UserMiddleName" type="text">
			                </div>
			                <div class="form-group">
			                  <input class="form-control" placeholder="Last name" name="UserLastName" type="text">
			                </div>
			                <div class="form-group">
			                  <input class="form-control" placeholder="Email" name="UserEmail" type="email">
			                </div>
			                <div class="form-group">
			                  <input class="form-control" placeholder="Password" name="UserPass" type="Password">
			                </div>
			                <div class="form-group">
			                  <input class="form-control" placeholder="YYYY-DD-MM" name="UserBirthdate" type="text">
			                </div>
			                <div class="form-group">
			                  <input class="form-control" placeholder="Mobile no." name="UserContact" type="text">
			                </div>
			                <div class="form-group">
			                  <input class="form-control" placeholder="Gender" name="UserGender" type="text">
			                </div>
			                <input class="btn btn-lg btn-success btn-block" type="submit" name="register" value="Register">
			              </fieldset>
			            </form>
			            <br>
			            <center><b style="color:#000">Already registered ?</b> <br><a style="color:#3a9dca" href="<?php echo site_url('tenant1controller/login_view'); ?>">Login here</a></center>
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
