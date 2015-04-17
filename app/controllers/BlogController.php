<?php

	class BlogController extends BaseController {

		/**
		* Display a listing of the resource.
		*
		* @return Response
		*/
		public function index()
		{
			//lấy ra hearder cho blog->chi có 1 record
			$author = DB::table('header_blog_home as hea')
			->join('articles as ar', 'hea.id_article','=', 'ar.id')
			->leftjoin('authors as au','au.id', '=', 'ar.id_author')
			->select('*','ar.id as id_ar')
			->get();

			//lấy ra những auhthor mới nhất
			$expert = DB::table('authors')->orderBy('id','desc')->get();

			//lấy ra 4 bài viết mới nhất
			$last_article = DB::table('articles')->orderBy('id', 'desc')->paginate(1);

			return View::make('blog_home',array('last_article' =>$last_article, 'author' =>$author, 'expert' =>$expert));
		}


		/**
		* Show the form for creating a new resource.
		*
		* @return Response
		*/


		/**
		* Display the specified resource.
		*
		* @param  int  $id
		* @return Response
		*/
		public function show($id)
		{
			//
		}


		/**
		* Show the form for editing the specified resource.
		*
		* @param  int  $id
		* @return Response
		*/
		public function edit($id)
		{
			//
		}


		/**
		* Update the specified resource in storage.
		*
		* @param  int  $id
		* @return Response
		*/
		public function update($id)
		{
			//
		}


		/**
		* Remove the specified resource from storage.
		*
		* @param  int  $id
		* @return Response
		*/
		public function destroy($id)
		{
			//
		}

		public function get_input()
		{
			$input= Input::all();
			$arr = array();

			$arr = array(
				'id_user' => 1,
				'id_article' => 1,
				'comment' => $input['content_cmt'] ,
				'like' =>0 ,
			);

			return $arr;
		}
	}
