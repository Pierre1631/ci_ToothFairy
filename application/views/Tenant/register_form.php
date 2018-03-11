	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/register_form.css'); ?>" />
	<div class="banner"></div>
		<div class="heading">
			<h1>sign up</h1>
			<h3>It's Free</h3>
		</div>
	<div class="cont">
		<div class="container_1">
			<?php
				$success_msg = $this->session->flashdata('success_msg');
				if ($success_msg) {
					?>
						<div class="alert alert-success">
							<?php echo $success_msg; ?>
						</div>
					<?php
				}
				$error_msg = $this->session->flashdata('error_msg');
				if ($error_msg) {
					?>
						<div class="alert alert-danger">
							<?php echo $error_msg; ?>
						</div>
					<?php
				}
			?>
			<form method="post" action="<?php echo site_url('userentity/register_user'); ?>">
				<ul class="field-list">
					<li>
						<label class="form-label">First Name <span class="asterisk">*</span></label>
						<div class="form-input"><input placeholder="Enter patient's first name" name="UserFirstName" type="text" required></div>
					</li>
					<li>
						<label class="form-label">Middle Name <span class="asterisk">*</span></label>
						<div class="form-input"><input placeholder="Enter patient's middle name" name="UserMiddleName" type="text" required></div>
					</li>
					<li>
						<label class="form-label">Last Name <span class="asterisk">*</span></label>
						<div class="form-input"><input placeholder="Enter patient's last name" name="UserLastName" type="text" required></div>
					</li>
					<li>
						<label class="form-label">Email Address <span class="asterisk">*</span></label>
						<div class="form-input"><input placeholder="patient'sname@example.com" name="UserEmail" type="email" required></div>
					</li>
					<li>
						<label class="form-label">Password <span class="asterisk">*</span></label>
						<div class="form-input"><input placeholder="Enter password" name="UserPass" type="Password" required></div>
					</li>
					<li>
						<label class="form-label">Confirm Password <span class="asterisk">*</span></label>
						<div class="form-input"><input placeholder="Retype password" name="confirmpassword" type="Password" required></div>
						<small class="help-block text-danger"><?php echo form_error('confirmpassword');?></small>
					</li>
				</ul>
				<input type="submit" value="Create Account">
			</form>
		</div>
	</div>
	