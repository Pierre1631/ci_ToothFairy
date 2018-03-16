<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <style type="text/css">
      .error { color: red; font: 10px Tahoma; }
    </style>
    <title>Login Page - Toothfairy</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/now-ui-kit.css?v=1.1.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets/css/demo.css" rel="stylesheet" />



    <link rel="stylesheet" type="text/css" href="assets/assetsadmin/fonts/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css"  href="assets/assetsadmin/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/assetsadmin/css/prettyPhoto.css">
    <link rel="stylesheet" type="text/css" href="assets/assetsadmin/css/benchnine.css">
    <link rel="stylesheet" type="text/css" href="assets/assetsadmin/css/OpenSanscss">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="assetsadmin/js/modernizr.custom.js"></script>
</head>

<body class="login-page sidebar-collapse">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
        <div class="container">
            <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="../assets/img/blurred-image-1.jpg">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="home">Back to Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://github.com/creativetimofficial/now-ui-kit/issues">Have an issue?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank">
                            <i class="fa fa-twitter"></i>
                            <p class="d-lg-none d-xl-none">Twitter</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/CreativeTim" target="_blank">
                            <i class="fa fa-facebook-square"></i>
                            <p class="d-lg-none d-xl-none">Facebook</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com/CreativeTimOfficial" target="_blank">
                            <i class="fa fa-instagram"></i>
                            <p class="d-lg-none d-xl-none">Instagram</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="page-header" filter-color="orange">
        <div class="page-header-image" style="background-image:url(assets/img/login.jpg)"></div>
        <div class="container">
            <div class="col-md-4 content-center">
                <div class="card card-login card-plain">
                    <form class="form" method="post" action="login/login_user">
                        <div class="header header-primary text-center">
                            
                        </div>
                        <div class="content">
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
                           <div class="input-group form-group-no-border input-lg">
                               <span class="input-group-addon">
                                   <i class="now-ui-icons users_circle-08"></i>
                               </span>
                               <input class="form-control" placeholder="Email"type="Email" name="user" />
                           </div>
                           <div class="input-group form-group-no-border input-lg">
                               <span class="input-group-addon">
                                   <i class="now-ui-icons text_caps-small"></i>
                               </span>
                               <input class="form-control" type="password" placeholder="Password" name="pwd" />
                           </div>

                           <div class="footer text-center">
                              <input class="btn btn-primary btn-round btn-lg btn-block" type="submit" value="Login"/>
                           </div>
	                        </form>
                      </div>
                      <div class="pull-left">
                            <h6>
                                <a href="register" class="link">Create Account?</a>
                            </h6>
                        </div>
                        <div class="pull-right">
                            <h6>
                                <a href="#pablo" class="link">Need Help?</a>
                            </h6>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <nav>
                    <ul>
                        <li>
                            <a href="https://www.creative-tim.com">
                                Tooth Fairy
                            </a>
                        </li>
                        <li>
                            <a href="http://presentation.creative-tim.com">
                                About Us
                            </a>
                        </li>
                      </ul>
                </nav>
                <div class="copyright">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, Tooth Fairy
                </div>
            </div>
        </footer>
    </div>
</body>
<!--   Core JS Files   -->
<script src="assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="assets/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="assets/js/now-ui-kit.js?v=1.1.0" type="text/javascript"></script>

</html>
