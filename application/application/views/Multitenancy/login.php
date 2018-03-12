<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>The Creator</title>
<meta name="description" content="">
<meta name="author" content="">
<style type="text/css">
.error { color: red; font: 10px Tahoma; }
</style>
<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="assets/assetsadmin/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="assets/assetsadmin/fonts/font-awesome/css/font-awesome.css">
<link rel="stylesheet" type="text/css"  href="assets/assetsadmin/css/style.css">
<link rel="stylesheet" type="text/css" href="assets/assetsadmin/css/prettyPhoto.css">
<link rel="stylesheet" type="text/css" href="assets/assetsadmin/css/benchnine.css">
<link rel="stylesheet" type="text/css" href="assets/assetsadmin/css/OpenSanscss">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="assetsadmin/js/modernizr.custom.js"></script>
<link rel="stylesheet" href="assets/assetsadmin/css/style_login.css">
</head>


<body>
	<div id="services" class="text-center">
	  <div class="container">
	    <div class="section-title center">
	      <h2>Our Services</h2>
	      <hr>
	      <div class="row">
	        <div class="login-caption clearfix">
	          <div class="col-md-6 col-md-offset-3 login-contact-form">
	            <h3>LOG IN</h3>
							<div class="panel-body">
								<form method="post">
									<div class="form-group">
										<input class="form-control" placeholder="Email"type="Email" name="user" />
										<?=isset($errors)?form_error('user','<div class="error">','</div>'):''?>
									</div>
									<div class="form-group">
										<input class="form-control" type="password" placeholder="Password" name="pwd" />
										<?=isset($errors)?form_error('pwd','<div class="error">','</div>'):''?>
									</div>
										<input class="btn btn-red" type="submit" value="Login" />
								</form>
								<br/>
								<center><b style="color:#000">No account yet?</b> <br><a style	="color:#3a9dca" href="<?php echo site_url('Home/register_view'); ?>">Register here</a></center>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
