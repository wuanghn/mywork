@extends('layouts.frontend.master')
@section('content')

<script type="text/javascript">
	$(document).ready(function(){
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




				<div class="wa_wrap_banner">
						<img src="{{url('public/frontend/img/background.png')}}" width="100%">
						<div class="wa_opic"></div>
						


						<div class="container">
							<div class="row">
								
								<a href="{{url('store')}}?job_category=27&page_number=1&job_title=Digital Marketing&job_location=&min_salary=&job_level=" class="col-md-2">
									<div class="wa_catetogary_feedback hvr-hollow">
										<h4>Digital Marketing</h4>
										<img class="center-block" src="{{url('public/frontend/img')}}/digital-marketing.png" style="width:80px; height:80px;">
									</div>
								</a>
								<a href="{{url('store')}}?job_category=27&page_number=1&job_title=Content&job_location=&min_salary=&job_level=" class="col-md-2">
									<div class="wa_catetogary_feedback hvr-hollow">
										<h4>Content</h4>
										<img class="center-block" src="{{url('public/frontend/img')}}/Content-writer.png" style="width:80px; height:80px;">
									</div>
								</a>
								<a href="{{url('store')}}?job_category=27&page_number=1&job_title=Trade Marketing&job_location=&min_salary=&job_level=" class="col-md-2">
									<div class="wa_catetogary_feedback hvr-hollow">
										<h4>Trade Marketing</h4>
										<img class="center-block" src="{{url('public/frontend/img')}}/trade-marketing.png" style="width:80px; height:80px;">
									</div>
								</a>
								<a href="{{url('store')}}?job_category=27&page_number=1&job_title=Account Planner=&min_salary=&job_level=" class="col-md-2">
									<div class="wa_catetogary_feedback hvr-hollow">
										<h4>Account & Planner</h4>
										<img class="center-block" src="{{url('public/frontend/img')}}/account-marketing.png" style="width:80px; height:80px;">
									</div>
								</a>
								<a href="{{url('store')}}?job_category=27&page_number=1&job_title=Creative Design&job_location=&min_salary=&job_level=" class="col-md-2">
									<div class="wa_catetogary_feedback hvr-hollow">
										<h4>Creative & Design</h4>
										<img class="center-block" src="{{url('public/frontend/img')}}/creative (1).png" style="width:60px; height:80px;">
									</div>
								</a>
								<a href="{{url('store')}}?job_category=27&page_number=1&job_title=PR Event&job_location=&min_salary=&job_level=" class="col-md-2">
									<div class="wa_catetogary_feedback hvr-hollow">
										<h4>PR & Event</h4>
										<img class="center-block" src="{{url('public/frontend/img')}}/event.png" style="width:60px; height:80px;">
									</div>
								</a>
							</div>
						</div>

				</div><!-- BANNER -->


				


				<div class="wa_max_width wa_wrap_search">
						<div class="container wa_block_search">
								{{ Form::open(array('url' => 'store', 'method' => 'GET', 'class' => 'row')) }}

										<!-- input hidden -->
										<input name="job_category" value="27" type="hidden">
										<input name="page_number" type="hidden" value="1">


										<div class="col-md-10">
											<h3>Search for your Dream Marketing job</h3>

													<div class="left-inner-addon wa_input_job_title">
													    <i class="fa fa-briefcase"></i>
													    <input name="job_title" type="text"
													           class="form-control" 
													           placeholder="Job Title" />
													</div>
													<div class="col-md-6 wa_input_locaiton left-inner-addon">
															<i class="fa fa-map-marker"></i>
															<input id="wa_id_location" type="text"
													           class="form-control" 
													           placeholder="Location" />

													        <input type="hidden" name="job_location">

													        <select id="wa_sel_location" class="form-control">
													        		<option value="0">Location</option>
													        		@foreach($ganeral_configurations->locations as $location)
													        			<option value="{{  $location->location_id }}-{{ $location->lang_vn }}">{{ $location->lang_vn }}</option>
													        		@endforeach
													        </select>
													</div>
													<div class="col-md-3 left-inner-addon">
															<i class="fa fa-usd"></i>
															<input name="min_salary"  type="number" min="0" step="50" tabindex="105" maxlength="6"
													           class="form-control" 
													           placeholder="Salary" />
													       <!--  <input type="hidden" name="min_salary">
													        <select id="wa_sel_salary" class="form-control">
													        		<option>Salary</option>
													        		<option value="50-50$">50$</option>
													        		<option value="100-100$">100$</option>
													        </select> -->
													</div>
													<div class="col-md-3 wa_input_job_level left-inner-addon">
															<i class="fa fa-book"></i>
															<input id="wa_id_level" type="text"
													           class="form-control" 
													           placeholder="Job level" />

													           <input type="hidden" name="job_level">

													           <select id="wa_sel_level" class="form-control">
													           		<option value="0">Level</option>
													           		@foreach($ganeral_configurations->job_levels as $job_level)
													           			<option value="{{  $job_level->job_level_id }}-{{ $job_level->lang_vn }}">{{ $job_level->lang_vn }}</option>
													           		@endforeach
													           </select>
													</div>	
											
										</div>
										<div class="col-md-2 wa_block_search_button">
												<button type="submit" class="btn btn-lg btn-block">Search</button>
										</div>
								</form>
						</div>
				</div><!-- block search -->







				<div class="wa_wrap_tab_menu">

				<div role="tabpanel" class="container wa_tab_menu">

					  <!-- Nav tabs -->
					  <ul class="nav nav-tabs wa_fix_big_table_home" role="tablist">
					    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><h3>HOT JOBS OF THE WEEK</h3><span class="wa_tab_respo">Hot jobs of the week</span></a></li>
					    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><h3>THIS WEEK'S MARKETING STORY</h3><span class="wa_tab_respo">This week's marketing story</span></a></li>
					  </ul>

				  

					<div class="tab-content">
							<div role="tabpanel" id="profile" class="container wa_author_block tab-pane">
									<div class="row">
									            @foreach($article as $key_a => $val_a)
									            <div class="col-md-6">
									                <div class="wa_box_author">
									                    <img  src="{{$val_a->avatar}}">
									                    <h2>{{$val_a->name}}</h2>
									                    <h4>{{$val_a->position}}</h4>
									                </div>
									                <div class="wa_post_author">
									                    <h3>{{$val_a->title}}</h3>
									                    <h4>{{neods(strip_tags($val_a->content), 900)}} <span><a style="font-size: 14px;" href="{{asset('detail-blog').'/'.$val_a->title_slug}}"><i>  &nbsp;read more>></i></a></span></h4>

									                </div>
									            </div>
									            @endforeach
									            <form action="{{asset('sys_store_question')}}" method="POST" id="da_form_question">
									                <div class="col-md-5 col-md-offset-1 wa_form_question_author" style="background-color:#4e4ebc ">
									                    <h3>Do you have questions for marketing experts?</h3>

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

									                    <div class="wa_form_question_author_dub">
									                        <h4>Your question</h4>
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
							</div><!-- END AUTHOR -->



							<div role="tabpanel" id="home" class="tab-pane active container wa_content_tab">
									@foreach($new_job->data->jobs as $job)
									<div style="position:relative" class="row">
											<div class="col-md-8">
												<div class="col-md-3" >
													<img src="{{$job->job_logo_url}}" style="width:100%">
													<!-- <img src="{{url('public/frontend/img/urgent-badge.png')}}" style="position:absolute;top:-30px;left:-15px; width:100px; height:100px;"> -->
												</div>
												<div class="col-md-8 wa_info col-md-offset-1">
													<h4>{{ $job->job_title }}</h4>
													<p>{{ $job->job_company }}</p>
													<!-- <img src="{{url('public/frontend/img/urgent.png')}}" height="92" width="93"> -->
												</div>
											</div>
											<div class="col-md-2 wa_location">
												@foreach($locations as $local)
													@if($local->location_id == $job->job_location)
														<h4><i class="fa fa-map-marker"></i> {{$local->lang_vn}}</h4>
													@endif
												@endforeach
											</div>
											<div class="col-md-2 wa_apply">
												<a href="{{url('store')}}?job_category=27&page_number=1&job_title={{ $job->job_title }} {{ $job->job_company }}&job_location=&min_salary=&job_level=" class="btn">Click to view salary</a>
											</div>
											<div class="col-md-12" style="padding-right:15px; margin-top:30px">
												<div style="border-top:1px solid #dedede;"></div>
											</div>

									</div>
									@endforeach


									<!-- <div style="text-align:center; padding:10px;">
											<a style="color:#4e4ebc" href="#">Xem thêm</a>
									</div> -->

									
									

									
							</div><!-- block content tab -->
					</div>
				</div><!-- end tab content -->

		</div><!-- end wrap tab content -->



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
@stop

@section('script')
<script type="text/javascript">

	function getSelname(input)
	{
		return sel = input.replace('id','sel');
	}


	



	$(document).ready(function()
	{
		var margin = parseInt($('.wa_header').css('marginLeft'));

		$('.wa_wrap_banner>.container').css('left',margin)


		var sum = $('.wa_opic').outerHeight( true );
		var sumpx = sum + 'px';
		$('.wa_wrap_banner>img').height(sum);

		var has = $('.wa_wrap_banner').outerHeight( true );

		var margin = sum - has;
		margin = margin+'px';
		$('.wa_wrap_search').css('margin-top',margin)

		var catetogary = ".wa_box_catetog";
		$(catetogary).children('i').hide();

		$(catetogary).hover(function()
		{
				$(this).children('i').fadeIn( "slow" );
				$(this).children('span').hide();
		}, function() {
		    	$(catetogary).children('span').fadeIn('slow');
		    	$(this).children('i').hide();
		  })



		var local = '#wa_id_location';
		var sel_local = getSelname(local);

		var salary = '#wa_id_salary';
		var sel_salary = getSelname(salary);

		var level = '#wa_id_level';
		var sel_level = getSelname(level);

		var array = [
			local,level,salary
		]

		var array_sel = [
			sel_local,sel_salary,sel_level
		]

		for(var i = 0; i<=2 ; i++)
		{
			// hide option
			$(array_sel[i]).hide();


			$(array[i]).click(function(){
				$(this).hide();
				$(this).siblings('i').hide();
				$(this).siblings('select').show();
			})


			$(array_sel[i]).change(function(){

				value = $(this).val();
				value = value.split('-');
				$(this).siblings('input[type=hidden]').val(value[0]);
				$(this).siblings('input[type=text]').val(value[1]);

				$(this).hide();

				$(this).siblings('input').show();
				$(this).siblings('i').show();
			})
			
		}

	})

	
</script>


<?php
	function neods($string,$len)
	{
		if($len > strlen($string)){$len=strlen($string);};
		$pos = strpos($string, ' ', $len);
		if($pos){$string = substr($string,0,$pos);}else{$string = substr($string,0,$len);}
		return $string;
	}
?>
@stop





				