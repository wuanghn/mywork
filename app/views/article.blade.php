<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />


		<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
		<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
		<!--		<script src="public/assets/js/jquery.js"></script>-->
		<script src="public/ckeditor/ckeditor.js"></script>
		<script src="public/assets/js/bootstrap.min.js"></script>


		<script src="public/assets/js/blog.js"></script>

		<title>Admin Article</title>

		<!-- Bootstrap Core CSS -->
		<link href="public/assets/css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="public/assets/css/sb-admin.css" rel="stylesheet">

		<link href="public/assets/css/blog.css" rel="stylesheet">

		<!-- Custom Fonts -->
		<link href="public/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
						<li >
							<a href="{{asset('sys_author')}}"><i class="fa fa-fw fa-dashboard"></i> Tác giả</a>
						</li>
						<li class="active">
							<a href="{{asset('sys_article')}}"><i class="fa fa-fw fa-bar-chart-o"></i> Bài viết</a>
						</li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</nav>

			<div id="page-wrapper">
				<div class="container-fluid">
					<div class="panel panel-default panel_create">
						<div class="panel-heading">
							<h3 class="panel-title">THÊM BÀI VIẾT</h3>
						</div>
						<div class="panel-body">
							<form action="{{asset('sys_store_article')}}" method="POST" enctype="multipart/form-data">
								<div class="row">
									<div class="col-md-12 div_article">
										<div class="form-group">
											<label>Tiêu đề</label>
											<input name="title" type="text" class="form-control title">
										</div>
										<div class="form-group">
											<label>Tác giả</label>
											<input placeholder="Nhập tên tác giả" name="author" type="text" class="form-control author autocomplete_name" id="autocomplete_name">
											<input name="id_author" type="hidden" id="id_author">
										</div>
										<div class="form-group">
											<label>Avatar</label>
											<div>
												<img src="" id="img_avatar_ar"  class="img_avatar_ar">
											</div>
											<input  name="avatar" type="file" class="form-control avatar_ar" id="in_avatar_ar">
										</div>
										<div class="form-group">
											<h4 class="samples">Nội dung</h4>
											<textarea rows="50" name="editor1" id="editor1">
											</textarea>
											<script>
												CKEDITOR.replace( 'editor1' );
											</script>
										</div>
									</div>
									<div class="col-md-12 div_article">
										<label style="margin-bottom: 20px;">Bài liên quan</label><br>
										<div class="form-group">
											<input placeholder="Nhập tiêu đề" type="text" class="form-control in_searh_acticle">  <br>
											<input type="hidden" name="id_acticles" id="id_acticles">
											<span class="note">Tối đa 3 bài.</span>
										</div>
										<div class="div_alert_relate">
										</div>
									</div>
								</div>
								<input id="btn_submit_ac" type="submit" value="Lưu bài viết" class="btn btn-danger center-block">
							</form>
						</div>
					</div>
					<div class="panel panel-default panel_update">
						<div class="panel-heading">
							<h3 class="panel-title">SỬA BÀI VIẾT</h3>
						</div>
						<div class="panel-body">
							<form action="{{asset('sys_update_article')}}" method="POST" enctype="multipart/form-data">
								<div class="row">
									<div class="col-md-12 div_article">
										<div class="form-group">
											<label>Tiêu đề</label>
											<input name="title" type="text" class="form-control title" id="title_up">
											<input name="id_article" type="hidden" id="id_article_up">
										</div>
										<div class="form-group">
											<label>Tác giả</label>
											<input placeholder="Nhập tên tác giả" name="author" type="text" class="form-control author autocomplete_name_up" id="autocomplete_name_up">
											<input name="id_author" type="hidden" id="id_author_up">
										</div>
										<div class="form-group">
											<label>Avatar</label>
											<div>
												<img src="" id="img_avatar_ar_up"  class="img_avatar_ar">
											</div>
											<input  name="avatar" type="file" class="form-control avatar_ar" id="in_avatar_ar">
										</div>
										<div class="form-group">
											<h4 class="samples">Nội dung</h4>
											<textarea rows="50" name="editor2" id="editor2">
											</textarea>
											<script>
												CKEDITOR.replace( 'editor2' );
											</script>
										</div>
									</div>
									<div class="col-md-12 div_article">
										<label style="margin-bottom: 20px;">Bài liên quan</label><br>
										<div class="form-group">
											<input placeholder="Nhập tiêu đề" type="text" class="form-control in_searh_acticle_up">  <br>
											<input type="hidden" name="id_acticles" id="id_acticles_up">
											<span class="note">Tối đa 3 bài.</span>
										</div>
										<div class="div_alert_relate_up">
										</div>
									</div>
								</div>
								<div style="padding-left: 40%;">
									<input id="btn_cancel" type="button" value="Hủy" class="btn btn-default" style="margin-right: 20px;">
									<input id="btn_submit_ac_up" type="submit" value="Cập nhật bài viết" class="btn btn-danger">
								</div>
							</form>
						</div>
					</div>
				</div>

				<div class="container-fluid div_contaner2">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">DANH SÁCH BÀI VIẾT</h3>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-12">
									<table class="table table-hover table-striped">
										<tr>
											<th style="width: 2%;">STT
											</th>
											<th>Tiêu đề
											</th>
											<th>Tác giả
											</th>
											<th style="width: 10%;">Hoạt động
											</th>
										</tr>
										<?php
											$i = 1;
										?>
										@foreach($article as $key =>$val)
										<tr>
											<td>{{$i++}}</td>
											<td class="td_title">{{$val->title}}</td>
											<td class="td_name_author">{{$val->name}}</td>
											<td class="hidden td_content">{{$val->content}}</td>
											<td class="hidden td_id_author">{{$val->id_author}}</td>
											<td class="hidden td_id_article">{{$val->id_article}}</td>
											<td class="hidden td_related">{{$val->related}}</td>
											<td class="hidden td_avatar_article">{{$val->avatar_article}}</td>
											<td class="hidden td_name_title_relate">
												@foreach($title as $key2 =>$val2)

												@if($key2 == $val->id_article)
												{{json_encode($val2)}}
												@else
												{{""}}

												@endif
												@endforeach
											</td>
											<td>
												<a href="#" data-toggle="modal" data-target="#myModal_update" class="ar_update">Sửa</a> |
												<a style="color: red;" href="{{asset('sys_delete_article?id='.$val->id_article)}}" onclick="return confirm('Bạn thực sự muốn xóa?')" >Xóa</a>
											</td>
										</tr>
										@endforeach
									</table>
									<div class="pagination pull-right">
										{{$article->links()}}
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /.container-fluid -->
			</div>
			<!-- /#page-wrapper -->
		</div>


		<?php
			//echo "<pre>";
			//			print_r($title);
			//			echo "</pre>";
		?>
		<!-- Button trigger modal -->
		<script src="public/assets/js/jquery.resizecrop-1.0.3.min.js"></script>
	</body>

</html>
