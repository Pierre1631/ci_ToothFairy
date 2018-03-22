<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>The Tooth Fairy</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
  <!-- CSS Files -->
  <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="./assets/css/now-ui-kit.css?v=1.1.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="./assets/css/demo.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome/css/font-awesome.css">
  <link rel="stylesheet" type="text/css"  href="assets/css/style.css">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
  <script type="text/javascript" src="assets/js/modernizr.custom.js"></script>
</head>
</head>

<body class="login-page sidebar-collapse">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="home" rel="tooltip" title="Designed by ANC. Coded by Wisdom Tooth" data-placement="bottom">
                    Tooth Fairy
                </a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="assets/img/blurred-image-1.jpg">
                <ul class="navbar-nav">
          <!--          <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)" onclick="scrollToDownload()">
                          <p>Apply for Multitenancy</p>
                        </a>
                    </li>-->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <p>Services</p>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login" id="navbarDropdownMenuLink" aria-haspopup="true" aria-expanded="false">
                          <p>Log In</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signup" id="navbarDropdownMenuLink" aria-haspopup="true" aria-expanded="false">
                          <p>Sign Up</p>
                        </a>
                    </li>
                    <li class="nav-item" class="section section-javascript" id="javascriptComponents">
                        <a class="nav-link" href="#ContactModal" id="modals" data-toggle="modal">
                          <p>Contact Us</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="#" target="_blank">
                            <i class="fa fa-twitter"></i>
                            <p class="d-lg-none d-xl-none">Twitter</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="#" target="_blank">
                            <i class="fa fa-facebook-square"></i>
                            <p class="d-lg-none d-xl-none">Facebook</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="#" target="_blank">
                            <i class="fa fa-instagram"></i>
                            <p class="d-lg-none d-xl-none">Instagram</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="modal fade" id="ContactModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header justify-content-center">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              <i class="now-ui-icons ui-1_simple-remove"></i>
            </button>
            <h4 class="title title-up">Contact Us</h4>
          </div>
          <div class="modal-body">
            <div class="col-md-12 col-md-offset-3">
              <h3>Leave us a message</h3>
               <form name="sentMessage" id="contactForm" novalidate>
                 <div class="row">
                   <div class="col-md-8">
                     <div class="form-group">
                       <input type="text" id="name" class="form-control" placeholder="Name" required="required">
                       <p class="help-block text-danger"></p>
                     </div>
                   </div>
                   <div class="col-md-8">
                     <div class="form-group">
                       <input type="email" id="email" class="form-control" placeholder="Email" required="required">
                       <p class="help-block text-danger"></p>
                     </div>
                   </div>
                 </div>
                 <div class="form-group">
                   <textarea name="message" id="message" class="form-control" rows="5" placeholder="Message" required></textarea>
                   <p class="help-block text-danger"></p>
                 </div>
                 <div class="modal-footer">
                   <button type="button" class="btn btn-success">Send Message</button>
                   <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                 </div>
               </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="page-header" filter-color="orange">
      <div class="page-header-image" style="background-image:url(assets/img/login.jpg)"></div>
      <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-body">
                  <img src="<?php echo base_url('assets/img/template1.png'); ?>" class="img-responsive">
              </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="col-md-4 content-center">
          <div class="card card-login card-plain">
            <form class="form" method="post" action="signup/register_user" onsubmit="return checkCheckBoxes(this);">
              <div class="header header-primary text-center">
                <div class="logo-container">
                  <img src="assets/img/now-logo.png"  alt="">
                </div>
              </div>
              <div class="content">
               <?php
                 $success_msg = $this->session->flashdata('success_msg');
                 $error_msg = $this->session->flashdata('error_msg');
                 if ($success_msg) {
               ?>
               <div class="text-success">
                 <?php echo $success_msg; ?>
               </div>
               <?php
               }
               if ($error_msg) {
               ?>
               <div class="text-danger">
                      <?php echo $error_msg; ?>
               </div>
               <?php
               }
               ?>
                <div class="input-group form-group-no-border input-lg">
                  <span class="input-group-addon">
                    <i class="now-ui-icons users_circle-08"></i>
                  </span>
                  <input class="form-control" placeholder="Email" type="Email" name="Email" required />
                </div>
                <div class="input-group form-group-no-border input-lg">
                  <span class="input-group-addon">
                    <i class="now-ui-icons text_caps-small"></i>
                  </span>
                  <input class="form-control" type="password" placeholder="Password" name="Pass" required />
                </div>
                <div class="input-group form-group-no-border input-lg">
                  <span class="input-group-addon">
                    <i class="now-ui-icons text_caps-small"></i>
                  </span>
                  <input class="form-control" type="password" placeholder="Confirm Password" name="confirmpassword" required />
                </div>
                <div >
                  <input type="radio" name="template" />Template 1
                  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Click to view</button>
                </div>
                <div >
                  <input type="radio" name="template" />Template 2
                  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Click to view</button>
                </div>
                <div class="footer text-center">
                  <input class="btn btn-primary btn-round btn-lg btn-block" type="submit" value="Register"/>
                </div>
              </div>
            </form>
            <div class="pull-left">
              <h6><a href="login" class="link">Already have an account?</a></h6>
            </div>
            <div class="pull-right">
              <h6><a href="#pablo" class="link">Need Help?</a></h6>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
            <div class="container">
                <nav>
                    <ul>
                        <li>
                            <a href="home">
                                Tooth Fairy
                            </a>
                        </li>
                        <li>
                            <a href="aboutus">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="blog">
                                Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, Designed by
                    <a href="#" target="_blank">ANC</a>. Coded by
                    <a href="#" target="_blank">Wisdom Tooth</a>.
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="./assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="./assets/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="./assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="./assets/js/now-ui-kit.js?v=1.1.0" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/signup.js'); ?>"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // the body of this function is in assets/js/now-ui-kit.js
        nowuiKit.initSliders();
    });
    function scrollToDownload() {
        if ($('.section-download').length != 0) {
            $("html, body").animate({
                scrollTop: $('.section-download').offset().top
            }, 1000);
        }
    }
</script>
</html>
