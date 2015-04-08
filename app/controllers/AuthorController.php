<?php

	class AuthorController extends BaseController {

		/**
		* Display a listing of the resource.
		*
		* @return Response
		*/
		public function index()
		{
			$au = DB::table('authors')->orderBy('id', 'desc')->paginate(20);
			return View::make('author',array('au' =>$au));
		}


		/**
		* Show the form for creating a new resource.
		*
		* @return Response
		*/
		public function create()
		{

		}


		/**
		* Store a newly created resource in storage.
		*
		* @return Response
		*/
		public function store()
		{
			$input = $this->get_input();

			//upload file
			if (Input::hasFile('avatar'))
			{
				$avatar = $this->upload();
				if($avatar != false){
					$input['avatar'] = $avatar;
					Author::create($input);
					return  Redirect::to('sys_author');
				}
				else{
					return  Redirect::to('sys_author')->with('error','upload file không thành công');
				}
			}
		}


		/**
		* Display the specified resource.
		*
		* @param  int  $id
		* @return Response
		*/
		public function search()
		{
			$key = Input::get('key');
			$rs = Author::where('name','LIKE','%'.$key.'%')->paginate(20);;

			return View::make('author',array('au' =>$rs));
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
		public function update()
		{
			$input = $this->get_input();
			//upload file
			if (Input::hasFile('avatar'))
			{
				$avatar = $this->upload();
				if($avatar != false){
					$input['avatar'] = $avatar;
					Author::where('id',Input::get('id'))->update($input);
					return  Redirect::to('sys_author');
				}
				else{
					return  Redirect::to('sys_author')->with('error','upload file không thành công');
				}
			}
			else{//khong có chọn hình
				Author::where('id',Input::get('id'))->update($input);
				return  Redirect::to('sys_author');
			}
		}


		/**
		* Remove the specified resource from storage.
		*
		* @param  int  $id
		* @return Response
		*/
		public function destroy()
		{
			Author::where('id',Input::get('id'))->delete();
			return Redirect::to('sys_author');
		}


		public function get_input()
		{
			$arr = array();
			$input = Input::all();
			$arr = array(
				'name' =>$input['name'],
				'discription' =>$input['discription'],
				'sectors' =>$input['sectors'],
				'position' =>$input['position'],
			);
			return $arr;
		}

		function upload(){
			$file = Input::file('avatar');
			$type_file = $file->getClientOriginalExtension();
			$file_name = 'Au'.substr(number_format(time() * mt_rand(),0,'',''),0,8);
			$upload_success = $file->move('uploads', $file_name.'.'.$type_file);
			if($upload_success){
				$avatar = 'uploads/'.$file_name.'.'.$type_file;
				return  $avatar;
			}else
				return false;
		}

	}
