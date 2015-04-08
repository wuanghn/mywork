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
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />

		<!-- Custom Fonts -->
		<link href="public/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

		<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
		<!-- Bootstrap Core JavaScript -->
		<script src="public/assets/js/jquery.resizecrop-1.0.3.min.js"></script>
		<script src="public/assets/js/bootstrap.min.js"></script>


		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script>

			$(document).ready(function(){
				$("#head_article").autocomplete({
					source: function( request, response ) {
						$.get("sys_auto_complete_acticle",
							{
								title: request.term
							},
							function(data, status){
								var arr = $.parseJSON(data)
								response(arr);
						});
					},
					minLength: 2,
					focus: function (event, ui) {
						var label =  (ui.item.label.replace(/<strong>/g,"")).replace(/\<\/strong>/g,"");
						//			$("#in_searh_acticle").val(label);
						return false;
					},
					select: function (event, ui) {
						var label =  (ui.item.label.replace(/<strong>/g,"")).replace(/\<\/strong>/g,"");
						$('#head_article').val(label);
						$("#id_article").val(ui.item.value);

						//			console.log($('div.alert-info').length);

						return false;
					}
				})
				.data( "ui-autocomplete" )._renderItem = function( ul, item ) {
					item.label = item.label.replace(new RegExp("(?![^&;]+;)(?!<[^<>]*)(" + $.ui.autocomplete.escapeRegex(this.term) + ")(?![^<>]*>)(?![^&;]+;)", "gi"), "<strong>$1</strong>");
					return $("<li></li>")
					.data("item.autocomplete", item)
					.append("<a>" + item.label+"</a>")
					.appendTo(ul);
				};
			})
		</script>


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
						Chọn bài viết
					</h1>
				</div>
				<form action="{{asset('sys_store_header_blog')}}" method="POST">
					<div class="col-lg-6">
						<div class="form-group">
							<label>Nhập tên bài viết</label>
							<input type="text" class="form-control" id="head_article">
							<input name="id_article" id="id_article" class="hidden">
						</div>
						<input type="submit" value="Lưu" class="btn btn-danger">
					</div>
				</form>
				<!-- /.container-fluid -->
			</div>
			<!-- /#page-wrapper -->

		</div>
		<!-- jQuery -->


	</body>

</html>
