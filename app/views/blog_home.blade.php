<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Blog</title>

		<!-- Bootstrap -->
		<link href="{{asset('public/assets/css/bootstrap.min.css')}}" rel="stylesheet">

		<link href="{{asset('public/assets/css/slick.css')}}" rel="stylesheet">
		<link href="{{asset('public/assets/css/slick-theme.css')}}" rel="stylesheet">
		<link href="{{asset('public/assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
		<link href="{{asset('public/assets/css/blog2.css')}}" rel="stylesheet">

		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

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
		@include('layouts.frontend.header')
		<div class="container">
			<div class="row da_info_author">
				<div class="col-md-7 da_about_author">
					@foreach($author as $key_au => $val_au)
					<h3>{{mb_convert_case($val_au->title, MB_CASE_UPPER, "UTF-8");}}</h3>
					<p>
						{{neods(strip_tags($val_au->content), 1000)}}
					</p>
					<span><a href="{{asset('detail-blog?id=').$val_au->id_ar}}"><i>see more >></i></a></span>
				</div>
				<div class="col-md-5 da_name_author">
					<div class="div_img_avatar">
						<img src="{{$val_au->avatar}}" class="img-circle">
					</div>
					<h3>{{mb_convert_case($val_au->name, MB_CASE_UPPER, "UTF-8");}}</h3>
					<h4>{{$val_au->position}}</h4>
				</div>
				@endforeach
			</div>
			<div class="row da_expert_in">
				<div class="col-md-12 ">
					<h3>EXPERTS IN MARKETING</h3>
					<div class="da_slider autoplay">
						@foreach($expert as $key_ex => $val_ex)
						<div class=" da_avatar_author ">
							<a href="{{asset('expert').'/'.$val_ex->name_slug}}"  class="div_img_avatar">
								<img src="{{$val_ex->avatar}}" class="img-circle center-block" title="{{$val_ex->name}}">
							</a>
							<h3 class="center-block">{{$val_ex->name}}</h3>
							<h4>{{$val_ex->position}}</h4>
						</div>
						@endforeach
					</div>
				</div>

			</div>

			<div class="row">
				<div class="col-md-8 da_article_of">
					<h3>LATEST ARTICLES</h3>
					<div class="row">
						@foreach($last_article as $key_l => $val_l)
						<div class="col-md-6  da_div_article">
							<div class="da_content_ar">
								<a href="{{asset('detail-blog').'/'.$val_l->title_slug}}">
									<img src="{{asset($val_l->avatar_article)}}">
								</a>
								<div class="da_content_info">
									<p><a href="{{asset('detail-blog').'/'.$val_l->title_slug}}">{{neods($val_l->title, 63)}}</a></p>
									<p>
										<span><i class="fa fa-clock-o"> </i>{{da_date($val_l->updated_at)}}</span>
									</p>
									<p class="p_content_description">{{$val_l->article_description}}
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
								$total = $last_article->getTotal();
								$currentPage = $last_article->getCurrentPage();
								$getLastPage = $last_article->getLastPage();

								if($getLastPage >=5){
									$begin = $currentPage -2;
									$end = $currentPage +2;

									if($currentPage ==1 || $currentPage ==2)
										$end = 5;

									if($end > $getLastPage )
										$end = $getLastPage;
									if($end <=5)
										$begin = 1;
								}
								else{//nhỏ hơn 5
									$begin = 1;
									$end = $getLastPage;
								}


								if($begin < 1 )
									$begin = 1;


							?>

							@if($getLastPage != 1)
							<ul class="pagination">

								@if($currentPage >1)
								<li><a href="{{asset('blog').'?page='.($currentPage-1)}}" rel="prev">«</a></li>
								@endif
								@for($i = $begin; $i <= $end ;$i++)
								<li @if($currentPage == $i) {{'class = "active"'}}  @endif><a href="{{asset('blog').'?page='.$i}}">{{$i}}</a></li>
								@endfor
								@if($currentPage != $end)
								<li><a href="{{asset('blog').'?page='.($currentPage+1)}}" rel="prev">»</a></li>
								@endif

							</ul>
							@endif
						</div>
					</div>

				</div>
				<div class="col-md-4 " style="margin-bottom: 50px;">
					<form action="{{asset('sys_store_question')}}" method="POST" id="da_form_question">
						<div class="da_question">
							<h3>Do you have questions for</br> marketing experts?</h3>
							<div class="wa_form_question_author_dub">
								<h4>What fields are you interested in?</h4>
								<select class="form-control" name="type">
									<option value="Digital Marketing">Digital Marketing</option>
									<option value="Content">Content</option>
									<option value="Trade Marketing">Trade Marketing</option>
									<option value="Account & Planner">Account & Planner</option>
									<option value="Creative & Design">Creative & Design</option>
									<option value="PR & Event">PR & Event</option>
								</select>
							</div>
							<div class="wa_form_question_author_dub" id="da_your_ques">
								<h4>Your question?</h4>
								<textarea rows="5" class="form-control" name="question" id="da_content_question"></textarea>
							</div>
							@if(Session::has('user_profile'))
							<input class="btn btn-block" type="submit" value="SEND QUESTION" id="da_btn_question">
							@else
							<input class="btn btn-block" data-toggle="modal" data-target="#myModal" value="SEND QUESTION" id="da_btn_question">
							@endif
						</div>
					</form>
				</div>
			</div>
		</div>


		<!-- Button trigger modal -->
		@if(Session::has('thanhcong'))
		<button type="button" class="btn btn-primary btn-lg hidden" data-toggle="modal" data-target="#myModal2" id="da_modal" >
			Launch demo modal
		</button>
		@endif
		<!-- Modal -->
		<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Notify</h4>
					</div>
					<div class="modal-body">
						Thanks for submitting your question!
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>


		@include('layouts.frontend.footer')


		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<?php
			function neods($string,$len)
			{
				if($len > strlen($string)){$len=strlen($string);};
				$pos = strpos($string, ' ', $len);
				if($pos){$string = substr($string,0,$pos);}else{$string = substr($string,0,$len);}
				return $string;
			}

			function da_date($updated_at) {
				$date = new DateTime($updated_at);
				$t1 = $date->format("d"). '/' .$date->format("m"). '/' .$date->format("Y");
				return $t1;
			}
		?>

		<!-- Include all compiled plugins (below), or include individual files as needed -->

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

		<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

		<script src="{{asset('public/assets/js/jquery.resizecrop-1.0.3.min.js')}}"></script>
		<script src="{{asset('public/assets/js/slick.js')}}"></script>
		<script src="{{asset('public/assets/js/blog_home.js')}}"></script>
	</body>
  </html>