<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Admin Banner</title>

		<!-- Bootstrap Core CSS -->
		<link href="public/assets/css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="public/assets/css/sb-admin.css" rel="stylesheet">

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
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<span class="navbar-brand">Admin Blog</span>
			</div>
			<!-- Top Menu Items -->
			<ul class="nav navbar-right top-nav">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
					<ul class="dropdown-menu message-dropdown">
						<li class="message-preview">
							<a href="#">
								<div class="media">
									<span class="pull-left">
										<img class="media-object" src="http://placehold.it/50x50" alt="">
									</span>
									<div class="media-body">
										<h5 class="media-heading">
											<strong>John Smith</strong>
										</h5>
										<p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
										<p>Lorem ipsum dolor sit amet, consectetur...</p>
									</div>
								</div>
							</a>
						</li>
						<li class="message-preview">
							<a href="#">
								<div class="media">
									<span class="pull-left">
										<img class="media-object" src="http://placehold.it/50x50" alt="">
									</span>
									<div class="media-body">
										<h5 class="media-heading">
											<strong>John Smith</strong>
										</h5>
										<p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
										<p>Lorem ipsum dolor sit amet, consectetur...</p>
									</div>
								</div>
							</a>
						</li>
						<li class="message-preview">
							<a href="#">
								<div class="media">
									<span class="pull-left">
										<img class="media-object" src="http://placehold.it/50x50" alt="">
									</span>
									<div class="media-body">
										<h5 class="media-heading">
											<strong>John Smith</strong>
										</h5>
										<p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
										<p>Lorem ipsum dolor sit amet, consectetur...</p>
									</div>
								</div>
							</a>
						</li>
						<li class="message-footer">
							<a href="#">Read All New Messages</a>
						</li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
					<ul class="dropdown-menu alert-dropdown">
						<li>
							<a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
						</li>
						<li>
							<a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
						</li>
						<li>
							<a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
						</li>
						<li>
							<a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
						</li>
						<li>
							<a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
						</li>
						<li>
							<a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
						</li>
						<li class="divider"></li>
						<li>
							<a href="#">View All</a>
						</li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li>
							<a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
						</li>
						<li>
							<a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
						</li>
						<li>
							<a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
						</li>
						<li class="divider"></li>
						<li>
							<a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
						</li>
					</ul>
				</li>
			</ul>
			<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav side-nav">
					<li class="active">
						<a href="{{asset('sys_author')}}"><i class="fa fa-fw fa-dashboard"></i> Tác giả</a>
					</li>
					<li>
						<a href="{{asset('sys_article')}}"><i class="fa fa-fw fa-bar-chart-o"></i> Bài viết</a>
					</li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</nav>

		<div id="page-wrapper">

		<div class="container-fluid">
			<!-- Page Heading -->
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">
						Quản lý Banner
					</h1>
				</div>
				<div class="col-lg-12">
					<div role="tabpanel">

						<!-- Nav tabs -->
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Link</a></li>
							<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Upload</a></li>
						</ul>

						<!-- Tab panes -->
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane fade in active" id="home">
								<div class="row" style="margin-top: 20px;">
									<div class="col-lf-12 div_list_img">
										<?php
											$dir = "public/uploads/banner/";
											if($open = opendir($dir)){
												//read
												while(($file = readdir($open)) != FALSE){
													if($file != "." && $file !='..')
														echo '
														<a class="da_image">
														<img src="'.asset($dir.$file).'">
														</a>
														';
												}
											}
										?>

									</div>
								</div>
								<div class="row">
									<form action="{{asset('store_banner')}}" method="POST">
										<div class="col-lg-6">
											<div class="form-group div_in_banner">
												<input type="text" class="form-control" id="input_url" name="link">
											</div>
											<input type="submit" value="Lưu banner" class="btn btn-danger">
										</div>
									</form>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="profile">
								<form action="{{asset('upload_banner')}}" method="POST" enctype="multipart/form-data">
									<div class="col-lg-6">
										<div class="form-group div_in_banner">
											<input type="file" class="form-control" id="input_url" name="file">
										</div>
										<input type="submit" value="Upload" class="btn btn-danger">
									</div>
								</form>
							</div>
						</div>

					</div>
				</div>

				<!-- /.container-fluid -->
			</div>
			<!-- /#page-wrapper -->

		</div>
		<!-- jQuery -->
		<script src="public/assets/js/jquery.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="public/assets/js/bootstrap.min.js"></script>
		<script src="public/assets/js/blog_home.js"></script>

	</body>

</html>
