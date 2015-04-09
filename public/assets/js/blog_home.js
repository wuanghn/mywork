$(document).ready(function(){


	//	-----------------------------Blog-------------------------


	var width_wd = $( window ).width();
	if(width_wd >=640){
		$('.da_slider').slick({
			slidesToShow: 4,
			slidesToScroll: 4,
			arrows:true,
		});
	}else if(width_wd >=320){
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









	//	-------------------banner---------------
	$('.da_image').click(function(){
		url = $(this).find('img').attr('src');
		$('#input_url').val(url);
	})
})
