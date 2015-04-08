<?php

	class ArticleController extends \BaseController {

		/**
		* Display a listing of the resource.
		*
		* @return Response
		*/
		public function index()
		{
			//get all acticle
			$rs = DB::table('articles as ac')
			->leftjoin('authors as au', 'ac.id_author','=', 'au.id')
			->select('*','ac.id as id_article','au.id as id_author')
			->orderBy('ac.id', 'desc')
			->paginate(20);

			$arr_title = array();
			foreach($rs as $key){

				if($key->related !=""){
					$arr_relate = explode(',',$key->related);// 1 string
					foreach($arr_relate as $id_acticle){
						$title = Article::where('id', $id_acticle)->select('title')->get();
						if(count($title) >0)
							$arr_title[$key->id_article][] =  $title[0]->title;
						else
							$arr_title[$key->id_article][] =  "Bài viết đã bị xóa";
					}
				}
			}

			return View::make('article',array('article' => $rs, 'title' =>$arr_title));
		}


		//autocomplete tác giả
		public function auto_complete_author()
		{
			$rs = Author::where('name','LIKE','%'.Input::get('author').'%')->get();
			$data = array();
			if(count($rs) >0){
				foreach($rs as $val){
					$data[] = array(
						'label' => $val->name,
						'value' => $val->id,
					);
				}
			}

			echo json_encode($data);
		}



		//autocomplete bài viết liên quan
		public function auto_complete_acticle()
		{
			$ac = Article::where('title','LIKE','%'.Input::get('title').'%')->get();
			$data = array();
			if(count($ac) >0){
				foreach($ac as $val){
					$data[] = array(
						'label' => $val->title,
						'value' => $val->id,
					);
				}
			}
			echo json_encode($data);
		}


		/**
		* Store a newly created resource in storage.
		*
		* @return Response
		*/
		public function store()
		{
			$acticle = $this->get_input();
			$acticle['content'] = Input::get('editor1');
			if (Input::hasFile('avatar'))
			{
				$avatar = $this->upload();
				if($avatar != false){
					$acticle['avatar_article'] = $avatar;
					Article::create($acticle);
					return  Redirect::to('sys_article');
				}
				else{
					return  Redirect::to('sys_article')->with('error','upload file không thành công');
				}
			}
			else{//khong có chọn hình
				Article::create($acticle);
				return Redirect::to('sys_article');
			}
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
			$acticle = $this->get_input();
			$id_acticle = Input::get('id_article');
			$acticle['content'] = Input::get('editor2');
			if (Input::hasFile('avatar'))
			{
				$avatar = $this->upload();
				if($avatar != false){
					$acticle['avatar_article'] = $avatar;
					Article::where('id',$id_acticle)->update($acticle);
					return  Redirect::to('sys_article');
				}
				else{
					return  Redirect::to('sys_article')->with('error','upload file không thành công');
				}
			}
			else{//khong có chọn hình
				Article::where('id',$id_acticle)->update($acticle);
				return Redirect::to('sys_article');
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
			Article::where('id',Input::get('id'))->delete();
			return Redirect::to('sys_article');
		}

		public function get_input()
		{
			$input = Input::all();

			$arr = array(
				'id_author' => $input['id_author'],
				'title' => $input['title'],
				'related' => $input['id_acticles'],
			);
			return $arr;
		}

		function upload(){
			$file = Input::file('avatar');
			$type_file = $file->getClientOriginalExtension();
			$file_name = 'Arti'.substr(number_format(time() * mt_rand(),0,'',''),0,8);
			$upload_success = $file->move('uploads', $file_name.'.'.$type_file);
			if($upload_success){
				$avatar = 'uploads/'.$file_name.'.'.$type_file;
				return  $avatar;
			}else
				return false;
		}


	}
