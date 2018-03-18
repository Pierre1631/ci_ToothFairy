<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/AdminDash/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/AdminDash/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Tooth Fairy</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/AdminDash/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/AdminDash/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/AdminDash/css/paper-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/AdminDash/css/demo.css" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/AdminDash/css/themify-icons.css" rel="stylesheet">

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="black" data-active-color="info">

    <!--
        Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
        Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
    -->

      <div class="sidebar-wrapper">
            <div class="logo">
                <a href="Home" class="simple-text">
                    HOME
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="TenantDash">
                        <i class="ti-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                
                <li>
                    <a href="TenantDash_users">
                        <i class="ti-view-list-alt"></i>
                        <p>Users</p>
                    </a>
                </li>
                
                <li>
                    <a href="TenantDash_records">
                        <i class="ti-agenda"></i>
                        <p>Patient Records</p>
                    </a>
                </li>
                  <li>
                    <a href="TenantDash_Transactions">
                        <i class="ti-server"></i>
                        <p>Transactions</p>
                    </a>
                </li>
                  <li>
                    <a href="TenantDash_Inbox">
                        <i class="ti-pie-chart"></i>
                        <p>Messages</p>
                    </a>
                </li>
                  <li>
                    <a href="TenantDash_website">
                        <i class="ti-desktop"></i>
                        <p>Website Management</p>
                    </a>
                </li>
            </ul>
        </div>

    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                       
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-bell"></i>
                                    <b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Log out</a></li>
                                <li><a href="#">Settings</a></li>
                              </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>



         <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            
                            <div class="block-content collapse in">
                                <div class="span12">
                                   <div class="table-toolbar">
                                      <div class="btn-group">
                                         <a href="TenantDash_Add"><button class="btn btn-success">Add New <i class="icon-plus icon-white"></i></button></a>
                                      </div>
                                      
                                   </div>
                                    
                                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example2">
                                        <thead>
                                            <tr>
                                                <th>User ID</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Dental Records</th>
                                                <th>Transactions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
                                            <tr class="gradeA">
                                                <td>Ken123</td>
                                                <td>Ken</td>
                                                <td>Domingo</td>
                                                <td>Domingo.pdf</td>
                                                <td>Ken123</td>
                                            </tr>
                                            
                                             <tr class="gradeA">
                                                <td>Ken123</td>
                                                <td>Ken</td>
                                                <td>Domingo</td>
                                                <td>Domingo.pdf</td>
                                                <td>Ken123</td>
                                            </tr>
                                           
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/AdminDash/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/AdminDash/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/AdminDash/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/AdminDash/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/AdminDash/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="assets/AdminDash/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/AdminDash/js/demo.js"></script>
	<script src="vendors/jquery-1.9.1.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="vendors/datatables/js/jquery.dataTables.min.js"></script>

        <script src="assets/AdminDash/scripts.js"></script>
        <script src="assets/AdminDash/DT_bootstrap.js"></script>
        <script>
        $(function() {
            
        });
        </script>


</html>
