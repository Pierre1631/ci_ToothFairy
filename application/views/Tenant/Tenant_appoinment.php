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
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
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
				<li><a href="Tenant_Dashboard">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Appointments</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Set Appointment</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-md-6">
				<!--End .articles-->

				<div class="panel panel-default">
					<div class="panel-heading">
						Services
						<ul class="pull-right panel-settings panel-button-tab-right">
							<li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
								<em class="fa fa-cogs"></em>
							</a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li>
										<ul class="dropdown-settings">
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 1
											</a></li>
											<li class="divider"></li>
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 2
											</a></li>
											<li class="divider"></li>
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 3
											</a></li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						<ul class="todo-list">
							<li class="todo-list-item">
								<div class="checkbox">
									<input type="checkbox" id="checkbox-1" />
									<label for="checkbox-1">Prosthodontics</label>
								</div>
								<div class="pull-right action-buttons"><a href="#" class="trash"><em class="fa fa-trash"></em></a></div>
							</li>
							<li class="todo-list-item">
								<div class="checkbox">
									<input type="checkbox" id="checkbox-2" />
									<label for="checkbox-2">Cleanings & Preventions</label>
								</div>
								<div class="pull-right action-buttons"><a href="#" class="trash"><em class="fa fa-trash"></em></a></div>
							</li>
							<li class="todo-list-item">
								<div class="checkbox">
									<input type="checkbox" id="checkbox-3" />
									<label for="checkbox-3">Restoring Teeth</label>
								</div>
								<div class="pull-right action-buttons"><a href="#" class="trash"><em class="fa fa-trash"></em></a></div>
							</li>
							<li class="todo-list-item">
								<div class="checkbox">
									<input type="checkbox" id="checkbox-4" />
									<label for="checkbox-4">Cosmetic Dentistry</label>
								</div>
								<div class="pull-right action-buttons"><a href="#" class="trash"><em class="fa fa-trash"></em></a></div>
							</li>
							<li class="todo-list-item">
								<div class="checkbox">
									<input type="checkbox" id="checkbox-5" />
									<label for="checkbox-5">Dental Implants</label>
								</div>
								<div class="pull-right action-buttons"><a href="#" class="trash"><em class="fa fa-trash"></em></a></div>
							</li>
							<li class="todo-list-item">
								<div class="checkbox">
									<input type="checkbox" id="checkbox-6" />
									<label for="checkbox-6">Invisalign</label>
								</div>
								<div class="pull-right action-buttons"><a href="#" class="trash"><em class="fa fa-trash"></em></a></div>
							</li>
						</ul>
					</div>
					<div class="panel-footer">
						<div class="input-group">
							<input id="btn-input" type="text" class="form-control input-md" placeholder="Others" /><span class="input-group-btn">
								<button class="btn btn-primary btn-md" id="btn-todo">Add</button>
						</span></div>
					</div>
				</div>
			</div>
			<!--/.col-->

			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						Calendar
						<ul class="pull-right panel-settings panel-button-tab-right">
							<li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
								<em class="fa fa-cogs"></em>
							</a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li>
										<ul class="dropdown-settings">
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 1
											</a></li>
											<li class="divider"></li>
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 2
											</a></li>
											<li class="divider"></li>
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 3
											</a></li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						<div id="calendar"></div>
					</div>
				</div>

			</div>
			<!--/.col-->
			
		</div>
		<!--/.row-->
	</div>
	<!--/.main-->


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
