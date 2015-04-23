<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

	<!-- FONT AWSOME -->
	<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

	

	<!-- Jquery -->
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.2.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>


	<script type="text/javascript">

		$(window).load(function() {
			$(".loader").fadeOut("slow");
		})
	</script>



	<style type="text/css">
		.btn_apply{
			border-color: #4e4ebc;
			color: #4e4ebc;
			background-color: white;
			padding: 10px 35px;
			text-transform: uppercase;
			font-weight: bold;
		}
		.loader {
			position: fixed;
			left: 0px;
			top: 0px;
			width: 100%;
			height: 100%;
			z-index: 9999;
			background: url('http://bradsknutson.com/wp-content/uploads/2013/04/page-loader.gif') 50% 50% no-repeat rgb(249,249,249);
		}
	</style>

</head>
<body>
	<div class="loader"></div>

	<div class="container">

		<div class="row">
			
			<div id="wa_show_click_" class="col-md-7 col-md-offset-1 wa_content_job">
					<div class="title">
						<div class="col-md-6">
							<h4 style="margin-bottom:30px; text-transform: uppercase;" class="wa_h4">{{ $job->data->job_detail->job_title }}<a href="#" style="float:right" class="btn btn_apply">Apply</a></h4>
							
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
							<div style="text-align:center; margin:20px;">
								<a href="#" class="btn btn_apply">Apply</a>
							</div>
							<b>{{ $job->data->job_company->company_name }}</b>
							<p>{{ $job->data->job_company->company_address }}</p>
							<p>{{ nl2br($job->data->job_company->company_profile) }}</p>
							
					</div>
				
			</div>

		</div>

	</div>

		

</body>
</html>