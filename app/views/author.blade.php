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

		<link href="public/assets/css/blog.css" rel="stylesheet">
		<script src="public/assets/js/jquery.js"></script>
		<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

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
								TÁC GIẢ
							</h1>
							<!--<ol class="breadcrumb">
							<li>
							<i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
							</li>
							<li class="active">
							<i class="fa fa-file"></i> Blank Page
							</li>
							</ol> -->

							<div class="div_searh">
								<form action="{{asset('sys_search_author')}}" class="form_search">
									<div class="form-group">
										<input class="form-control searh" type="text" id="in_searh_au" name="key">
										<button class="btn btn-primary btn_searh" id="seard_au">Tìm kiếm</button>
									</div>
								</form>
							</div>
							<a class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal" id="create_au">
								<i class="fa fa-plus"></i>  Thêm tác giả
							</a>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<table class="table table-hover">
								<tr>
									<th style="width: 5%;">STT</th>
									<th>Tên tác giả</th>
									<th style="width: 10%;">Action</th>
								</tr>
								<?php
									$i = 1;
								?>
								@foreach($au as $key =>$val)
								<tr>
									<td>{{$i++}}</td>
									<td class="td_name">{{$val->name}}</td>
									<td class="td_id hidden">{{$val->id}}</td>
									<td class="td_discription hidden">{{$val->discription}}</td>
									<td class="td_avatar hidden">{{$val->avatar}}</td>
									<td class="td_sectors hidden">{{$val->sectors}}</td>
									<td class="td_position hidden">{{$val->position}}</td>
									<td><a href="#" data-toggle="modal" data-target="#myModal_update" class="a_update">Sửa</a> |
										<a style="color: red;" href="{{asset('sys_delete_author?id=').$val->id}}" onclick="return confirm('Bạn thực sự muốn xóa?')" >Xóa</a>
									</td>
								</tr>
								@endforeach
							</table>
							<div class="pagination pull-right">
								{{$au->links()}}
							</div>
						</div>
					</div>
					<!-- /.row -->

				</div>
				<!-- /.container-fluid -->

			</div>
			<!-- /#page-wrapper -->

		</div>
		<!-- Button trigger modal -->

		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Tạo mới tác giả</h4>
					</div>
					<form action="{{asset('sys_store_author')}}" method="POST" enctype="multipart/form-data">
						<div class="modal-body" style="padding: 0 30px 0 30px;">
							<div>
								<div class="form-group" style="margin: 10px 0 0 0;">
									<label>Tên tác giả</label>
									<input name="name" type="text" class="form-control">
								</div>
								<div class="form-group">
									<label>Chức vụ</label>
									<input name="position" type="text" class="form-control">
								</div>
								<div class="form-group">
									<label>Lĩnh vực</label>
									<input name="sectors" type="text" class="form-control">
								</div>
								<div class="form-group">
									<label>Mô tả</label>
									<textarea name="discription" rows="4" type="text" class="form-control"></textarea>
								</div>
								<div class="form-group">
									<label>Avatar</label>
								</div>
								<div class="form-group">
									<div class="div_avatar">
										<img class="img_avatar" />
									</div>
									<input name="avatar" type="file" value="Chọn hình" class="in_avatar">
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Lưu tác giả</button>
						</div>
					</form>
				</div>
			</div>
		</div>

		<!-- Modal -->
		<div class="modal fade" id="myModal_update" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Sửa tác giả</h4>
					</div>
					<form action="{{asset('sys_update_author')}}" method="POST" enctype="multipart/form-data">
						<div class="modal-body" style="padding: 0 30px 0 30px;">
							<div>
								<div class="form-group" style="margin: 10px 0 0 0;">
									<label>Tên tác giả</label>
									<input name="name" type="text" class="form-control" id="name_up">
									<input name="id" type="hidden" id="id_up">
								</div>
								<div class="form-group">
									<label>Chức vụ</label>
									<input name="position" type="text" class="form-control" id="position_up">
								</div>
								<div class="form-group">
									<label>Lĩnh vực</label>
									<input name="sectors" type="text" class="form-control" id="sectors_up">
								</div>
								<div class="form-group">
									<label>Mô tả</label>
									<textarea name="discription" rows="4" type="text" class="form-control" id="discription_up"></textarea>
								</div>
								<div class="form-group">
									<label>Avatar</label>
								</div>
								<div class="form-group">
									<div class="div_avatar">
										<img class="img_avatar" id="img_avatar_up"/>
									</div>
									<input name="avatar" type="file" value="Chọn hình" class="in_avatar">
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Cập nhật tác giả</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /#wrapper -->

		<!-- jQuery -->

		<!-- Bootstrap Core JavaScript -->
		<script src="public/assets/js/bootstrap.min.js"></script>
		<script src="public/assets/js/blog.js"></script>

	</body>

</html>
