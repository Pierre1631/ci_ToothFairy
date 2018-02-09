<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Tenant1 Register</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css'); ?>" />
	
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-panel panel panel-success">
					<div class="panel-heading">
						<h3 class="panel-title">Registration</h3>
					</div>
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
							<fieldset>
								<div class="form-group">
									<input class="form-control" placeholder="Email" name="UserEmail" type="email">
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="Password" name="UserPass" type="password">
								</div>
								<input class="btn btn-lg btn-success btn-block" type="submit" name="login" value="Login">
							</fieldset>
						</form>
						<center><b>Already registered ?</b> <br><a href="<?php echo site_url('tenant1controller/register_view'); ?>">Register here</a></center>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>