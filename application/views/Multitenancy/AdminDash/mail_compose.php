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
                    <a href="AdminDash">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                
                <li>
                    <a href="AdminDash_User">
                        <i class="ti-view-list-alt"></i>
                        <p>Users</p>
                    </a>
                </li>
                
                <li>
                    <a href="AdminDash_Inbox">
                        <i class="ti-pencil-alt2"></i>
                        <p>Inbox</p>
                    </a>
                </li>
                  <li>
                    <a href="AdminDash_Profile">
                        <i class="ti-pie-chart"></i>
                        <p>Profile</p>
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


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
        <section id="main-content">
	<section class="wrapper">
		<!-- page start-->
		<div class="mail-w3agile">
        <div class="row">
            <div class="col-sm-3 com-w3ls">
                <section class="panel">
                    <div class="panel-body">
                        <a href="mail_compose.html"  class="btn btn-compose">
                            Compose Mail
                        </a>
                        <ul class="nav nav-pills nav-stacked mail-nav">
                            <li class="active"><a href="inbox.html"> <i class="fa fa-inbox"></i> Inbox  <span class="label label-danger pull-right inbox-notification">9</span></a></li>
                            <li><a href="#"> <i class="fa fa-envelope-o"></i> Send Mail</a></li>
                            <li><a href="#"> <i class="fa fa-certificate"></i> Important</a></li>
                            <li><a href="#"> <i class="fa fa-file-text-o"></i> Drafts <span class="label label-info pull-right inbox-notification">123</span></a></a></li>
                            <li><a href="#"> <i class="fa fa-trash-o"></i> Trash</a></li>
                        </ul>
                    </div>
                </section>

                <section class="panel">
                    <div class="panel-body">
                        <ul class="nav nav-pills nav-stacked labels-info ">
                            <li> <h4>Buddy online</h4> </li>
                            <li> <a href="#"> <i class="fa fa-comments-o text-success"></i> Jonathan Smith <p>I do not think</p></a>  </li>
                            <li> <a href="#"> <i class="fa fa-comments-o text-danger"></i> iRon <p>Busy with coding</p></a> </li>
                            <li> <a href="#"> <i class="fa fa-comments-o text-muted "></i> Anjelina Joli <p>I out of control</p></a></li>
                            <li> <a href="#"> <i class="fa fa-comments-o text-muted "></i> Samual Daren <p>I am not here</p></a></li>
                            <li> <a href="#"> <i class="fa fa-comments-o text-muted "></i> Tis man <p>I do not think</p></a>  </li>
                        </ul>
                        <a href="#"> + Add More</a>

                        <div class="inbox-body text-center inbox-action">
                            <div class="btn-group">
                                <a class="btn mini btn-default" href="javascript:;">
                                    <i class="fa fa-power-off"></i>
                                </a>
                            </div>
                            <div class="btn-group">
                                <a class="btn mini btn-default" href="javascript:;">
                                    <i class="fa fa-cog"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-sm-9 mail-w3agile">
                <section class="panel">
                    <header class="panel-heading wht-bg">
                       <h4 class="gen-case"> Compose Mail
                           <form action="#" class="pull-right mail-src-position">
                            <div class="input-append">
                                <input type="text" class="form-control " placeholder="Search Mail">
                            </div>
                        </form>
                       </h4>
                    </header>
                    <div class="panel-body">
                        <div class="compose-btn pull-right">
                            <button class="btn btn-primary btn-sm"><i class="fa fa-check"></i> Send</button>
                            <button class="btn btn-sm"><i class="fa fa-times"></i> Discard</button>
                            <button class="btn btn-sm">Draft</button>
                        </div>
                        <div class="compose-mail">
                            <form role="form-horizontal" method="post">
                                <div class="form-group">
                                    <label for="to" class="">To:</label>
                                    <input type="text" tabindex="1" id="to" class="form-control">

                                    <div class="compose-options">
                                        <a onclick="$(this).hide(); $('#cc').parent().removeClass('hidden'); $('#cc').focus();" href="javascript:;">Cc</a>
                                        <a onclick="$(this).hide(); $('#bcc').parent().removeClass('hidden'); $('#bcc').focus();" href="javascript:;">Bcc</a>
                                    </div>
                                </div>

                                <div class="form-group hidden">
                                    <label for="cc" class="">Cc:</label>
                                    <input type="text" tabindex="2" id="cc" class="form-control">
                                </div>

                                <div class="form-group hidden">
                                    <label for="bcc" class="">Bcc:</label>
                                    <input type="text" tabindex="2" id="bcc" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="subject" class="">Subject:</label>
                                    <input type="text" tabindex="1" id="subject" class="form-control">
                                </div>

                                <div class="compose-editor">
                                    <textarea class="wysihtml5 form-control" rows="9"></textarea>
                                    <input type="file" class="default">
                                </div>
                                <div class="compose-btn">
                                    <button class="btn btn-primary btn-sm"><i class="fa fa-check"></i> Send</button>
                                    <button class="btn btn-sm"><i class="fa fa-times"></i> Discard</button>
                                    <button class="btn btn-sm">Draft</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>



                        		</div> <!-- brand Icons -->

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


</html>
