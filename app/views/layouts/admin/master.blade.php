<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Admin Author</title>

		<!-- Bootstrap Core CSS -->
		<link href="public/assets/css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="public/assets/css/sb-admin.css" rel="stylesheet">


		<script src="public/assets/js/jquery.js"></script>
		<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		<script src="public/ckeditor/ckeditor.js"></script>
		<link href="public/assets/css/blog.css" rel="stylesheet">

		<!-- Custom Fonts -->
		<link href="public/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>

	<body>

		<div id="wrapper">

			<!-- Navigation -->
			<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<span class="navbar-brand">Admin</span>
				</div>
				<!-- Top Menu Items -->
				<ul class="nav navbar-right top-nav">


					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{strtoupper(Session::get('user'))}} <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li>
								<a href="{{asset('logout')}}"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
							</li>
						</ul>
					</li>
				</ul>
				<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav side-nav">
						<?php
							$active1 = "";
							$active2 = "";
							$active3 = "";
							$active4 = "";
							$active5 = "";
							$active6 = "";
							$active7 = "";
							$in ="";
							$in2 ="";

							switch (Request::segment(1)) {
								case "sys_author":
									$active1 = "active";
									$in = "in";
									break;
								case "sys_article":
									$active2 = "active";
									$in = "in";
									break;
								case "sys_banner":
									$active3 = "active";
									$in2 = "in";
									break;
								case "sys_question":
									$active4 = "active";
									$in = "in";
									break;
								case "sys_hot_story":
									$active5 = "active";
									$in2 = "in";
									break;
								case "sys_banner_home":
									$active6 = "active";
									$in2 = "in";
									break;
								case "applies":
									$active7 = "active";
									$in2 = "in";
									break;
							}
						?>



						<li>
							<a href="javascript:0;" data-toggle="collapse" data-target="#demo"><i class="fa fa-book"></i> Blog <i class="fa fa-fw fa-caret-down"></i></a>
							<ul id="demo" class="collapse {{$in}}">
								<li class="{{$active1}}">
									<a href="{{asset('sys_author')}}"><i class="fa fa-users"></i> Tác giả</a>
								</li>
								<li class="{{$active2}}">
									<a href="{{asset('sys_article')}}"><i class="fa fa-newspaper-o"></i> Bài viết</a>
								</li>
								<li class="{{$active4}}">
									<a href="{{asset('sys_question')}}"><i class="fa fa-comment"></i> Câu hỏi</a>
								</li>
							</ul>
						</li>
						<li>
							<a class="collapsed" href="javascript:0;" data-toggle="collapse" data-target="#demo2"><i class="fa fa-search"></i> Search <i class="fa fa-fw fa-caret-down"></i></a>
							<ul id="demo2" class="collapse {{$in2}}" >
								<li class="{{$active3}}">
									<a href="{{asset('sys_banner')}}"><i class="fa fa-picture-o"></i> Banner trang search</a>
								</li>
								<li class="{{$active6}}">
									<a href="{{asset('sys_banner_home')}}"><i class="fa fa-file-image-o"></i> Banner trang chủ</a>
								</li>
								<li class="{{$active5}}">
									<a href="{{asset('sys_hot_story')}}"><i class="fa fa-rocket"></i> Bài viết Hot của tuần</a>
								</li>
								<li class="{{$active7}}">
									<a href="{{url('applies')}}"><i class="fa fa-envelope"></i> Applies</a>
								</li>
							</ul>
						</li>

					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</nav>

			<div id="page-wrapper">

				@yield('content')
				<!-- /.container-fluid -->

			</div>
			<!-- /#page-wrapper -->

		</div>
		<!-- Button trigger modal -->
		<!-- Bootstrap Core JavaScript -->
		<script src="public/assets/js/bootstrap.min.js"></script>
		<script src="public/assets/js/blog.js"></script>

	</body>

</html>
