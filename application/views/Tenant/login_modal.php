<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">&times;</button>
	<h3 class="modal-title">Login</h3>
</div>
<div class="modal-body">
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
	<form role="form" method="post" action="<?php echo site_url('userentity/login_user'); ?>" >
		<div class="form-group">
			<label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
			<input id="usrname" class="form-control" placeholder="Email" name="UserEmail" type="email" required>
		</div>
		<div class="form-group">
			<label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
			<input id="psw" class="form-control" placeholder="Password" name="UserPass" type="password" required>
		</div>
		<input class="btn btn-lg btn-info btn-block" type="submit" name="login" value="Login">
	</form>
</div>
<div class="modal-footer">
	<center><b>Not registered ?</b> <br><a href="<?php echo site_url('userentity/register_view'); ?>">Register here</a></center>
</div>