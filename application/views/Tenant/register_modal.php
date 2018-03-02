<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">&times;</button>
	<h3 class="modal-title">Register</h3>
</div>
<div class="modal-body">
	<?php
		$error_msg = $this->session->flashdata('error_msg');
		if ($error_msg) {
			echo $error_msg;
		}
	?>
	<form role="form" method="post" action="<?php echo site_url('userentity/register_user'); ?>">
		<div class="form-group">
			<input class="form-control" placeholder="First name" name="UserFirstName" type="text" required>
		</div>
		<div class="form-group">
			<input class="form-control" placeholder="Middle name" name="UserMiddleName" type="text" required>
		</div>
		<div class="form-group">
			<input class="form-control" placeholder="Last name" name="UserLastName" type="text" required>
		</div>
		<div class="form-group">
			<input class="form-control" placeholder="Email" name="UserEmail" type="email" required>
		</div>
		<div class="form-group">
			<input class="form-control" placeholder="Password" name="UserPass" type="Password" required>
		</div>
		<div class="form-group">
			<input class="form-control" placeholder="YYYY-DD-MM" name="UserBirthdate" type="text" required>
		</div>
		<div class="form-group">
			<input class="form-control" placeholder="Mobile no." name="UserContact" type="text" required>
		</div>
		<div class="form-group">
			<input class="form-control" placeholder="Gender" name="UserGender" type="text" required>
		</div>
		<input class="btn btn-lg btn-info btn-block" type="submit" name="register" value="Register">
	</form>
</div>
<div class="modal-footer">
	<center><b>Already registered ?</b> <br><a href="<?php echo site_url('userentity/login_view'); ?>" data-toggle="modal" data-target="#LoginModal" data-dismiss="modal">Login here</a></center>
</div>