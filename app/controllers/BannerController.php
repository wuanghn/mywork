<?php

	class BannerController extends BaseController {

		/**
		* Display a listing of the resource.
		*
		* @return Response
		*/
		public function index()
		{
			return View::make('banner');
		}


		/**
		* Show the form for creating a new resource.
		*
		* @return Response
		*/
		public function header_blog()
		{

			$authors = DB::table('authors')->orderBy('name')->get();
			return View::make('hearder_blog', array('authors' =>$authors));
		}


		/**
		* Store a newly created resource in storage.
		*
		* @return Response
		*/
		public function store()
		{
			DB::table('banners')->truncate();
			DB::table('banners')->insert(array('link'=>Input::get('link')));
			return Redirect::to('sys_banner');
		}


		/**
		* Display the specified resource.
		*
		* @param  int  $id
		* @return Response
		*/
		public function store_header_blog()
		{
			DB::table('header_blog_home')->truncate();
			$header = array(
				'id_article' => Input::get('id_article')
			);
			DB::table('header_blog_home')->insert($header);
			return Redirect::to('sys_header_blog');
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
		public function upload_banner()
		{
			if (Input::hasFile('file')){
				$file = Input::file('file');
				$type_file = $file->getClientOriginalExtension();
				$file_name = 'Banner'.substr(number_format(time() * mt_rand(),0,'',''),0,8);
				$upload_success = $file->move('public/uploads/banner/', $file_name.'.'.$type_file);
			}
			return Redirect::to('sys_banner');
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

		function upload(){
			$file = Input::file('file');
			$type_file = $file->getClientOriginalExtension();
			$file_name = 'Banner'.substr(number_format(time() * mt_rand(),0,'',''),0,8);
			$upload_success = $file->move('uploads', $file_name.'.'.$type_file);
			if($upload_success){
				$url = 'public/uploads/banner/'.$file_name.'.'.$type_file;
				return  $url;
			}else
				return false;
		}


	}
