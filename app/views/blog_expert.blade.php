<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Bootstrap 101 Template</title>

		<link href="public/assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="public/assets/css/blog2.css" rel="stylesheet">
		<link href="public/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>


		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		{{ HTML::style('public/frontend/css/style.css') }}
		{{ HTML::style('public/frontend/css/mobile.css') }}
	</head>
	<body>
		<?php
			function da_date($updated_at) {
				$date = new DateTime($updated_at);
				$t1 = $date->format("g"). ':' .$date->format("i"). ' ' .$date->format("A");
				return $t1;
			}

			function neods($string,$len)
			{
				$dot = '';
				if(strlen($string) >= $len)
					$dot = '...';
				if($len > strlen($string)){$len=strlen($string);};
				$pos = strpos($string, ' ', $len);
				if($pos){$string = substr($string,0,$pos);}else{$string = substr($string,0,$len);}
				return $string.$dot;
			}

		?>
		@include('layouts.frontend.header')
		<div class="container">
			<div class="row da_info_author">
				<div class="col-md-7 da_about_author">
					@foreach($author as $key => $val)
					<?php
						$id = $val->id;
						$name = $val->name;
					?>
					<h3>ABOUT EXPERT {{mb_convert_case($val->name, MB_CASE_UPPER, "UTF-8");}}</h3>
					<span><i class="fa fa-briefcase"></i>{{$val->sectors}}</span>
					<span class="da_location"><i class="fa fa-map-marker"></i>{{$val->region_name}}</span>
					<p>
						{{htmlspecialchars_decode($val->discription,ENT_QUOTES)}}
					</p>

				</div>
				<div class="col-md-5 da_name_author">
					<div class="div_img_avatar">
						<img src="{{$val->avatar}}" class="img-circle">
					</div>
					<h3>{{mb_convert_case($val->name, MB_CASE_UPPER, "UTF-8");}}</h3>
					<h4>{{$val->position}}</h4>
				</div>
				@endforeach
			</div>

			<div class="row">
				<div class="col-md-8 da_article_of">
					@if(count($article) >0)
					<h3>ARTICLES OF EXPERT {{mb_convert_case($name, MB_CASE_UPPER, "UTF-8");}}</h3>
					@endif
					<div class="row">
						@foreach($article as $key_a =>$val_a)
						<div class="col-md-6 da_div_article">
							<div class="da_content_ar">
								<a href="{{asset('detail-blog?id=').$val_a->id}}"><img src="{{$val_a->avatar_article}}"> </a>
								<div class="da_content_info">
									<p><a href="{{asset('detail-blog?id=').$val_a->id}}">{{neods(strip_tags($val_a->title),80)}}</a></p>
									<p>
									<span><i class="fa fa-clock-o"> </i>{{da_date($val_a->updated_at)}}</span>
									<p>
										{{$val_a->article_description}}
									</p>
								</div>
							</div>
						</div>
						@endforeach
					</div>
					<div class="row">
						<div class="col-md-12 da_pagination">
							<!--					<a href="#"><img src="public/assets/img/btn_back.png"></a>-->
							<?php
								echo $article->appends(array('id' => $id))->links();
							?>
							<!--					<a href="#"><img src="public/assets/img/btn_next.png"></a>-->


						</div>
					</div>

				</div>

				<div class="col-md-4 " style="margin-bottom: 50px;">
					<div class="da_question">
						<h3>Do you have questions for</br> marketing experts?</h3>
						<div class="wa_form_question_author_dub">
							<h4>What fields are you interested in?</h4>
							<select class="form-control">
								<option></option>
							</select>
						</div>
						<div class="wa_form_question_author_dub">
							<h4>Your question?</h4>
							<textarea rows="5" class="form-control"></textarea>
						</div>
						<button class="btn btn-block">SEND QUESTION</button>

					</div>
				</div>
			</div>
		</div>


		@include('layouts.frontend.footer')

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

		<!-- Include all compiled plugins (below), or include individual files as needed -->
	</body>
  </html>