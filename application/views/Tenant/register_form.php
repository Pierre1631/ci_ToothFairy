	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/register_form.css'); ?>" />
	<div class="banner"></div>
		<div class="heading">
			<h1>sign up</h1>
			<h3>It's Free</h3>
		</div>
	<div class="cont">
		<div class="container_1">
			<?php
				$error_msg = $this->session->flashdata('error_msg');
				if ($error_msg) {
					echo $error_msg;
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
						<label class="form-label">Gender <span class="asterisk">*</span></label>
						<div class="form-input">
							<select class="form-dropdown" name="UserGender" required>
								<option value="">&nbsp;</option>
								<option value="Male"> Male </option>
								<option value="Female"> Female </option>
							</select>
						</div>
					</li>
					<li>
						<label class="form-label">Date of Birth <span class="asterisk">*</span></label>
						<div class="form-input dob">
							<span class="form-sub-label" name="UserBirthdate">
								<select class="form-dropdown" name="day" required>
									<option>&nbsp;</option>
									<option value="1"> 1 </option>
									<option value="2"> 2 </option>
									<option value="3"> 3 </option>
									<option value="4"> 4 </option>
									<option value="5"> 5 </option>
									<option value="6"> 6 </option>
									<option value="7"> 7 </option>
									<option value="8"> 8 </option>
									<option value="9"> 9 </option>
									<option value="10"> 10 </option>
									<option value="11"> 11 </option>
									<option value="12"> 12 </option>
									<option value="13"> 13 </option>
									<option value="14"> 14 </option>
									<option value="15"> 15 </option>
									<option value="16"> 16 </option>
									<option value="17"> 17 </option>
									<option value="18"> 18 </option>
									<option value="19"> 19 </option>
									<option value="20"> 20 </option>
									<option value="21"> 21 </option>
									<option value="22"> 22 </option>
									<option value="23"> 23 </option>
									<option value="24"> 24 </option>
									<option value="25"> 25 </option>
									<option value="26"> 26 </option>
									<option value="27"> 27 </option>
									<option value="28"> 28 </option>
									<option value="29"> 29 </option>
									<option value="30"> 30 </option>
									<option value="31"> 31 </option>
								</select>
								<label class="form-sub-label1"> Day </label>
							</span>
							<span class="form-sub-label">
								<select class="form-dropdown" name="month" required>
									<option>&nbsp;</option>
									<option value="January"> January </option>
									<option value="February"> February </option>
									<option value="March"> March </option>
									<option value="April"> April </option>
									<option value="May"> May </option>
									<option value="June"> June </option>
									<option value="July"> July </option>
									<option value="August"> August </option>
									<option value="September"> September </option>
									<option value="October"> October </option>
									<option value="November"> November </option>
									<option value="December"> December </option>
								 </select>
								<label class="form-sub-label1"> Month </label>
							</span>
							<span class="form-sub-label">
								<input type="text" class="year" name="UserBirthdate" placeholder=" Enter Year" required>
								<label class="form-sub-label1"> Year </label>
							</span>
						</div>
					</li>
					<li>
						<label class="form-label">Contact Number <span class="asterisk">*</span></label>
						<div class="form-input"><input placeholder="Mobile number" name="UserContact" type="text" required></div>
					</li>
					<li>
						<label class="form-label">Email Address <span class="asterisk">*</span></label>
						<div class="form-input"><input placeholder="patient'sname@example.com" name="UserEmail" type="email" required></div>
					</li>
					<li>
						<label class="form-label">Password <span class="asterisk">*</span></label>
						<div class="form-input"><input placeholder="Enter password" name="UserPass" type="Password" required></div>
					</li>
				</ul>
				<input type="submit" value="Create Account">
			</form>
		</div>
	</div>
	