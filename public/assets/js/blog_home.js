$(document).ready(function(){


	//	-----------------------------Blog-------------------------


	var width_wd = $( window ).width();
	if(width_wd >=640){
		$('.da_slider').slick({
			slidesToShow: 4,
			slidesToScroll: 4,
			arrows:true,
		});
	}else if(width_wd >=475){
		$('.da_slider').slick({
			slidesToShow: 3,
			slidesToScroll: 3,
			arrows:true,
		});
	}
	else{
		$('.da_slider').slick({
			slidesToShow: 2,
			slidesToScroll: 2,
			arrows:true,
		});
	}


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
