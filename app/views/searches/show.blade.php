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
								<a href="{{$banner->url}}">
									<img src="{{ $banner->link }}" height="300px" width="100%">
								</a>
							</div>
						</div>



						  
						<div class="container wa_block_result_search">
							<h3>{{ $result->data->total }} jobs</h3>
							<div class="row wa_result_desktop">
								<div class="col-md-4 wa_parent_job">
									<div class="scroll" style="
										height: 970px;
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
														<input type="hidden" name="id_apply" value="{{$job->job_id}}">
														<h4 class="title_apply">{{ $job->job_title }}</h4>
														<p>{{ $job->job_company }}</p>
														@foreach($locations as $local)
															@if($local->location_id == $job->job_location)
																<p><i class="fa fa-map-marker"></i> {{$local->lang_vn}}</p>
															@endif
														@endforeach
													</div>
												</div>
											</a>
											@endforeach
									</div>


<!-- CUSTOM PAGINATION -->
<?php
		$total = $result->data->total; //total 
		$currentPage = $_GET['page_number'];//trang hien tai
		$getLastPage = ceil($total/19);//so trang (tong so bai / so bai tren 1 trang)

		$begin = $currentPage -2;
		$end = $currentPage +2;

		



		$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";


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
<!-- \ CUSTOM PAGINATION -->
									
									<nav class="wa_pagination" style="text-align:center">
									  <ul class="pagination">
									  	@if($currentPage >1)
									  	<li><a href="{{ $url }}&page_number={{$currentPage-1}}" rel="prev">«</a></li>
									  	@endif
									  	@for($i = $begin; $i <= $end ;$i++)
									  	<li @if($currentPage == $i) {{'class = "active"'}}  @endif><a href="{{ $url }}&page_number={{$i}}">{{$i}}</a></li>
									  	@endfor
									  	@if($currentPage != $end)
									  	<li><a href="{{ $url }}&page_number={{$currentPage+1}}" rel="prev">»</a></li>
									  	@endif
									  </ul>
									</nav>
									

									
								</div>
								
								
								
								<div class="col-md-8 wa_wrap_wa_iframe_content_job">
									<iframe class="wa_iframe_content_job" width="100%" height="550px;" src="{{ url('detail') }}"></iframe>
									<div class="panel wa_fix_panel">


									    <!-- Form -->
									    <a name="applyForm" id="applyForm"></a>
									    <div class="panel-heading"><h2>Apply Form</h2></div>
									    <div class="panel-body">
									        <div align="right" class="img-vnw"><span class="small">Supported by </span><img src="http://www.japan.vietnamworks.com/static/img/vnw_logo_small.png" width="36%" alt=""></div>
									        <div class="clear"></div>
									        @if(!Session::has('user_profile'))
									        	<p style="text-align:center"><a style="color:red" href="#" data-toggle="modal" data-target="#myModal"> LOGIN</a> to apply by account VietNamWork</p>
									        @endif
									        <br>
									        <form id="frmSignUp" class="form-horizontal" role="form" method="post" action="{{url('apply')}}" onsubmit="return vaidateBeforeSubmit(event)" novalidate="novalidate" enctype="multipart/form-data">
									           	
									        @if(Session::has('err'))
									           	<div class="alert alert-danger alert-dismissible" role="alert">
									           	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									           	  {{Session::get('err')}}
									           	</div>
									        @endif

									        @if(Session::has('done'))
									           	<div class="alert alert-success alert-dismissible" role="alert">
									           	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									           	  {{Session::get('done')}}
									           	</div>
									        @endif



									            <div class="form-group ">

									                <label for="inputFirstName" class="col-sm-2 control-label">*Full name</label>
									                <div class="col-sm-5 input-container">
									                    <input type="text" rel="requiredField" class="form-control" id="inputFirstName" disabled name="first_name" placeholder="First Name">
									                    <input type="hidden" name="first_name">
									                    <div class="has-error"></div>
									                </div>
									                <div class="col-sm-5 input-container">
									                    <input type="text" rel="requiredField" class="form-control" id="inputLastName" disabled name="last_name" placeholder="Last Name">
									                    <input type="hidden" name="last_name">
									                    <div class="has-error"></div>
									                </div>

									            </div>

									            <div class="form-group ">

									                <label for="inputEmail" class="col-sm-2 control-label">*E-mail</label>
									                <div class="col-sm-5 input-container">
									                                            <input type="text" rel="requiredField" disabled class="form-control" id="inputEmail" name="email" placeholder="E-mail">
									                    						<input type="hidden" name="email">
									                    			<input type="hidden" name="password">
									                    			<input type="hidden" name="job_id">
									                    			<input type="hidden" name="job_title">
									                    <div class="has-error"></div>
									                </div>
									                <!--                    <div class="col-sm-5 input-container">
									                                        <input type="text" rel="requiredField" class="form-control"  id="inputPhone" name="inputPhone" placeholder="Your  phone number"
									                                               value="">
									                                        <div class="has-error"></div>
									                                    </div>   -->

									            </div>


									            

									            <div class="form-group " id="attachCV" style="">
									                <label for="inputResume" class="col-sm-2 control-label">*Attach CV</label>

									                <div class="col-sm-10 input-container">

									                                            <input type="hidden" name="maxFileSize" value="524288">
									                        <input type="file" class="left" rel="requiredField" id="inputFile" name="inputFile" placeholder="Your resume">


									                        <span class="small">(type .doc, .docx, .pdf maximum 512KB)</span>
									                        <div class="has-error"></div>


									                                    </div>

									            </div>
									            




									            <br>



									            
									            <div class="form-group">
									                <div class="col-sm-offset-2 col-sm-10">
									                    <input type="hidden" id="isSent" name="isSent" value="OK">
									                    <button id="applyButtonLogin" type="button" data-toggle="modal" data-target="#myModal" class="btn btn-lg" style="min-width:40%" data-original-title="">Apply</button>
									                    <button id="applyButton" value="upload" class="btn btn-lg" style="min-width:40%" data-original-title="" title="">Apply</button>&nbsp;&nbsp;&nbsp;

									                </div>
									                
									            </div>

									        </form>

									    </div>
									    <!-- /Form -->
									</div>
								</div>

							</div>


							<div class="row wa_result_mobile">
								<div class="col-md-4 wa_parent_job">
									@foreach($result->data->jobs as $job)
									<a href="{{url('detail-mobile')}}?id_job={{$job->job_id}}">
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
											@if($currentPage >1)
											<li><a href="{{ $url }}&page_nuber={{$currentPage-1}}" rel="prev">«</a></li>
											@endif
											@for($i = $begin; $i <= $end ;$i++)
											<li @if($currentPage == $i) {{'class = "active"'}}  @endif><a href="{{ $url }}&page_nuber={{$i}}">{{$i}}</a></li>
											@endfor
											@if($currentPage != $end)
											<li><a href="{{ $url }}&page_nuber={{$currentPage+1}}" rel="prev">»</a></li>
											@endif
										</ul>

									  <!-- <ul class="pagination">
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
									  </ul> -->
									</nav>
									

									
								</div>

							</div><!-- MOBILE -->
						</div>




@stop



@section('script')

<script language="javascript" type="text/javascript" src="http://www.japan.vietnamworks.com/static/js/jquery.validate.js"></script>


<script type="text/javascript">

	function getSelname(input)
	{
		return sel = input.replace('id','sel');
	}


	



	$(document).ready(function()
	{





		$(".wa_iframe_content_job").load(function(){

		   $(this).contents().find(".btn_apply").click(function(){
		   		//wa_fix_panel
		   		$('html,body').animate({
		   		        scrollTop: $(".wa_fix_panel").offset().top},
		   		        'slow');
		   });

		});


		// croll to detail job
		$('html,body').animate({
		        scrollTop: $(".wa_block_result_search").offset().top},
		        'slow');




		// button APPLY
		if($('#ss_flag').val() == "")
		{
			$('#applyButtonLogin').show();
			$('#applyButton').hide();
		}
		else
		{
			$('#applyButtonLogin').hide();
			data = JSON.parse($('#ss_flag').val());
			
			$('#frmSignUp input[name=first_name]').val(data.first_name)
			$('#frmSignUp input[name=last_name]').val(data.last_name)
			$('#frmSignUp input[name=email]').val(data.email)
			$('#frmSignUp input[name=password]').val(data.password)
		}
		




		$('.wa_content_job').hide();
		// $('.wa_block_result_search .wa_content_job').first().show();
		var job_id_first = $('.wa_parent_job .wa_click_need').first().attr('id');

		apply_first_job = $('.wa_parent_job .wa_click_need').first();

		$('#frmSignUp input[name=job_id]').val($(apply_first_job).find('input[name=id_apply]').val());
		$('#frmSignUp input[name=job_title]').val($(apply_first_job).find('.title_apply').html());


		job_id_first = job_id_first.split('_');
		job_id_first = job_id_first[2];


		var src_first_job = "{{url('detail')}}?id_job="+job_id_first;

		$('.wa_iframe_content_job').attr('src',src_first_job);

		$('.wa_click_need').click(function()
		{
			$('#frmSignUp input[name=job_id]').val($(this).find('input[name=id_apply]').val());
			$('#frmSignUp input[name=job_title]').val($(this).find('.title_apply').html());

			$(this).children('.wa_box_title_job').css({
				'border':'1px solid #4e56a5',
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




	// function checkPasswordVNW(msg) {
	// 		var passTimeout;

 //            if ($("#checkActiveEmail").val() == "1" && $("#inputPassword").val() !== "") {
 //                $('#passLoading').show();
 //                $('#applyButton').attr('disabled', 'disabled');
 //                clearTimeout(passTimeout);
 //                passTimeout = setTimeout(function () {
 //                    $.ajax({
 //                        url: "{{url('users/proccess-login')}}",
 //                        type: 'GET',
 //                        data: {'email': $("#inputEmail").val(), 'password': $("#inputPassword").val()},
 //                        dataType: "json",
 //                        success: function (response) {

 //                            if (response == true) { //if login is correct
 //                                $("#forgotPass").hide();
 //                                $("#checkPassword").val(1);
 //                                $("#loadData").find(".has-error").empty();
 //                                $("#loadData").find(".has-error").append("<img alt='tick' src='http://www.japan.vietnamworks.com/static/img/tick.png' style='width: 15px' /><span class='textPass' style='color: #555 !important; margin-left: 5px !important'>Đúng mật khẩu</span>");
 //                            } else { //login not correct
 //                                $("#forgotPass").show();
 //                                $("#checkPassword").val(0);
 //                                $("#loadData").find(".has-error").empty();
 //                                var email = $("#inputEmail").val();
 //                                if (typeof (msg) !== "undefined") {
 //                                    $("#loadData").find(".has-error").append("<img alt='error' src='http://www.japan.vietnamworks.com/static/img/error.png' style='width: 15px' /><span class='textPass' style='margin-left: 5px !important'>" + msg + "</span>");
 //                                    delete local[email];
 //                                    localStorage.jpw = JSON.stringify(local);
 //                                } else {
 //                                    if ($("#inputPassword").valid() === true)
 //                                        $("#loadData").find(".has-error").append("<img alt='error' src='http://www.japan.vietnamworks.com/static/img/error.png' style='width: 15px' /><span class='textPass' style='margin-left: 5px !important'>Sai mật khẩu. </span>");
 //                                }
 //                            }

 //                            $('#passLoading').hide();
 //                            $('#applyButton').removeAttr('disabled');
 //                        }
 //                    }); //end load ajax
 //                }, 1000);
 //            }
 //            else {
 //                $("#loadData").find(".has-error").empty();
 //                clearTimeout(passTimeout);
 //                $('#passLoading').hide();
 //                $('#applyButton').removeAttr('disabled');
 //            }
 //        }


	// function checkEmailExistVNW() {
	// 		var emailTimeout;
 //            var forgetText = $("#forget-text");

 //            var newMessage = "Vui lòng thiết lập mật khẩu để nộp đơn.<br />Bạn sẽ đăng ký tài khoản ở JapanWorks và VietnamWorks.";
 //            var existMessage = "Bạn có tài khoản ở Vietnamwork!<br />Nhập mật khẩu VietnamWorks của bạn.";



 //            if ($("#inputEmail").val() != "" && $("#inputEmail").valid() === true) {
 //                $('#passLoading').show();
 //                $('#applyButton').attr('disabled', 'disabled');
 //                clearTimeout(emailTimeout);
 //                emailTimeout = setTimeout(function () {
 //                    def = $.Deferred();
 //                    def.promise();
 //                    $.ajax({
 //                        url: "{{url('users/check-email-exist')}}",
 //                        type: 'get', data: {'email': $("#inputEmail").val()},
 //                        dataType: "json",
 //                        success: function (response) {
 //                            //show form password
 //                            $("#loadData").show();
 //                            if (response == "ACTIVATED") {
 //                                $("#checkActiveEmail").val(1);
 //                                forgetText.html(existMessage);
 //                                $("#forgotPass").show();
 //                            } else if (response == "NON_ACTIVATED") {
 //                                $("#forgotPass").hide();
 //                                $("#checkActiveEmail").val(3);
 //                                forgetText.html(existMessage);
 //                            } else {
 //                                $("#forgotPass").hide();
 //                                $("#checkActiveEmail").val(0);
 //                                forgetText.html(newMessage);
 //                            }

 //                            $('#passLoading').hide();
 //                            $('#applyButton').removeAttr('disabled');
 //                            def.resolve($("#checkActiveEmail").val());
 //                            currentEmail = $("#inputEmail").val();
 //                        }
 //                    });
 //                }, 1000);
 //            } else if ($("#inputEmail").val() != currentEmail) {
 //                //hide form password
 //                $("#loadData").hide();
 //                $("#inputPassword").val('');
 //                $("#loadData").find(".has-error").empty();
 //                $("#forgotPass").hide();
 //                $("#checkPassword").val(0);
 //                forgetText.html("");
 //                clearTimeout(emailTimeout);
 //                $('#passLoading').hide();
 //                $('#applyButton').removeAttr('disabled');
 //                currentEmail = null;
 //            }

 //        }
</script>
@stop