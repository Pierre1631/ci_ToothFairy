<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>My Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/now-ui-dashboard.css?v=1.0.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets/demo/demo.css" rel="stylesheet" />
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/adj.css'); ?>"> -->
</head>
<?php
//retrieve session
$user = $this->session->userdata('user');
?>
<body class="">
  <?php
    $success_msg= $this->session->flashdata('success_msg');
    $error_msg= $this->session->flashdata('error_msg');

    if($success_msg){
      echo "<script type='text/javascript'>alert('$success_msg');</script>";
    }
    if($error_msg){
      echo "<script type='text/javascript'>alert('$error_msg');</script>";
    }
   ?>
    <div class="wrapper ">
        <div class="sidebar" data-color="orange">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
            <div class="logo">
                <a href="Home" class="simple-text logo-mini">
                    ANC
                </a>
                <a href="Home" class="simple-text logo-normal">
                    Tooth Fairy
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="TenantDash_Dashboard">
                            <i class="now-ui-icons design_app"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="TenantDash_Profile">
                            <i class="now-ui-icons education_atom"></i>
                            <p>My Profile</p>
                        </a>
                    </li>
                    <li>
                        <a href="TenantDash_users">
                            <i class="now-ui-icons users_circle-08"></i>
                            <p>Users</p>
                        </a>
                    </li>
                    <li>
                        <a href="TenantDash_Transactions">
                            <i class="now-ui-icons business_globe"></i>
                            <p>Transactions</p>
                        </a>
                    </li>
                    <li>
                        <a href="TenantDash_Messages">
                            <i class="now-ui-icons ui-2_chat-round"></i>
                            <p>Messages</p>
                        </a>
                    </li>
                    <li>
                        <a href="TenantDash_Website">
                            <i class="now-ui-icons design-2_ruler-pencil"></i>
                            <p>Website Management</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute bg-primary fixed-top">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <a class="navbar-brand" href="TenantDash_Profile">User Profile</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <form>
                            <div class="input-group no-border">
                                <input type="text" value="" class="form-control" placeholder="Search...">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                                </span>
                            </div>
                        </form>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <i class="now-ui-icons media-2_sound-wave"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Stats</span>
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="now-ui-icons location_world"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Some Actions</span>
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="now-ui-icons users_single-02"></i>
                                <p><?php echo $user; ?></p>
                              </a>
                              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                  <a class="dropdown-item" href="#">My Profile</a>
                                  <a class="dropdown-item" href="logout">Log out</a>
                              </div>
                          </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="panel-header panel-header-sm">
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="title">Edit Profile</h5>
                            </div>
                            <div class="card-body">
                                <form class="form" method="get" action="">
                                    <div class="row">
                                        <div class="col-md-4 pr-1">
                                            <div class="form-group">

                                                <label>Company</label>
                                                <input type="text" class="form-control" disabled="" placeholder="Company" value="<?php echo $user1['tenant_company']?>">
                                            </div>
                                        </div>
										<div class="col-md-5 pr-1" style="margin-left:20px">
                                            <div class="form-group">
                                                <label>Website Name</label>
                                                <input type="text" class="form-control" disabled="" placeholder="Website Name" value="<?php echo $company['web_name']?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
										<div class="col-md-6">
                                            <div class="form-group">

                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control" disabled="" placeholder="Email" value="<?php echo $user1['tenant_email']?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Contact</label>
                                                <input type="text" disabled="" class="form-control" placeholder="Contact" value="<?php echo $user1['tenant_contact']?>">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
										<div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>

                                                <input type="text" disabled="" class="form-control" placeholder="Address" value="<?php echo $user1['tenant_address']?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 pr-1">
                                            <div class="form-group">
                                                <label>City</label>

                                                <input type="text" disabled="" class="form-control" placeholder="City" value="<?php echo $user1['tenant_city']?>">

                                            </div>
                                        </div>
                                        <div class="col-md-4 pl-1">
                                            <div class="form-group">
                                                <label>Postal Code</label>

                                                <input type="text" disabled="" class="form-control" placeholder="ZIP Code" value="<?php echo $user1['tenant_postal']?>">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="button">
                                                <a href="TenantDash_Profile_Edit"><button type="button" class="btn btn-success" style="background-color:#f96332">Edit</button></a>

                                            </div>
                                        </div>


                                        <div>
                                            <div class="form-row">
                                                <a style="padding: 18px; text-decoration: none;" href="<?php echo base_url('MilesSmile');?>">View Website</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
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
            </footer>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="assets/js/core/jquery.min.js"></script>
<script src="assets/js/core/popper.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>
<script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="assets/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="assets/js/now-ui-dashboard.js?v=1.0.1"></script>
<!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="assets/demo/demo.js"></script>
<script>
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();
    });
</script>

</html>
