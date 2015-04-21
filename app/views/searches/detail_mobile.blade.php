@extends('layouts.frontend.master')
@section('content')


			<div class="container">

					<div class="row">
						
						<div id="wa_show_click_" class="col-md-7 col-md-offset-1 wa_content_job">
								<div class="title">
									<div class="col-md-6">
										<h4 style="margin:30px 0px; text-transform: uppercase;" class="wa_h4">{{ $job->data->job_detail->job_title }}</h4>
										
									</div>
									
								</div>
								<div class="col-md-12 wa_nd_job">
										<!-- <img src="img/avarta_job.png" width="100%"> -->
										<b>Job Description</b>
										<p>
											{{ nl2br($job->data->job_detail->job_description) }}
										</p>
										<b>Job Requirement</b>
										<p>
											{{ nl2br($job->data->job_detail->job_requirement) }}
										</p>
										<b>{{ $job->data->job_company->company_name }}</b>
										<p>{{ $job->data->job_company->company_address }}</p>
										<p>{{ nl2br($job->data->job_company->company_profile) }}</p>
										
								</div>
							
						</div>

					</div>



					<div class="panel wa_fix_panel">


														    <!-- Form -->
														    <a name="applyForm" id="applyForm"></a>
														    <div class="panel-heading"><h2>Apply Form</h2></div>
														    <div class="panel-body">
														        <div align="right" class="img-vnw"><span class="small">Supported by </span><img src="http://www.japan.vietnamworks.com/static/img/vnw_logo_small.png" width="36%" alt=""></div>
														        <div class="clear"></div>
														        @if(!Session::has('user_profile'))
														        <h5><a href="{{url('users/login-mobile')}}">Login</a> to apply job</h5>
														        @else
														        									        <br>
														        <form id="frmSignUp" class="form-horizontal" role="form" method="post" action="{{url('applies/apply-mobile')}}" onsubmit="return vaidateBeforeSubmit(event)" novalidate="novalidate" enctype="multipart/form-data">
														           	
														        
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

														        	<input type="hidden" name="job_title" value="{{ $job->data->job_detail->job_title }}">
														        	<input type="hidden" name="job_id" value="{{ $job->data->job_detail->job_id }}">
														            <div class="form-group ">

														                <label for="inputFirstName" class="col-sm-2 control-label">*Full name:</label>
														                <div class="col-sm-5 input-container">
														                	{{ Session::get('user_profile')->first_name }} {{ Session::get('user_profile')->last_name }}
														                </div>

														            </div>

														            <div class="form-group ">

														                <label for="inputEmail" class="col-sm-2 control-label">*E-mail</label>
														                <div class="col-sm-5 input-container">
														                     {{ Session::get('user_profile')->email }}
														                </div>

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
														                    <button id="applyButtonLogin" type="button" data-toggle="modal" data-target="#myModal" class="btn btn-lg" style="min-width: 40%; display: none;" data-original-title="">Apply</button>
														                    <button id="applyButton" value="upload" class="btn btn-lg" style="min-width:40%" data-original-title="" title="">Apply</button>&nbsp;&nbsp;&nbsp;

														                </div>
														                
														            </div>

														        </form>
														        @endif

														    </div>
														    <!-- /Form -->
														</div>

				</div>



@stop