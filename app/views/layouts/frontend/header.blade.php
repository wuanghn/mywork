<div class="container wa_menu_desktop wa_header">
 						<div class="row">
 								<div class="col-md-6 left">
 										
 										<ul class="nav nav-pills">
 										  <li role="presentation">
 										  		<a class="wa_fix_bkg_logo" style="padding-top:0px" href="{{url('/')}}">
 										  				<img src="{{url('public/frontend/img/logo-vnw2.png')}}">
 										  		</a>
 										  </li>
 										  <li role="presentation"><a href="{{url('/')}}">Search</a></li>
 										  <li role="presentation"><a href="{{ url('blog') }}">Blog</a></li>

 										  @if(!Session::has('user_profile'))
 										  		
 										   <li id="displayLoginForm" role="presentation"><a href="#" data-toggle="modal" data-target="#myModal">Login</a></li>
 										  @else
 										  		<?php $last_name = Session::get('user_profile');
 										  				$last_name = $last_name->last_name;
 										  		 ?>
										     <li id="displayUser" role="presentation" class="dropdown">
										       <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
										         HI, {{ $last_name }}<span class="caret"></span>
										       </a>
										       <ul class="dropdown-menu" role="menu">
										         	<li><a href="{{url('users/logout')}}">Logout</a></li>
										       </ul>
										     </li>
										   @endif
 										</ul>
 								</div>

 								<!-- Modal -->
 								<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 								  <div class="modal-dialog">
 								    <div class="modal-content">
 								      <div class="modal-header">
 								        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 								        <h4 class="modal-title" id="myModalLabel">Authentication</h4>
 								      </div>
 								      <div class="modal-body">
 								        <div class="row">
					                          <div class="col-xs-6">
					                              <div class="well">
					                                  <form id="loginForm" novalidate="novalidate" class="show_login">
					                                  		@if(Session::has('user_profile'))
					                                  			<?php $ss = Session::get('user_profile');
					                                  				$ss = json_encode($ss);
					                                  			?>
					                                  		@else
					                                  			<?php $ss = "" ?>
					                                  		@endif
					                                  		<input type="hidden" value='{{ $ss }}' id="ss_flag">
					                                      <div class="form-group">
					                                          <label for="username" class="control-label">Email</label>
					                                          <input type="text" class="form-control" id="username" name="username" value="" required="" title="Please enter you username" placeholder="example@gmail.com">
					                                          <span class="help-block"></span>
					                                      </div>
					                                      <div class="form-group">
					                                          <label for="password" class="control-label">Password</label>
					                                          <input type="password" class="form-control" id="password" name="password" value="" required="" title="Please enter your password">
					                                          <span class="help-block"></span>
					                                      </div>
					                                      <div id="loginErrorMsg" class="alert alert-error hide">Wrong username or password</div>
					                                      
					                                      <button type="button" onclick="submitLogin()" id="da_button_login" class="btn btn_vnw btn-block">Login</button>
					                                  </form>



<script type="text/javascript">
$(document).ready(function(){
	$('.click_show_register').click(function(){
		$('.show_register').removeClass('hide');
		$('.show_login').addClass('hide');
	})

	$('.click_show_login').click(function(){
		$('.show_register').addClass('hide');
		$('.show_login').removeClass('hide');
	})
})


	function submitLogin () {
		var email = $("#loginForm input[name='username']").val();
		var password = $("#loginForm input[name='password']").val();

		// sent ajax login
		$.post("{{url('users/proccess-login')}}",

        {
         	email: email,
         	password: password
        },
        function(data,status){
            if(data == "false")
            {
            	$('#loginErrorMsg').removeClass('hide');
            }else
            {
            	$('#ss_flag').val(data);
            	data = JSON.parse(data);


            	$('#frmSignUp input[name=first_name]').val(data.first_name)
				$('#frmSignUp input[name=last_name]').val(data.last_name)
				$('#frmSignUp input[name=email]').val(data.email)

				$('#applyButtonLogin').hide();
				$('#applyButton').show();  
            	
            	var urlLogout = "{{url('users/logout')}}";
            	var html = '<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false"> HI, '+data.last_name+' <span class="caret"></span></a><ul class="dropdown-menu" role="menu"><li><a href="'+urlLogout+'">Logout</a></li></ul>';
            	
            	$('#displayLoginForm').html(html);
            	$('#myModal').modal('toggle')

            }
        });
	}

	function validateEmail(email) {
		var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
		return re.test(email);
	}

	function wa_check_email()
	{
		var email = $("#wa18_form_register input[name='email']").val();
		if(validateEmail(email) == true)
		{
			$.get("{{url('users/check-email-exist')}}",
			{
				email: email
			},
			function(data,status){
				if(data == '"NEW"')
				{
					$('#waErrEmail').html("");
				}else{
					$('#waErrEmail').html("Email has registed");
				}

			});



		}else{
			$('#waErrEmail').html("Not valid email");
		}
	}


	function submitRegister()
	{
		var first_name = $("#wa18_form_register input[name='first_name']").val();
		var last_name = $("#wa18_form_register input[name='last_name']").val();
		var email = $("#wa18_form_register input[name='email']").val();
		var password = $("#wa18_form_register input[name='password']").val();
		if(first_name == "" || last_name == "" || password == "" || email == "")
		{
			alert('Insert your info, please');

		}
		else
		{
					$.post("{{url('users/pro-regis')}}",
					{
						email: email,
						password: password,
						last_name: last_name,
						first_name:first_name

					},
					function(data,status){
						if(data == "false")
						{
							alert('Not Complete');
						}else
						{
							$('#ss_flag').val(data);

							data = JSON.parse($('#ss_flag').val());
							$('#frmSignUp input[name=first_name]').val(data.first_name)
							$('#frmSignUp input[name=last_name]').val(data.last_name)
							$('#frmSignUp input[name=email]').val(data.email) 

							$('#applyButtonLogin').hide();
							$('#applyButton').show();    	  	
							var urlLogout = "{{url('users/logout')}}";
							var html = '<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false"> HI, '+last_name+' <span class="caret"></span></a><ul class="dropdown-menu" role="menu"><li><a href="'+urlLogout+'">Logout</a></li></ul>';

							$('#displayLoginForm').html(html);
							$('#myModal').modal('toggle')

						}
					});
		}
	}
</script>




													  <form method="post" id="wa18_form_register" novalidate="novalidate" class="hide show_register">

															  <div class="form-group">
																  <label style="padding-left:0px; padding-right:0px" for="inputFirstName" class="control-label col-sm-12">Full name</label>
																  <div style="padding-left:0px; padding-right:0px" class="col-sm-6">
																		<input type="text" class="form-control" id="inputFirstName" name="first_name" placeholder="First name">
																   </div>
																  <div style="padding-left:0px; padding-right:0px" class="col-sm-6">
																	  <input type="text" class="form-control" id="inputLastName" name="last_name" placeholder="Last name">
																  </div>
															  </div>
															  <!-- email -->
															  <div class="form-group">
																  <label style="margin-top:15px" class="control-label">Email</label>
																  <input type="text" class="form-control" onkeyup="wa_check_email()" name="email" placeholder="Email" value="">
																  <span style="color:red" id="waErrEmail"></span>
															  </div>

															  <div class="form-group">
																  <label for="inputPassword3" class="control-label">Password</label>
																  <input type="password" class="form-control" id="inputPassword3" name="password" placeholder="Password">

															  </div>

															  <br>
															  <!-- -->
															  <div id="loginErrorMsgRegister" class="alert alert-error hide">Wrong username or password</div>

															  <button type="button" onclick="submitRegister()" class="btn btn_vnw btn-block">Register</button>
														  </form>
												  </div>
											  </div>
											  <div class="col-xs-6 show_login">
												  <p class="lead">Register now for <span class="text-success">FREE</span></p>
												  <p><a href="#" class="btn btn_vnw btn-block click_show_register">Yes please, register now!</a></p>
											  </div>

											  <div class="col-xs-6 hide show_register">
												  <p class="lead">Have you VietNamWork's account</p>
												  <p><a href="#" class="btn btn_vnw btn-block click_show_login">Yes i have, login now!</a></p>
											  </div>
										  </div>
									  </div>
									</div>
								  </div>
								</div>

								<div class="col-md-6">
										<a href="http://www.vietnamworks.com/">
												<img src="{{url('public/frontend/img/vnw_logo.png')}}">
										</a>
								</div>
						</div>
				</div><!-- HEADER -->




				<nav class="navbar wa_menu_respon navbar-default">
						  <div class="container-fluid">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
							  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							  </button>
							  <a class="navbar-brand" href="#"><img src="{{url('public/frontend/img/logo.png')}}" class="img-responsive"></a>
							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							  <ul class="nav navbar-nav">
								<li ><a href="{{ url('blog') }}">Blog <span class="sr-only">(current)</span></a></li>
								<li><a href="#">Digital Marketing</a></li>
								<li><a href="#">Content, PR & Marketing Communications</a></li>
								<li><a href="#">Trade Marketing</a></li>
								<li><a href="#">Account & Planner</a></li>
								<li><a href="#">Creative & Design</a></li>
								<!-- <li class="dropdown">
								  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
								  <ul class="dropdown-menu" role="menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li class="divider"></li>
									<li><a href="#">Separated link</a></li>
									<li class="divider"></li>
									<li><a href="#">One more separated link</a></li>
								  </ul>
								</li> -->
							  </ul>
							 <!--  <form class="navbar-form navbar-left" role="search">
								<div class="form-group">
								  <input type="text" class="form-control" placeholder="Search">
								</div>
								<button type="submit" class="btn btn-default">Submit</button>
							  </form>
							  <ul class="nav navbar-nav navbar-right">
								<li><a href="#">Link</a></li>
								<li class="dropdown">
								  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
								  <ul class="dropdown-menu" role="menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li class="divider"></li>
									<li><a href="#">Separated link</a></li>
								  </ul>
								</li>
							  </ul> -->
							</div><!-- /.navbar-collapse -->
						  </div><!-- /.container-fluid -->
						</nav>