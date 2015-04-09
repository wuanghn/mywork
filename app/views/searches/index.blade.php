@extends('layouts.frontend.master')
@section('content')



				<div class="wa_wrap_banner">
						<img src="{{url('public/frontend/img/background.png')}}" width="100%">
						<div class="wa_opic"></div>
						<div class="container">
							<a href="#" class="wa_box_catetog wa_inline_block">
								<span>Digital Marketing</span>
								<i class="fa fa-share-alt-square fa-2x"></i>
							</a>
							<a href="#" class="wa_box_catetog wa_inline_block wa_space_right">
								<span>Content, PR & Marketing Communications</span>
								<i class="fa fa-share-alt-square fa-2x"></i>
							</a>
							<a href="#" class="wa_box_catetog wa_inline_block wa_space_right">
								<span>Trade Marketing</span>
								<i class="fa fa-share-alt-square fa-2x"></i>
							</a>
							<a href="#" class="wa_box_catetog wa_inline_block wa_space_right">
								<span>Account & Planner</span>
								<i class="fa fa-share-alt-square fa-2x"></i>
							</a>
							<a href="#" class="wa_box_catetog wa_inline_block wa_space_right">
								<span>Creative & Design</span>
								<i class="fa fa-share-alt-square fa-2x"></i>
							</a>
							<div href="#" style="clear:left;"></div>
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
															<input  id="wa_id_salary" type="text"
													           class="form-control" 
													           placeholder="Salary" />
													        <input type="hidden" name="min_salary">
													        <select id="wa_sel_salary" class="form-control">
													        		<option>Salary</option>
													        		<option value="50-50$">50$</option>
													        		<option value="100-100$">100$</option>
													        </select>
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







				

				<div role="tabpanel" class="container wa_tab_menu">

					  <!-- Nav tabs -->
					  <ul class="nav nav-tabs wa_fix_big_table_home" role="tablist">
					    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><h3>HOT JOBS OF THE WEEK</h3><span class="wa_tab_respo">Hot jobs of the week</span></a></li>
					    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><h3>THIS WEEK'S MARKETING STORY</h3><span class="wa_tab_respo">This week's marketing story</span></a></li>
					  </ul>

				  

					<div class="tab-content">
							<div role="tabpanel" id="profile" class="container wa_author_block tab-pane">
									<div class="row">
											<div class="col-md-8">
												<div class="wa_box_author">
													<img class="img-responsive" src="{{url('public/frontend/img/avarta_author.png')}}">
													<h2>Smile Nick</h2>
													<h4>Director of Marketing, VietnamWorks</h4>
												</div>
												<div class="wa_post_author">
													<h3>Biggest reasons why employees in Vietnam leave</h3>
													<h4>I was a little bit nervous when we launched this survey back in January to 12,000 professionals here in Vietnam. Partly because I knew that after Lunar New Year, staff turn-over is expected to rise and my team members are no exception. Furthermore, that this research might expose my team to other reasons why people decide to leave a company. <a href="#">Read more...</a></h4>
												</div>
											</div>
											<div class="col-md-4 wa_form_question_author" style="background-color:#4e4ebc">
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
							</div><!-- END AUTHOR -->



							<div role="tabpanel" id="home" class="tab-pane active container wa_content_tab">
									@foreach($new_job->data->jobs as $job)
									<div class="row">
											<div class="col-md-8">
												<div class="col-md-3">
													<img src="{{$job->job_logo_url}}" height="41" width="133">
												</div>
												<div class="col-md-9 wa_info">
													<h4>{{ $job->job_title }}</h4>
													<p>{{ $job->job_company }}</p>
													<!-- <img src="{{url('public/frontend/img/urgent.png')}}" height="92" width="93"> -->
												</div>
											</div>
											<div class="col-md-2 wa_location">
												@foreach($locations as $local)
													@if($local->location_id == $job->job_location)
														<h4>{{$local->lang_vn}}</h4>
													@endif
												@endforeach
											</div>
											<div class="col-md-2 wa_apply">
												<a href="#" class="btn">Click to view salary</a>
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
@stop

@section('script')
<script type="text/javascript">

	function getSelname(input)
	{
		return sel = input.replace('id','sel');
	}


	



	$(document).ready(function()
	{
		var sum = $('.wa_opic').outerHeight( true );
		var sumpx = sum + 'px';
		$('.wa_wrap_banner img').height(sum);

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
@stop





				