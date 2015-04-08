<?php

	class ExpertBogController extends \BaseController {

		/**
		* Display a listing of the resource.
		*
		* @return Response
		*/
		public function index()
		{
			$id = Input::get('id');
			$author = DB::table('authors')->where('id', $id)->get();

			//bài viết của author
			$id_author = $author[0]->id;

			$article = DB::table('articles')->where('id_author',$id_author)->orderBy('id', 'desc')->paginate(2);

			return View::make('blog_expert',array('author' =>$author , 'article' =>$article));
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
			//
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
