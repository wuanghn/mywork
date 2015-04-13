@extends('layouts.frontend.master')
@section('content')
						
						<div class="wa_max_width wa_wrap_search" style="margin-top:0px;">
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






						<div class="wa_banner_result_search">

							<h3>Featured jobs</h3>
							<div class="container">
								<a href="#">
									<img src="{{url('public/frontend/img/banner-jobs.png')}}" height="300px" width="100%">
								</a>
							</div>
						</div>



						  
						<div class="container wa_block_result_search">
							<h3>{{ $result->data->total }} jobs</h3>
							<div class="row wa_result_desktop">
								<div class="col-md-4 wa_parent_job">
									<div class="scroll" style="
										height: 500px;
										width: 100%;
										overflow: auto;
										_background-color: #ccc;
										padding: 8px;
									">
											@foreach($result->data->jobs as $job)
											<a id="wa_click_{{ $job->job_id }}" class="wa_click_need" href="#">
												<div class="row wa_box_title_job">
													<div class="col-md-4">
														<img src="{{$job->job_logo_url}}" width="100%">
													</div>
													<div class="col-md-8">
														<h4>{{ $job->job_title }}</h4>
														<p>{{ $job->job_company }}</p>
														@foreach($locations as $local)
															@if($local->location_id == $job->job_location)
																<p><i></i> {{$local->lang_vn}}</p>
															@endif
														@endforeach
													</div>
												</div>
											</a>
											@endforeach
									</div>
									
									<nav class="wa_pagination" style="text-align:center">
									  <ul class="pagination">
									    <li>
									      <a href="#" aria-label="Previous">
									        <span aria-hidden="true">&laquo;</span>
									      </a>
									    </li>
									    <li><a href="#">1</a></li>
									    <li><a href="#">2</a></li>
									    <li><a href="#">3</a></li>
									    <li><a href="#">4</a></li>
									    <li><a href="#">5</a></li>
									    <li>
									      <a href="#" aria-label="Next">
									        <span aria-hidden="true">&raquo;</span>
									      </a>
									    </li>
									  </ul>
									</nav>
									

									
								</div>
								
								
								
								<div class="col-md-8 wa_wrap_wa_iframe_content_job">
									<iframe class="wa_iframe_content_job" width="100%" height="550px;" src="{{ url('detail') }}"></iframe>
								</div>

							</div>


							<div class="row wa_result_mobile">
								<div class="col-md-4 wa_parent_job">
									@foreach($result->data->jobs as $job)
									<a href="{{url('detail')}}?id_job={{$job->job_id}}">
										<div class="row wa_box_title_job">
											<div class="col-md-4">
												<img src="{{$job->job_logo_url}}" width="100%">
											</div>
											<div class="col-md-8">
												<h4>{{ $job->job_title }}</h4>
												<p>{{ $job->job_company }}</p>
												@foreach($locations as $local)
													@if($local->location_id == $job->job_location)
														<p><i></i> {{$local->lang_vn}}</p>
													@endif
												@endforeach
											</div>
										</div>
									</a>
									@endforeach
									
									<nav class="wa_pagination" style="text-align:center">
									  <ul class="pagination">
									    <li>
									      <a href="#" aria-label="Previous">
									        <span aria-hidden="true">&laquo;</span>
									      </a>
									    </li>
									    <li><a href="#">1</a></li>
									    <li><a href="#">2</a></li>
									    <li><a href="#">3</a></li>
									    <li><a href="#">4</a></li>
									    <li><a href="#">5</a></li>
									    <li>
									      <a href="#" aria-label="Next">
									        <span aria-hidden="true">&raquo;</span>
									      </a>
									    </li>
									  </ul>
									</nav>
									

									
								</div>

							</div><!-- MOBILE -->
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

		$('.wa_content_job').hide();
		// $('.wa_block_result_search .wa_content_job').first().show();
		var job_id_first = $('.wa_parent_job .wa_click_need').first().attr('id');
		job_id_first = job_id_first.split('_');
		job_id_first = job_id_first[2];


		var src_first_job = "{{url('detail')}}?id_job="+job_id_first;

		$('.wa_iframe_content_job').attr('src',src_first_job);

		$('.wa_click_need').click(function()
		{
			$(this).children('.wa_box_title_job').css({
				'border':'1px solid #4e4ebc',
			})

			$(this).siblings().children('.wa_box_title_job').attr('style','');


			$('html,body').animate({
	        scrollTop: $('.wa_block_result_search').offset().top},
	        'slow');


			var id = $(this).attr('id');
			id = id.split('_');
			id = id[2];


			var src = "{{url('detail')}}?id_job="+id;

			$('.wa_iframe_content_job').attr('src',src);



			// var idshow = '#wa_show_click_'+id;
			// $(idshow).show();
			// $(idshow).siblings('.wa_content_job').hide();

			return false;
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