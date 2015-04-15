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
			$city = DB::table('cities')->get();
			return View::make('author',array('au' =>$au, 'city' => $city));
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
			$name_lug = $this->convert_vi_to_en($input['name']);


			//upload file
			if (Input::hasFile('avatar'))
			{
				$avatar = $this->upload();
				if($avatar != false){
					$input['avatar'] = $avatar;
					$au = Author::create($input);
					$id = $au->id;
					$name_slug2 = $name_lug.$id;
					Author::where('id', $id)->update(array('name_slug' => $name_slug2));
					return  Redirect::to('sys_author');
				}
				else{
					return  Redirect::to('sys_author')->with('error','upload file không thành công');
				}
			}
			else{
				$input['avatar'] = "public/assets/img/avatar-default.jpg";
				$au = Author::create($input);
				$id = $au->id;
				$name_slug2 = $name_lug.$id;
				Author::where('id', $id)->update(array('name_slug' => $name_slug2));
				return  Redirect::to('sys_author');
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
			$name_lug = $this->convert_vi_to_en($input['name']);
			$input['name_slug'] = $name_lug.Input::get('id');
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
				'discription' =>nl2br($input['discription'],ENT_QUOTES),
				'sectors' =>$input['sectors'],
				'position' =>$input['position'],
				'location' =>$input['location'],
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

		function convert_vi_to_en($str) {
			$str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
			$str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
			$str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
			$str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
			$str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
			$str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
			$str = preg_replace("/(đ)/", 'd', $str);
			$str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $str);
			$str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
			$str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
			$str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $str);
			$str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
			$str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
			$str = preg_replace("/(Đ)/", 'D', $str);
			//$str = str_replace(" ", "-", str_replace("&*#39;","",$str));

			return strtolower(str_replace(' ', '-', $str)).'-';

		}
	}
