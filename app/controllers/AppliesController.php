<?php

class AppliesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /applies
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$applies = Apply::all();
		return View::make('applies.index',compact('applies'));
	}



	public function postApplyMobile()
	{
		if( Input::hasFile("inputFile") )
		{

			$extension = Input::file('inputFile')->getClientOriginalExtension();

			if($extension == "pdf" || $extension == "doc" || $extension == "docx")
			{

					$data = App::make('SearchesController')->uploadCV();
					$file_name_with_full_path = realpath($data);


					$post = array(
						'file_contents' => '@' . $file_name_with_full_path,
						'job_id' => Input::get('job_id'),
						'application_subject' => 'Application for ' . Input::get('job_title'),
						'cover_letter' => '',
						'email' => Session::get('user_profile')->email,
						'password' => Session::get('password')->password,
						'first_name' => Session::get('password')->first_name,
						'last_name' => Session::get('password')->last_name,
						'lang' => '1'
					);


					$result = App::make('SearchesController')->applyJob($post);

					//$this->viewStructure($result);
					
					if ($result->meta->code == 200 && $result->meta->message == 'Applied')
					{
						// apply completed
						Apply::create($post);

						$mess = "You have successfully applied for this position. Please check your mailbox in a few minutes for confirmation";
						Session::flash('done', $mess);
						return Redirect::back();
					}else{
						// apply fail
						$mess = "Error occurred, please apply again";
						Session::flash('err', $mess);
						return Redirect::back()->withInput();
					}

			}else
			{
					$mess = "Error occurred, please apply again";
					Session::flash('err', $mess);
					return Redirect::back()->withInput();
			}
		}else
		{
			$mess = "Error occurred, please apply again";
			Session::flash('err', $mess);
			return Redirect::back()->withInput();
		}
	}







	/**
	 * Show the form for creating a new resource.
	 * GET /applies/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /applies
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /applies/{id}
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
	 * GET /applies/{id}/edit
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
	 * PUT /applies/{id}
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
	 * DELETE /applies/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}