<?php

	class HotStoryController extends \BaseController {

		/**
		* Display a listing of the resource.
		*
		* @return Response
		*/
		public function index()
		{
			//lấy ra 10 bài viết mơi nhất
			$rs = DB::table('articles as ar')
			->leftjoin('authors as au', 'au.id' ,'=', 'ar.id_author')
			->select('ar.id as id', 'au.name as name', 'ar.title as title')
			->orderBy('ar.id', 'desc')->limit(10)->get();

			//lấy ra bài viết chọn hiện tại

			$now = DB::table('hot_story as hot')
			->leftjoin('articles as ar', 'ar.id' ,'=', 'hot.id_article')
			->select('ar.id as id','ar.title as title')
			->get();
			return View::make('hot_story', array('article' => $rs, 'now' => $now));
		}


		/**
		* Show the form for creating a new resource.
		*
		* @return Response
		*/
		public function create()
		{
			//
		}


		/**
		* Store a newly created resource in storage.
		*
		* @return Response
		*/
		public function store()
		{
			$arr = array(
				'id_article' => Input::get('id_article')
			);

			DB::table('hot_story')->truncate();
			DB::table('hot_story')->insert($arr);
			return Redirect::to('sys_hot_story');
		}


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


	}
