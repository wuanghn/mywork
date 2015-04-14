<?php

	class QuestionController extends \BaseController {

		/**
		* Display a listing of the resource.
		*
		* @return Response
		*/
		public function index()
		{
			$question = DB::table('questions')->orderBy('id','desc')->get();
			return View::make('question', array('question' =>$question));
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
			$question = $this->get_input();
			DB::table('questions')->insert($question);

			return Redirect::to('blog');
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
		public function get_input()
		{
			$arr = array();
			$in = Input::all();
			$arr = array(
				'id_user' =>1,
				'type' => $in['type'],
				'question' => $in['question'],
			);

			return $arr;
		}


	}
