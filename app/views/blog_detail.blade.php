<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		@foreach($article as $k1 =>$val1)
		<!-- Schema.org markup for Google+ -->
		<meta itemprop="name" content="{{$val1->title}}">
		<meta itemprop="description" content="{{$val1->article_description}}">
		<meta itemprop="image" content="{{asset($val1->avatar_article)}}">

		<!-- Open Graph data -->
		<meta property="og:title" content="{{$val1->title}}"/>
		<meta property="og:type" content="article" />
		<meta property="og:url" content="{{URL::full();}}"/>
		<meta property="og:image" content="{{asset($val1->avatar_article)}}" />
		<meta property="og:description" content="{{$val1->article_description}}" />
		<meta property="og:site_name" content="Viet Nam Work" />





		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>{{$val1->title}}</title>
		<link rel="shortcut icon" href="http://advice.vietnamworks.com/misc/favicon.ico" type="image/x-icon"/>
		@endforeach
		<link href="{{asset('public/assets/css/bootstrap.min.css')}}" rel="stylesheet">
		<link href="{{asset('public/assets/css/blog2.css')}}" rel="stylesheet">
		<link href="{{asset('public/assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<!-- Place this tag in your head or just before your close body tag. -->
		<script src="https://apis.google.com/js/platform.js" async defer></script>
		{{ HTML::style('public/frontend/css/style.css') }}
		{{ HTML::style('public/frontend/css/mobile.css') }}

		<script type="">
			$(document).ready(function(){
				$('.da_div_arti img').each(function(){
					$(this).attr('class','img-responsive');
					$(this).css('height','auto');
				});
				$('#da_content_article').children().css('width','100%')  ;

				$('#da_modal').click();
				$('#da_form_question').submit(function(){
					$('#text_error').remove();
					$text = $(this).parent().find('textarea').val().trim();
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

		<div id="fb-root"></div>
		<script>(function(d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) return;
				js = d.createElement(s); js.id = id;
				js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
				fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>

		@include('layouts.frontend.header')

		<div class="container">
			<div class="row ">
				<div class="col-md-8 da_div_left">
					@foreach($article as $key_a => $val_a)
					<div class="da_div_arti">
						<h3>{{mb_convert_case($val_a->title, MB_CASE_UPPER, "UTF-8");}}</h3>
						<div class=" row da_div_view">
							<div class="col-md-7">
								<span><i class="fa fa-clock-o"> </i>{{da_date($val_a->updated_at)}}</span><span> | </span>
								<span><a href="{{asset('expert').'/'.$val_a->name_slug}}" style="color:#989898">{{$val_a->name}}</a></span>
							</div>
							<div class="col-md-5 da_icon_share">
								<div class="g-plus" data-action="share" data-annotation="bubble"></div>
								<div class="fb-like" data-href="{{URL::full();}}" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
							</div>

						</div>
						<div class=" row da_article_description">
							<div class="col-md-12">
								<p>{{$val_a->article_description}}</p>
							</div>
						</div>
						<div class=" row da_content_arti">
							<div class="col-md-12" id="da_content_article">
								{{$val_a->content}}
							</div>
						</div>
					</div>
					@endforeach


					<div class="row"> <!--comment-->
						<div class="col-md-12 da_comment">
							<h3>COMMENT</h3>
							<div class="fb-comments" data-href="{{URL::full();}}"  data-numposts="5" data-colorscheme="light"></div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12 da_question">
							<div class="col-md-4">
								<h3 style="text-align: left;">Do you have questions for</br> marketing experts?</h3>
							</div>
							<div class="col-md-8">
								<form action="{{asset('sys_store_question')}}" method="POST" id="da_form_question">
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
								</form>
							</div>
						</div>
					</div>
				</div>


				<div class="col-md-4">
					<div class="row">
						<div class="col-md-12 da_search">  <!--search  -->
							<script>
								(function() {
									var cx = '017341108073439579548:0jnhiafya7y';
									var gcse = document.createElement('script');
									gcse.type = 'text/javascript';
									gcse.async = true;
									gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
									'//cse.google.com/cse.js?cx=' + cx;
									var s = document.getElementsByTagName('script')[0];
									s.parentNode.insertBefore(gcse, s);
								})();
							</script>
							<gcse:search></gcse:search>
						</div>
					</div>
					<div class="row da_row_rela">
						<div class="col-md-12  da_ralate_ar">
							@if(count($relates) !=0)
							<h3>RELATED ARTICLES</h3>
							@endif
							@foreach($relates as $key_re =>$val_re)
							@if(count($val_re) >0)
							@foreach($val_re as $key2)
							<div class="da_content_related">
								<a href="{{asset('detail-blog').'/'.$key2->title_slug}}"><img src="{{asset($key2->avatar_article)}}"> </a>
								<div class="da_content_info">
									<p><a href="{{asset('detail-blog').'/'.$key2->title_slug}}">{{neods($key2->title,80)}}</a></p>
									<p>
										<span><i class="fa fa-clock-o"> </i>{{da_date($key2->updated_at)}}</span></p>
									<p class="p_content_description">
										{{$key2->article_description}}
									</p>
								</div>
							</div>

							@endforeach
							@endif
							@endforeach

						</div>
					</div>
					<div class="row">
						<div class=" col-md-12 da_other_article">
							@if(count($others) >0)<h3>OTHER ARTICLES OF THIS EXPERT</h3>  @endif
							@foreach($others as $key_o => $val_o)
							<div class="da_content_related">
								<a href="{{asset('detail-blog').'/'.$val_o->title_slug}}"><img src="{{asset($val_o->avatar_article)}}"></a>
								<div class="da_content_info">
									<p><a href="{{asset('detail-blog').'/'.$val_o->title_slug}}">{{neods(strip_tags($val_o->title),80)}}</a></p>
									<p>
										<span><i class="fa fa-clock-o" style="padding-right: 10px;"> </i>{{da_date($val_o->updated_at)}}</span>
									</p>
									<p class="p_content_description">
										{{$val_o->article_description}}
									</p>
								</div>
							</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
		<div style="clear: both"></div>

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

	</body>
</html>