<?php

	class BannerHomeController extends BaseController {

		/**
		* Display a listing of the resource.
		*
		* @return Response
		*/
		public function index()
		{

			$rs = DB::table('banner_home')->get();
			return View::make('banner_home', array('bans'=>$rs));
		}



		/**
		* Store a newly created resource in storage.
		*
		* @return Response
		*/
		public function store()
		{
			DB::table('banner_home')->truncate();
			DB::table('banner_home')->insert(array('link'=>Input::get('link')));
			return Redirect::to('sys_banner_home');
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
				$file_name = 'Banner_home'.substr(number_format(time() * mt_rand(),0,'',''),0,8);
				$upload_success = $file->move('public/uploads/banner/', $file_name.'.'.$type_file);
			}
			return Redirect::to('sys_banner_home');
		}


		/**
		* Remove the specified resource from storage.
		*
		* @param  int  $id
		* @return Response
		*/
		public function destroy()
		{
			$basedir = "public/uploads/banner";
			$file_to_delete = $_REQUEST["file"];

			$path = $basedir."/".$file_to_delete;
			unlink($path);

			return Redirect::to('sys_banner_home');
		}


	}
