<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>
	<link href="assets/ClinicDash/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/ClinicDash/css/font-awesome.min.css" rel="stylesheet">
	<link href="assets/ClinicDash/css/datepicker3.css" rel="stylesheet">
	<link href="assets/ClinicDash/css/styles.css" rel="stylesheet">

	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="ClinicDash/js/html5shiv.js"></script>
	<script src="ClinicDash/js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
		<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#"><span>Tooth</span>Fairy</a>
				
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Username</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class="active"><a href="ClinicDash_Dashboard"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<!-- <li><a href="widgets.html"><em class="fa fa-calendar">&nbsp;</em> Widgets</a></li>
			<li><a href="charts.html"><em class="fa fa-bar-chart">&nbsp;</em> Charts</a></li>
			<li><a href="elements.html"><em class="fa fa-toggle-off">&nbsp;</em> UI Elements</a></li>
			<li><a href="panels.html"><em class="fa fa-clone">&nbsp;</em> Alerts &amp; Panels</a></li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-navicon">&nbsp;</em> Multilevel <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 1
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 2
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 3
					</a></li>
				</ul>
			</li> -->

			<!-- <li><a href="blank.html"><em class="fa fa-clipboard">&nbsp;</em> Blank</a></li> -->
			<li><a href="ClinicDash_profile"><em class="fa fa-male">&nbsp;</em> User Profile</a></li>
			<li><a href="ClinicDash_appointment"><em class="fa fa-calendar">&nbsp;</em> Appointments</a></li>
			<li><a href="ClinicDash_services"><em class="fa fa-bell">&nbsp;</em> Services</a></li>
			<li><a href="ClinicDash_payment"><em class="fa fa-money">&nbsp;</em> Payment Method</a></li>
			<li><a href="ClinicDash_transaction"><em class="fa fa-clipboard">&nbsp;</em> Transaction History</a></li>
			<li><a href="login_modal"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.html">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Transactions</li>
			</ol>
		</div><!--/.row-->

		<!-- <div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Payment Method</h1>
			</div>
		</div> -->
		<!--/.row-->


		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Transaction History</div>
					<div class="panel-body">
						<div class="col-md-12">
							<table class="table table-hover table-striped">
									<thead>
											<th>ID</th>
										<th>Name</th>
										<th>Salary</th>
										<th>Country</th>
										<th>City</th>
									</thead>
									<tbody>
											<tr>
												<td>1</td>
												<td>Dakota Rice</td>
												<td>$36,738</td>
												<td>Niger</td>
												<td>Oud-Turnhout</td>
											</tr>
											<tr>
												<td>2</td>
												<td>Minerva Hooper</td>
												<td>$23,789</td>
												<td>Curaçao</td>
												<td>Sinaai-Waas</td>
											</tr>
											<tr>
												<td>3</td>
												<td>Sage Rodriguez</td>
												<td>$56,142</td>
												<td>Netherlands</td>
												<td>Baileux</td>
											</tr>
											<tr>
												<td>4</td>
												<td>Philip Chaney</td>
												<td>$38,735</td>
												<td>Korea, South</td>
												<td>Overland Park</td>
											</tr>
											<tr>
												<td>5</td>
												<td>Doris Greene</td>
												<td>$63,542</td>
												<td>Malawi</td>
												<td>Feldkirchen in Kärnten</td>
											</tr>
											<tr>
												<td>6</td>
												<td>Mason Porter</td>
												<td>$78,615</td>
												<td>Chile</td>
												<td>Gloucester</td>
											</tr>
									</tbody>
							</table>
						</div>
					</div>
				</div><!-- /.panel-->

				</div><!-- /.panel-->
			</div><!-- /.col-->
			
		</div><!-- /.row -->
	</div><!--/.main-->


<script src="assets/ClinicDash/js/jquery-1.11.1.min.js"></script>
	<script src="assets/ClinicDash/js/bootstrap.min.js"></script>
	<script src="assets/ClinicDash/js/chart.min.js"></script>
	<script src="assets/ClinicDash/js/chart-data.js"></script>
	<script src="assets/ClinicDash/js/easypiechart.js"></script>
	<script src="assets/ClinicDash/js/easypiechart-data.js"></script>
	<script src="assets/ClinicDash/js/bootstrap-datepicker.js"></script>
	<script src="assets/ClinicDash/js/custom.js"></script>

</body>
</html>
