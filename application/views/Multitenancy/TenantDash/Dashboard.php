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
</head>
<?php
//retrieve session
$user = $this->session->userdata('user');
?>
<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="orange">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
            <div class="logo">
                <a href="home" class="simple-text logo-mini">
                    ANC
                </a>
                <a href="home" class="simple-text logo-normal">
                    Tooth Fairy
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="active">
                        <a href="TenantDash_Dashboard">
                            <i class="now-ui-icons design_app"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
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
                        <a href="TenantDash_records">
                            <i class="now-ui-icons users_circle-08"></i>
                            <p>Records</p>
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
                        <a class="navbar-brand" href="TenantDash_Dashboard">Dashboard</a>
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
            <div class="panel-header panel-header-lg">
                <canvas id="bigDashboardChart"></canvas>
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card card-chart">
                            <div class="card-header">
                                <h5 class="card-category">Global Sales</h5>
                                <h4 class="card-title">Shipped Products</h4>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-round btn-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                                        <i class="now-ui-icons loader_gear"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <a class="dropdown-item text-danger" href="#">Remove Data</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chart-area">
                                    <canvas id="lineChartExample"></canvas>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card card-chart">
                            <div class="card-header">
                                <h5 class="card-category">2018 Sales</h5>
                                <h4 class="card-title">All products</h4>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-round btn-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                                        <i class="now-ui-icons loader_gear"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <a class="dropdown-item text-danger" href="#">Remove Data</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chart-area">
                                    <canvas id="lineChartExampleWithNumbersAndGrid"></canvas>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card card-chart">
                            <div class="card-header">
                                <h5 class="card-category">Email Statistics</h5>
                                <h4 class="card-title">24 Hours Performance</h4>
                            </div>
                            <div class="card-body">
                                <div class="chart-area">
                                    <canvas id="barChartSimpleGradientsNumbers"></canvas>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="now-ui-icons ui-2_time-alarm"></i> Last 7 days
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="card card-tasks">
                      <div class="card-header">
                        <h5 class="card-category">Backend development</h5>
                        <h4 class="card-title">Tasks</h4>
                      </div>
                      <div class="card-body">
                        <div class="table-full-width table-responsive">
                          <table class="table">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" checked="">
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                    </td>

                                    <td class="text-left">Sign contract for "What are conference organizers afraid of?"</td>
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                                            <i class="now-ui-icons ui-2_settings-90"></i>
                                        </button>
                                        <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                                            <i class="now-ui-icons ui-1_simple-remove"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox">
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                    </td>

                                    <td class="text-left">Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                                            <i class="now-ui-icons ui-2_settings-90"></i>
                                        </button>
                                        <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                                            <i class="now-ui-icons ui-1_simple-remove"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" checked="">
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                    </td>

                                    <td class="text-left">Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                    </td>
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                                            <i class="now-ui-icons ui-2_settings-90"></i>
                                        </button>
                                        <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                                            <i class="now-ui-icons ui-1_simple-remove"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <div class="card-footer">
                        <hr>
                        <div class="stats">
                          <i class="now-ui-icons loader_refresh spin"></i> Updated 3 minutes ago
                        </div>
                      </div>
                  </div>
                  </div>
                  <div class="col-md-6">
                      <div class="card">
                        <div class="card-header">
                            <h5 class="card-category">All Persons List</h5>
                            <h4 class="card-title"> Employees Stats</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                              <table class="table">
                                <thead class=" text-primary">
                                  <th >
                                    Name
                                  </th>
                                  <th >
                                    Country
                                  </th>
                                  <th >
                                    City
                                  </th>
                                  <th  class="text-right" >
                                    Salary
                                  </th>
                                </thead>
                                <tbody>
                                  <tr >
                                    <td >
                                      Dakota Rice
                                    </td>
                                    <td >
                                      Niger
                                    </td>
                                    <td >
                                      Oud-Turnhout
                                    </td>
                                    <td  class="text-right" >
                                      $36,738
                                    </td>
                                  </tr>
                                  <tr >
                                    <td >
                                      Minerva Hooper
                                    </td>
                                    <td >
                                      Curaçao
                                    </td>
                                    <td >
                                      Sinaai-Waas
                                    </td>
                                    <td  class="text-right" >
                                      $23,789
                                    </td>
                                  </tr>
                                  <tr >
                                    <td >
                                      Sage Rodriguez
                                    </td>
                                    <td >
                                      Netherlands
                                    </td>
                                    <td >
                                      Baileux
                                    </td>
                                    <td  class="text-right" >
                                      $56,142
                                    </td>
                                  </tr>
                                  <tr >
                                    <td >
                                      Doris Greene
                                    </td>
                                    <td >
                                      Malawi
                                    </td>
                                    <td >
                                      Feldkirchen in Kärnten
                                    </td>
                                    <td  class="text-right" >
                                      $63,542
                                    </td>
                                  </tr>
                                  <tr >
                                    <td >
                                      Mason Porter
                                    </td>
                                    <td >
                                      Chile
                                    </td>
                                    <td >
                                      Gloucester
                                    </td>
                                    <td  class="text-right" >
                                      $78,615
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
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
