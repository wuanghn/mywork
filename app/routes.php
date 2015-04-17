<?php

	Route::filter("check_login", function(){
		if(!Session::has('user'))
			return Redirect::to('admin');
	});

	Route::group(array("before"=>"check_login"), function(){



		Route::get('author','BlogController@index');
		Route::post('store_author','BlogController@store');
		Route::get('delete_author','BlogController@destroy');
		Route::post('update_author','BlogController@update');

		Route::get('sys_author','AuthorController@index');
		Route::post('sys_store_author','AuthorController@store');
		Route::get('sys_delete_author','AuthorController@destroy');
		Route::post('sys_update_author','AuthorController@update');
		Route::get('sys_search_author','AuthorController@search');

		Route::get('sys_article','ArticleController@index');

		Route::get('sys_auto_complete_author','ArticleController@auto_complete_author');
		Route::get('sys_auto_complete_acticle','ArticleController@auto_complete_acticle');

		Route::post('sys_store_article','ArticleController@store');
		Route::get('sys_delete_article','ArticleController@destroy');
		Route::post('sys_update_article','ArticleController@update');

		Route::get('sys_banner','BannerController@index');
		Route::get('sys_header_blog','BannerController@header_blog');
		Route::post('sys_store_header_blog','BannerController@store_header_blog');
		Route::post('upload_banner','BannerController@upload_banner');
		Route::post('store_banner','BannerController@store');
		Route::get('delete_img','BannerController@destroy');

		Route::get('sys_question','QuestionController@index');
		Route::post('sys_store_question','QuestionController@store');
		Route::get('sys_delete_question','QuestionController@destroy');

		Route::get('sys_hot_story','HotStoryController@index');
		Route::post('sys_store_hot','HotStoryController@store');

		Route::get('logout','LoginController@logout');

	});

	Route::get('blog','BlogController@index');

	Route::get('detail-blog/{id}','DetailBlogController@index');

	Route::get('expert/{id}','ExpertBogController@index');

	Route::get('admin','LoginController@index');
	Route::post('login','LoginController@process');
















	// ROUTE BY WA 31/3/2015
	Route::get('wa-test',function()
		{
			dd(display_messages());
	});


	Route::controller('users', 'UsersController');
	Route::controller('/','SearchesController');




