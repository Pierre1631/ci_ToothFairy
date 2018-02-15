<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>The Creator</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome/css/font-awesome.css">
<link rel="stylesheet" type="text/css"  href="assets/css/style.css">
<link rel="stylesheet" type="text/css" href="assets/css/prettyPhoto.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="assets/js/modernizr.custom.js"></script>
<link rel="stylesheet" href="assets/css/style_login.css">
</head>


<!-- Header -->
<div id="intro">
  <div class="intro-body">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <h1><span class="rotate">THE CREATOR</span></h1>
          <p class="intro-text">Stand out with limitless opportunities</p>
        </div>

          <div class="container">

            <a id="modal_trigger" href="#modal" class="btn">Get Started</a>
            <div id="modal" class="popupContainer" style="display:none;">
              <header class="popupHeader">
                <span class="header_title">Login</span>
                <span class="modal_close"><i class="fa fa-times"></i></span>
              </header>

        <section class="popupBody">
            <!-- Social Login -->
            <div class="social_login">
                <div class="">
                    <a href="#" class="social_box fb">
                        <span class="icon"><i class="fa fa-facebook"></i></span>
                        <span class="icon_title">Connect with Facebook</span>

                    </a>

                    <a href="#" class="social_box google">
                        <span class="icon"><i class="fa fa-google-plus"></i></span>
                        <span class="icon_title">Connect with Google</span>
                    </a>
                </div>

                <div class="centeredText">
                    <span>Or use your Email address</span>
                </div>

                <div class="action_btns">
                    <div class="one_half"><a href="#" id="login_form" class="btn">Login</a></div>
                    <div class="one_half last"><a href="#" id="register_form" class="btn">Sign up</a></div>
                </div>
            </div>

            <!-- Username & Password Login form -->
            <div class="user_login">
                <form action= Admin/login_account.php method='post' class="form">

                    <label>Email / Username</label>
                    <input type="text" name="UserEmail"/>
                    <br />

                    <label>Password</label>
                    <input type="password" name="UserPass"/>
                    <br />

            

                    <div class="action_btns">
                        <div class="one_half">
                            <a href="#" class="btn back_btn">
                                <i class="fa fa-angle-double-left">
                                </i> Back</a></div>
                        <div class="one_half last">
                            <a href="#" class="btn btn_red">Login</a></div>
                    </div>
                </form>

                <a href="#" class="forgot_password">Forgot password?</a>
            </div>

            <!-- Register Form -->
            <div class="user_register">
                <form>
                <label>  Last Name:</label> <input type="text" name="UserLastName" />
                <label>  First Name:</label> <input type="text" name="UserFirstName" /> 
                <label>  Middle Name:</label> <input type="text" name="UserMiddleName" />
               <label> Email: </label><input type="text" name="UserEmail" />
               <label> Password: </label><input type="Password" name="UserPass" />

              <br />

                    <div class="action_btns">
                        <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                        <div class="one_half last"><a href="#" class="btn btn_red">Register</a></div>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://andwecode.com/wp-content/uploads/2015/10/jquery.leanModal.min_.js'></script>
<script  src="assets/js/login.js"></script>
 
      </div>
    </div>
  </div>
</div>
