<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Bootstrap 101 Template</title>

		<!-- Bootstrap -->
		<link href="public/assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="public/assets/css/blog2.css" rel="stylesheet">
		<link href="public/assets/css/slick.css" rel="stylesheet">
		<link href="public/assets/css/slick-theme.css" rel="stylesheet">
		<link href="public/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<header>
			<div class="container">
				<div class="row da_header">
					<div class="col-md-6">
						<a href="#">
							<img src="public/assets/img/logo.png" height="23" width="187" id="img_left">
						</a>
					</div>
					<div class="col-md-6">
						<a href="#" class="pull-right">
							<img src="public/assets/img/vietnamwork.png" height="53" width="152">
						</a>
					</div>
				</div>
			</div>
			<?php

			?>

		</header>
		<div class="container">
			<div class="row da_info_author">
				<div class="col-md-7 da_about_author">
					@foreach($author as $key_au => $val_au)
					<h3>{{mb_convert_case($val_au->title, MB_CASE_UPPER, "UTF-8");}}</h3>
					<p>
						{{neods(strip_tags($val_au->content), 1000)}}
					</p>
					<span><a href="#">see more >></a></span>
				</div>
				<div class="col-md-5 da_name_author">
					<img src="{{$val_au->avatar}}" class="img-circle">
					<h2>{{mb_convert_case($val_au->name, MB_CASE_UPPER, "UTF-8");}}</h2>
					<h4>{{$val_au->position}}</h4>
				</div>
				@endforeach
			</div>
			<div class="row da_expert_in">
				<div class="col-md-12 ">
					<h3>EXPERT IN MAKETINGS</h3>

					<div class="da_slider">
						@foreach($expert as $key_ex => $val_ex)
						<div class="col-md-3 da_avatar_author ">
							<img src="{{$val_ex->avatar}}" class="img-circle center-block">
							<h3 class="center-block">{{$val_ex->name}}</h3>
							<h4>{{$val_ex->position}}</h4>
						</div>
						@endforeach
					</div>
				</div>

			</div>

			<div class="row">
				<div class="col-md-7 da_article_of">
					<h3>LASTES ARTICLES</h3>
					<div class="row">
						@foreach($last_article as $key_l => $val_l)
						<div class="col-md-6 da_div_article">
							<div class="da_content_ar">
								<a href="#">
									<img src="{{asset($val_l->avatar_article)}}">
								</a>
								<h4>{{neods($val_l->title, 63)}}</h4>
								<p>
									<span><i class="fa fa-clock-o"> </i>09:30 AM</span>
									<span class="da_view"> <i class="fa fa-eye"></i>1234</span>
								</p>
								<p>{{neods(strip_tags($val_l->content), 280).'...'}}
								</p>
							</div>
						</div>
						@endforeach
					</div>

				</div>

				<div class="col-md-5 da_question" >
					<h3>Do you have questions for marketing experts?</h3>
					<div class="wa_form_question_author_dub">
						<h4>What fields are you interested in?</h4>
						<select class="form-control">
							<option></option>
						</select>
					</div>
					<div class="wa_form_question_author_dub">
						<h4>What fields are you interested in?</h4>
						<textarea rows="5" class="form-control"></textarea>
					</div>
					<button class="btn btn-block">SEND QUESTION</button>

				</div>

			</div>
			<div class="row">
				<div class="col-md-7 da_pagination">
					<a href="#"><img src="public/assets/img/btn_back.png"></a>
					<a href="#">1</a>
					<a href="#">2</a>
					<a href="#">3</a>
					<a href="#">4</a>
					<a href="#"><img src="public/assets/img/btn_next.png"></a>


				</div>

			</div>



		</div>

		<footer>
			<div class="container">
			<div class="row da_footer">

				footer
			</div>
		</footer>


		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<?php
			function neods($string,$len)
			{
				if($len > strlen($string)){$len=strlen($string);};
				$pos = strpos($string, ' ', $len);
				if($pos){$string = substr($string,0,$pos);}else{$string = substr($string,0,$len);}
				return $string;
			}
		?>

		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

		<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.0/slick.min.js"></script>

		<script src="public/assets/js/jquery.resizecrop-1.0.3.min.js"></script>
		<script src="public/assets/js/slick.js"></script>
		<script src="public/assets/js/blog_home.js"></script>
	</body>
  </html>