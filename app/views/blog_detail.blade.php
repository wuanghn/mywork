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


		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
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

		</header>

		<div class="container">
			<div class="row ">
				<div class="col-md-8 da_div_left">
					@foreach($article as $key_a => $val_a)
					<div class="da_div_arti">
						<h3>{{mb_convert_case($val_a->title, MB_CASE_UPPER, "UTF-8");}}</h3>
						<div class=" row da_div_view">
							<div class="col-md-8">
								<span><i class="fa fa-clock-o"> </i>{{da_date($val_a->updated_at)}}</span>
							</div>
							<div class="col-md-4">
								<div class="tw"><a href="https://twitter.com/share" class="twitter-share-button"
										data-dnt="true"
										data-count="none"
										data-via="twitterdev">
										Tweet
									</a>
								</div>
								<div class="fb-share-button" data-href="{{URL::full();}}" data-layout="button"></div>
								<div class="g-plus" data-action="share" data-annotation="none"></div>
							</div>

						</div>
						<div class=" row da_content_arti">
							<div class="col-md-12">
								{{$val_a->content}}
							</div>
						</div>
					</div>
					@endforeach


					<div class="row"> <!--comment-->
						<div class="col-md-12 da_comment">
							<h3>COMMENT</h3>
							<div class="fb-comments" data-href="{{URL::full();}}" data-width="100%" data-numposts="5" data-colorscheme="light"></div></div>
					</div>

					<div class="row">
						<div class="col-md-12 da_question">
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
				</div>


				<div class="col-md-4">
					<div class="row">
						<div class="col-md-12 da_search">  <!--search  -->
							<gcse:search></gcse:search>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12  da_ralate_ar">
							@if(count($relates) !=0)
							<h3>RELATED ARTICLES</h3>
							@endif
							@foreach($relates as $key_re =>$val_re)
							@if(count($val_re) >0)
							@foreach($val_re as $key2)
							<div class="da_content_related">
								<a href="{{asset('detail-blog?id=').$key2->id}}"><img src="{{asset($key2->avatar_article)}}"> </a>
								<h5>{{neods($key2->title,80)}}</h5>
								<p>
								<span><i class="fa fa-clock-o"> </i>{{da_date($key2->updated_at)}}</span>
								<p>
									{{neods(strip_tags($key2->content),280)}}
								</p>
								</p>
							</div>

							@endforeach
							@endif
							@endforeach

						</div>
					</div>
					<div class="row">
						<div class="da_other_article">
							@if(count($others) >0)<h3>OTHERS ARTICLES OF THIS EXPERT</h3>  @endif
							@foreach($others as $key_o => $val_o)
							<div class="da_content_related">
								<a href="{{asset('detail-blog?id=').$val_o->id}}"><img src="img/bai-viet.png"></a>
								<h5>{{neods(strip_tags($key2->title),80)}}</h5>
								<p>
								<span><i class="fa fa-clock-o"> </i>{{da_date($key2->updated_at)}}</span>
								<p>
									{{neods(strip_tags($key2->content),280)}}...
								</p>
								</p>
							</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
		<div style="clear: both"></div>


		<footer>
			<div class="container">
			<div class="row da_footer">

				footer
			</div>
		</footer>




		<div id="fb-root"></div>
		<script>(function(d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) return;
				js = d.createElement(s); js.id = id;
				js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.3";
				fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>

		<script src="https://apis.google.com/js/platform.js" async defer></script>
		<script>
			window.twttr=(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],t=window.twttr||{};if(d.getElementById(id))return t;js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);t._e=[];t.ready=function(f){t._e.push(f);};return t;}(document,"script","twitter-wjs"));
		</script>
		<script>
			(function() {
				var cx = '013583651706418624827:srqpb5mdjcy';
				var gcse = document.createElement('script');
				gcse.type = 'text/javascript';
				gcse.async = true;
				gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
				'//www.google.com/cse/cse.js?cx=' + cx;
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(gcse, s);
			})();
		</script>
	</body>
</html>