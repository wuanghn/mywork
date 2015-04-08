$(document).ready(function(){


	//	-----------------------------Blog-------------------------
	$('.da_content_ar img').resizecrop({
		width:320,
		height:260,
		vertical:"top"
	});

	$('.da_slider').slick({
		slidesToShow: 4,
		slidesToScroll: 4,
		arrows:true,
	});







	//	-------------------banner---------------
	$('.da_image').click(function(){
		url = $(this).find('img').attr('src');
		$('#input_url').val(url);
	})
})
