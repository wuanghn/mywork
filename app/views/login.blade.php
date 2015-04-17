<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
		<title>Login Blog</title>

		<!--=== CSS ===-->

		<!-- Bootstrap -->
		<link href="{{asset('public/assets/css/bootstrap.min.css')}}" rel="stylesheet">

		<!-- Theme -->
		<link href="{{asset('public/assets/css/main.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('public/assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">


		<!-- Login -->
		<link href="{{asset('public/assets/css/login.css')}}" rel="stylesheet" type="text/css" />

		<!--[if IE 7]>
		<link rel="stylesheet" href="assets/css/fontawesome/font-awesome-ie7.min.css">
		<![endif]-->

		<!--[if IE 8]>
		<link href="assets/css/ie8.css" rel="stylesheet" type="text/css" />
		<![endif]-->

		<!--=== JavaScript ===-->

		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="assets/js/libs/html5shiv.js"></script>
		<![endif]-->

		<!-- Beautiful Checkboxes -->

		<!-- Form Validation -->
		<script type="text/javascript" src="{{asset('public/assets/js/jquery.validate.min.js')}}"></script>

		<!-- Slim Progress Bars -->

		<!-- App -->
		<script type="text/javascript" src="{{asset('public/assets/js/login.js')}}"></script>
	</head>

	<body class="login">
		<!-- Logo -->
		<div class="logo">
			<strong>ADMIN</strong> BLOG
		</div>
		<!-- /Logo -->

		<!-- Login Box -->
		<div class="box">
			<div class="content">
				<!-- Login Formular -->
				<form class="form-vertical login-form" action="{{asset('login')}}" method="post">
					<!-- Title -->
					<h3 class="form-title">Sign In to your Account</h3>

					<!-- Error Message -->
					@if(Session::has('notify'))
					<div class="alert fade in alert-danger">
						<i class=" fa fa-remove close" data-dismiss="alert"></i>
						Wrong username or password.
					</div>
					@endif

					<!-- Input Fields -->
					<div class="form-group">
						<!--<label for="username">Username:</label>-->
						<div class="input-icon">
							<i class="fa fa-user"></i>
							<input type="text" name="username" autocomplete="off" class="form-control" placeholder="Username" autofocus="autofocus" data-rule-required="true" data-msg-required="Please enter your username." />
						</div>
					</div>
					<div class="form-group">
						<!--<label for="password">Password:</label>-->
						<div class="input-icon">
							<i class="fa fa-lock"></i>
							<input type="password" name="password" autocomplete="off" class="form-control" placeholder="Password" data-rule-required="true" data-msg-required="Please enter your password." />
						</div>
					</div>
					<!-- /Input Fields -->

					<!-- Form Actions -->
					<div class="form-actions">
						<button type="submit" class="submit btn btn-primary pull-right">
							Sign In <i class="fa fa-angle-right"></i>
						</button>
					</div>
				</form>
				<!-- /Login Formular -->

				<!-- Register Formular (hidden by default) -->

				<!-- /Register Formular -->
			</div> <!-- /.content -->

			<!-- Forgot Password Form -->

			<!-- /Forgot Password Form -->
		</div>
		<div class="footer">
			<!--		<a href="#" class="sign-up">Don't have an account yet? <strong>Sign Up</strong></a>-->
		</div>
		<!-- /Footer -->
	</body>
</html>