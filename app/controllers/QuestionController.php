<?php

	class QuestionController extends BaseController {

		/**
		* Display a listing of the resource.
		*
		* @return Response
		*/
		public function index()
		{
			$question = DB::table('questions')->orderBy('id','desc')->paginate(20);
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

			return Redirect::back()->with('thanhcong','');
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
		public function destroy()
		{
			$id = Input::get('id');
			DB::table('questions')->where('id',$id)->delete();
			return Redirect::to('sys_question');
		}
		public function get_input()
		{
			$info_user = Session::get('user_profile');
			//$array = array(
			//				'first_name' => "pham",
			//				'last_name' => "duc anh",
			//				'email' => "ppducah@gmail.com",
			//			);

//			$info_user = (object) $array;
			$name = $info_user->first_name.' '.$info_user->last_name;
			$email = $info_user->email;
			$arr = array();
			$in = Input::all();
			$arr = array(
				'user' =>$name,
				'type' => $in['type'],
				'question' => $in['question'],
				'email' => $email,
			);

			return $arr;
		}


	}
