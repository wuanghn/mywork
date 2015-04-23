<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Expert</title>

		<link href="{{asset('public/assets/css/bootstrap.min.css')}}" rel="stylesheet">
		<link href="{{asset('public/assets/css/blog2.css')}}" rel="stylesheet">
		<link href="{{asset('public/assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
		<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>


		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		{{ HTML::style('public/frontend/css/style.css') }}
		{{ HTML::style('public/frontend/css/mobile.css') }}
		<script type="">
			$(document).ready(function(){
				$('#da_modal').click();
				$('#da_form_question').submit(function(){
					$('#text_error').remove();
					$text = ($(this).parent().find('textarea').val()).trim();
					if($text == ""){
						$(this).parent().find('textarea').after('<span id="text_error" style="color:white;">Insert your question, please!</span>');
						return false;
					}
					else{
						$('#da_btn_question').attr('disabled','disabled');
						return true;
					}

				})

				$('#da_button_login').click(function(){
					//kiểm tra đăng nhập duoc hay chưa
					var val = setInterval(function(){
						$info = $('#ss_flag').val();
						if($info != ""){
							//nếu có dữ liệu trong box question
							$text = $('#da_content_question').val().trim();
							if($text != ""){//nếu có dữ liệu->luu vào db
								clearInterval(val);//dừng chạy
								$('#da_form_question').submit();
							}
							else{
								clearInterval(val);//dừng chạy
								location.reload();//refesh lại trangs
							}
						}
						}, 500);

				})
			})
		</script>
	</head>
	<body>
		<?php
			function da_date($updated_at) {
				$date = new DateTime($updated_at);
				//				$t1 = $date->format("g"). ':' .$date->format("i"). ' ' .$date->format("A");
				$t1 = $date->format("d"). '/' .$date->format("m"). '/' .$date->format("Y");
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
						$name_slug = $val->name_slug;
					?>
					<h3>ABOUT EXPERT {{mb_convert_case($val->name, MB_CASE_UPPER, "UTF-8");}}</h3>
					<span><i class="fa fa-briefcase"></i>{{$val->sectors}}</span><br>
					<span class="da_location"><i class="fa fa-map-marker"></i>{{$val->region_name}}</span>
					<p>
						{{$val->discription}}
					</p>

				</div>
				<div class="col-md-5 da_name_author">
					<div class="div_img_avatar">
						<img src="{{asset($val->avatar)}}" class="img-circle">
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
						<?php
							$title_slug = $val_a->title_slug;
						?>
						<div class="col-md-6 da_div_article">
							<div class="da_content_ar">
								<a href="{{asset('detail-blog').'/'.$title_slug}}"><img src="{{asset($val_a->avatar_article)}}"> </a>
								<div class="da_content_info">
									<p><a href="{{asset('detail-blog').'/'.$title_slug}}">{{neods(strip_tags($val_a->title),80)}}</a></p>
									<p>
									<span><i class="fa fa-clock-o"> </i>{{da_date($val_a->updated_at)}}</span>
									<p class="p_content_description">
										{{$val_a->article_description}}
									</p>
								</div>
							</div>
						</div>

						@endforeach
					</div>
					<div class="row">
						<div class="col-md-12 da_pagination">
							<?php
								$total = $article->getTotal();
								$currentPage = $article->getCurrentPage();
								$getLastPage = $article->getLastPage();

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
								<li><a href="{{asset('expert').'/'.$name_slug.'?id='.$id.'page='.($currentPage-1)}}" rel="prev">«</a></li>
								@endif
								@for($i = $begin; $i <= $end ;$i++)
								<li @if($currentPage == $i) {{'class = "active"'}}  @endif><a href="{{asset('expert').'/'.$name_slug.'?id='.$id.'&page='.$i}}">{{$i}}</a></li>
								@endfor
								@if($currentPage != $end)
								<li><a href="{{asset('expert').'/'.$name_slug.'?id='.$id.'&page='.($currentPage+1)}}" rel="prev">»</a></li>
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
									<option value="Content & PR">Content & PR</option>
									<option value="Trade Marketing">Trade Marketing</option>
									<option value="Account">Account</option>
									<option value="Creative & Design">Creative & Design</option>
									<option value="Event">Event</option>
								</select>
							</div>
							<div class="wa_form_question_author_dub">
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

		<!-- Include all compiled plugins (below), or include individual files as needed -->
	</body>
  </html>