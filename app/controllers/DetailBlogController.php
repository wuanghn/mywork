<?php

	class DetailBlogController extends BaseController {

		/**
		* Display a listing of the resource.
		*
		* @return Response
		*/
		public function index()
		{
			$id = Input::get('id');
			$article = DB::table('articles as ar')
			->leftjoin('authors as au', 'au.id', '=', 'ar.id_author')
			->select('*', 'au.id as id_au', 'au.id as id_au')
			->where('ar.id',$id)->get();

			//relate
			$arr_relate = array();
			if($article[0]->related !=""){
				$id_article_relate = explode(',', $article[0]->related);

				foreach($id_article_relate as $key){
					$arr_relate[] = DB::table('articles')->where('id',$key)->get();
				}
			}

			//lấy ra other articel cua author
			$id_author = $article[0]->id_author;
			$arr_other = array();
			$other = DB::table('articles')->where('id_author',$id_author)
			->orderBy('id', 'desc')
			->limit(2)
			->get();

			return View::make('blog_detail',array('article' =>$article, 'relates' => $arr_relate, 'others' =>$other));
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
