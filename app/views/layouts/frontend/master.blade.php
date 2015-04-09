 <!-- 
 		NAME: HOME PAGE
 		AUTHOR: WA
 		DATE: 02-04-2014
  -->
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<meta charset="utf-8"/>
 	<!-- BOOTSTRAP -->

 				<!-- Latest compiled and minified CSS -->
 				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

 				<!-- Optional theme -->
 				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

 				<!-- FONT AWSOME -->
 				<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

 				<!-- MY STYLE -->
 				
 				{{ HTML::style('public/frontend/css/style.css') }}

 				{{ HTML::style('public/frontend/css/mobile.css') }}

 				<!-- Jquery -->
 				<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.2.min.js"></script>

 				<!-- Latest compiled and minified JavaScript -->
 				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>


 </head>
 <body>
 		



 				<div class="container wa_menu_desktop wa_header">
 						<div class="row">
 								<div class="col-md-6 left">
 										
 										<ul class="nav nav-pills">
 										  <li role="presentation">
 										  		<a class="wa_fix_bkg_logo" style="padding-top:0px" href="#">
 										  				<img src="{{url('public/frontend/img/logo.png')}}" height="53" width="187">
 										  		</a>
 										  </li>
 										  <li role="presentation" class="active"><a href="#">Search</a></li>
 										  <li role="presentation"><a href="http://vnw2.slifemedia.com/blog">Blog</a></li>
 										</ul>
 								</div>

 								<div class="col-md-6">
 										<a href="http://www.vietnamworks.com/">
 												<img src="{{url('public/frontend/img/vietnamwork.png')}}" height="53" width="152">
 										</a>
 								</div>	
 						</div>
 				</div><!-- HEADER -->




 				<nav class="navbar wa_menu_respon navbar-default">
 						  <div class="container-fluid">
 						    <!-- Brand and toggle get grouped for better mobile display -->
 						    <div class="navbar-header">
 						      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
 						        <span class="sr-only">Toggle navigation</span>
 						        <span class="icon-bar"></span>
 						        <span class="icon-bar"></span>
 						        <span class="icon-bar"></span>
 						      </button>
 						      <a class="navbar-brand" href="#"><img src="{{url('public/frontend/img/logo.png')}}" class="img-responsive"></a>
 						    </div>

 						    <!-- Collect the nav links, forms, and other content for toggling -->
 						    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
 						      <ul class="nav navbar-nav">
 						        <li ><a href="#">Link <span class="sr-only">(current)</span></a></li>
 						        <li><a href="#">Link</a></li>
 						        <!-- <li class="dropdown">
 						          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
 						          <ul class="dropdown-menu" role="menu">
 						            <li><a href="#">Action</a></li>
 						            <li><a href="#">Another action</a></li>
 						            <li><a href="#">Something else here</a></li>
 						            <li class="divider"></li>
 						            <li><a href="#">Separated link</a></li>
 						            <li class="divider"></li>
 						            <li><a href="#">One more separated link</a></li>
 						          </ul>
 						        </li> -->
 						      </ul>
 						     <!--  <form class="navbar-form navbar-left" role="search">
 						        <div class="form-group">
 						          <input type="text" class="form-control" placeholder="Search">
 						        </div>
 						        <button type="submit" class="btn btn-default">Submit</button>
 						      </form>
 						      <ul class="nav navbar-nav navbar-right">
 						        <li><a href="#">Link</a></li>
 						        <li class="dropdown">
 						          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
 						          <ul class="dropdown-menu" role="menu">
 						            <li><a href="#">Action</a></li>
 						            <li><a href="#">Another action</a></li>
 						            <li><a href="#">Something else here</a></li>
 						            <li class="divider"></li>
 						            <li><a href="#">Separated link</a></li>
 						          </ul>
 						        </li>
 						      </ul> -->
 						    </div><!-- /.navbar-collapse -->
 						  </div><!-- /.container-fluid -->
 						</nav>

 @yield('content')

 				<!-- <div class="container wa_footer">
 					<div class="wa_wrap_footer">
 						<a href="#">Về chúng tôi</a>
 						<a href="#">Liên hệ</a>
 						<a href="#">Tin tức</a>
 						<a href="#">Trợ giúp</a>
 						<a href="#">Thỏa thuận sử dụng</a>
 						<a href="#">Quy định bảo mật</a>
 					</div>
 				</div> -->


 			<div class="wa_wrap_new_footer">
 				<div class="container">
 					<div class="row">
 						<div class="col-md-3">
 							<img src="{{url('public/frontend/img/logo_footer.png')}}">
 							<p>Copyright © Navigos Group Vietnam Joint Stock Company 
130 Suong Nguyet Anh Street, Ben Thanh Ward, District 1, Ho Chi Minh City, Vietnam</p>
 						</div>
 						<div class="col-md-3 wa_hide_footer_respo">
 							<h3>Introduce</h3>
 							<ul class="nav nav-pills nav-stacked">
 							  	<li><a href="#">About Us</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Press Corner</a></li>
								<li><a href="#">FAQ</a></li>
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privacy Statement</a></li>
 							</ul>
 						</div>
 						<div class="col-md-3 col-md-offset-3 wa_social wa_hide_footer_respo">
 							<h3>Subscribe to Us</h3>
 							<div class="col-md-6">
 								<a href="#" class="box_social">
 									<i class="fa fa-facebook fa-lg"></i>
 								</a>
 							</div>
 							<div class="col-md-6">
 								<a href="#" class="box_social">
 									<i class="fa fa-linkedin-square fa-lg"></i>
 								</a>
 							</div>
 							<div class="col-md-6">
 								<a href="#" class="box_social">
 									<i class="fa fa-google-plus fa-lg"></i>
 								</a>
 							</div>
 							<div class="col-md-6">
 								<a href="#" class="box_social">
 									<i class="fa fa-twitter fa-lg"></i>
 								</a>
 							</div>
 						</div>
 					</div>
 				</div>
 			</div>





@yield('script')






 </body>
 </html>