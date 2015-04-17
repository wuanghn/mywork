/*
* Core script to handle all login specific things
*/
$(document).ready(function(){
	$('.login-form').validate({
		rules: {
			username: "required",
			password: {
				required: true,
				minlength: 6,
			},
		},


	})
})
