$(document).ready(function(){


	$(".in_avatar").change(function(){
		readURL(this,false);
	});

	$(".avatar_ar").change(function(){
		readURL(this,true);
	});

	$('.a_update').click(function(){
		var id = $(this).parent().parent().find('td.td_id').text();
		var discription = $(this).parent().parent().find('td.td_discription').text();
		var name = $(this).parent().parent().find('td.td_name').text();
		var avatar = $(this).parent().parent().find('td.td_avatar').text();
		var sectors = $(this).parent().parent().find('td.td_sectors').text();
		var position = $(this).parent().parent().find('td.td_position').text();

		$('#name_up').val(name);
		$('#discription_up').val(discription);
		$('#position_up').val(position);
		$('#sectors_up').val(sectors);
		$('#img_avatar_up').attr('src',avatar);
		$('#id_up').val(id);
	})


	//	--------------------------------------article-----------------------------------------------

	//	 	CKEDITOR.config.height = '400px';

	//auto comple tác giả thêm
	$(".autocomplete_name").autocomplete({
		source: function( request, response ) {
			$.get("sys_auto_complete_author",
				{
					author: request.term
				},
				function(data, status){
					var arr = $.parseJSON(data)
					response(arr);
			});
		},
		minLength: 2,
		focus: function (event, ui) {
			var label =  (ui.item.label.replace(/<strong>/g,"")).replace(/\<\/strong>/g,"");
			$("#autocomplete_name").val(label);
			return false;
		},
		select: function (event, ui) {
			$("#id_author").val(ui.item.value);
			return false;
		}
	})
	.data( "ui-autocomplete" )._renderItem = function( ul, item ) {
		item.label = item.label.replace(new RegExp("(?![^&;]+;)(?!<[^<>]*)(" + $.ui.autocomplete.escapeRegex(this.term) + ")(?![^<>]*>)(?![^&;]+;)", "gi"), "<strong>$1</strong>");
		return $("<li></li>")
		.data("item.autocomplete", item)
		.append("<a>" + item.label+"</a>")
		.appendTo(ul);
	};

	//auto comple tác giả cập nhật
	$(".autocomplete_name_up").autocomplete({
		source: function( request, response ) {
			$.get("sys_auto_complete_author",
				{
					author: request.term
				},
				function(data, status){
					var arr = $.parseJSON(data)
					response(arr);
			});
		},
		minLength: 2,
		focus: function (event, ui) {
			var label =  (ui.item.label.replace(/<strong>/g,"")).replace(/\<\/strong>/g,"");
			$("#autocomplete_name_up").val(label);
			return false;
		},
		select: function (event, ui) {
			$("#id_author_up").val(ui.item.value);
			return false;
		}
	})
	.data( "ui-autocomplete" )._renderItem = function( ul, item ) {
		item.label = item.label.replace(new RegExp("(?![^&;]+;)(?!<[^<>]*)(" + $.ui.autocomplete.escapeRegex(this.term) + ")(?![^<>]*>)(?![^&;]+;)", "gi"), "<strong>$1</strong>");
		return $("<li></li>")
		.data("item.autocomplete", item)
		.append("<a>" + item.label+"</a>")
		.appendTo(ul);
	};



	//auto comple bài viết
	$(".in_searh_acticle").autocomplete({
		source: function( request, response ) {
			$.get("sys_auto_complete_acticle",
				{
					title: request.term
				},
				function(data, status){
					var arr = $.parseJSON(data)
					response(arr);
			});
		},
		minLength: 2,
		focus: function (event, ui) {
			var label =  (ui.item.label.replace("<strong>","")).replace("</strong>","");
			//			$("#in_searh_acticle").val(label);
			return false;
		},
		select: function (event, ui) {
			if(($('div.alert-info').length) <=3){
				var label =  (ui.item.label.replace(/<strong>/g,"")).replace(/\<\/strong>/g,"");
				var htm ="";
				var htm = '<div class="alert alert-info" role="alert">' ;
				htm += '<input type="hidden" value="'+ui.item.value +'" class="arr_acticles">';
				htm += '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
				htm += '<strong>'+label;
				htm += '</div>';

				$(".div_alert_relate").append(htm);

			}

			//			console.log($('div.alert-info').length);
			//			$(".div_alert_relate").val(ui.item.value);
			return false;
		}
	})
	.data( "ui-autocomplete" )._renderItem = function( ul, item ) {
		item.label = item.label.replace(new RegExp("(?![^&;]+;)(?!<[^<>]*)(" + $.ui.autocomplete.escapeRegex(this.term) + ")(?![^<>]*>)(?![^&;]+;)", "gi"), "<strong>$1</strong>");
		return $("<li></li>")
		.data("item.autocomplete", item)
		.append("<a>" + item.label+"</a>")
		.appendTo(ul);
	};



	//auto comple bài viết thêm
	$(".in_searh_acticle_up").autocomplete({
		source: function( request, response ) {
			$.get("sys_auto_complete_acticle",
				{
					title: request.term
				},
				function(data, status){
					var arr = $.parseJSON(data)
					response(arr);
			});
		},
		minLength: 2,
		focus: function (event, ui) {
			var label =  (ui.item.label.replace("<strong>","")).replace("</strong>","");
			//			$("#in_searh_acticle").val(label);
			return false;
		},
		select: function (event, ui) {
			if(($('div.alert-info').length) <=3){
				var label =  (ui.item.label.replace(/<strong>/g,"")).replace(/\<\/strong>/g,"");
				var htm ="";
				var htm = '<div class="alert alert-info" role="alert">' ;
				htm += '<input type="hidden" value="'+ui.item.value +'" class="arr_acticles">';
				htm += '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
				htm += '<strong>'+label;
				htm += '</div>';

				$(".div_alert_relate_up").append(htm);

			}

			//			console.log($('div.alert-info').length);
			//			$(".div_alert_relate").val(ui.item.value);
			return false;
		}
	})
	.data( "ui-autocomplete" )._renderItem = function( ul, item ) {
		item.label = item.label.replace(new RegExp("(?![^&;]+;)(?!<[^<>]*)(" + $.ui.autocomplete.escapeRegex(this.term) + ")(?![^<>]*>)(?![^&;]+;)", "gi"), "<strong>$1</strong>");
		return $("<li></li>")
		.data("item.autocomplete", item)
		.append("<a>" + item.label+"</a>")
		.appendTo(ul);
	};

	//sub mit thêm
	$('#btn_submit_ac').click(function(){
		ids = get_id_acticle(this);
		$("#id_acticles").val(ids);
	})

	//sub mit cập nhật
	$('#btn_submit_ac_up').click(function(){
		ids = get_id_acticle(this);
		$("#id_acticles_up").val(ids);
	})


	//auto scroll khi click update article
	$('.panel_update').hide();
	$('.ar_update').click(function(){
		$('.panel_create').hide();
		$('.panel_update').show();
		$("body").animate({ scrollTop: 0 }, "slow");

		id_author = $(this).parent().parent().find('td.td_id_author').text();
		title = $(this).parent().parent().find('td.td_title').text();
		name_author = $(this).parent().parent().find('td.td_name_author').text();
		id_article = $(this).parent().parent().find('td.td_id_article').text();
		td_related = $(this).parent().parent().find('td.td_related').text();
		title_relate1 = $.trim($(this).parent().parent().find('td.td_name_title_relate').text());
		avatar_article = $.trim($(this).parent().parent().find('td.td_avatar_article').text());

		if(title_relate1 !="")
			title_relate = $.parseJSON(title_relate1);
		else
			title_relate = [];

		textarea = $(this).parent().parent().find('td.td_content').html();

		$('#id_article_up').val(id_article);
		$('#title_up').val(title);
		$('#autocomplete_name_up').val(name_author);
		$('#id_author_up').val(id_author);
		$('#img_avatar_ar_up').attr('src',avatar_article);

		arr_id_relate = td_related.split(',');
		$('.alert-info').remove(); //delete div relate

		for(i=0; i< title_relate.length; i++){
			var htm ="";
			var htm = '<div class="alert alert-info" role="alert">' ;
			htm += '<input type="hidden" value="'+arr_id_relate[i]+'" class="arr_acticles">';
			htm += '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
			htm += '<strong>'+title_relate[i];
			htm += '</div>';

			$(".div_alert_relate_up").append(htm);
		}

		CKEDITOR.instances['editor2'].setData(textarea);
		console.log((avatar_article));

	})


	//hủy cập nhật
	$('#btn_cancel').click(function(){
		$('.panel_create').show();
		$('.panel_update').hide();

		$("body").animate({ scrollTop: 0 }, "slow");
	})




	function get_id_acticle(obj){
		var arr =  $(obj).parent().parent().find('div.div_article .arr_acticles')
		var arr2 =  arr.map( function(){return $(this).val(); }).get();
		return arr2;
	}

	function readURL(input,article) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function (e) {
				if(article == false)
					$(input).parent().find('.img_avatar').attr('src', e.target.result);
				else
					$(input).parent().find('.img_avatar_ar').attr('src', e.target.result);
				//				$('#img_avatar').attr('src', e.target.result);
			}

			reader.readAsDataURL(input.files[0]);
		}
	}



	//	-----------------------------Blog-------------------------
	//auto comple bài viết






})
