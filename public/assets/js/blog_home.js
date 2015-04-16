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
		$text = $(this).parent().find('textarea').val();
		if($text == ""){
			$(this).parent().find('textarea').after('<span id="text_error" style="color:white;">Bạn vui lòng nhập câu hỏi !</span>');
			return false;
		}
		else
			return true;
	})









})
