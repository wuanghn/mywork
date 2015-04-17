<?php


/*


		Name: Controller Search
		Author: Wa
		Date: 01/04/2015


*/


class SearchesController extends \BaseController {






	public function getIndex()
	{
			$ganeral_configurations = $this->getGeneralConfigurations();


			$locations = $ganeral_configurations->locations;
			$job_levels = $ganeral_configurations->job_levels;
			$degree = $ganeral_configurations->degree;

			$options = [

					"job_category"=>27,
					"page_number"=>0
			];
			$new_job = $this->getResultSearch($options);

			//modifide by duc anh 4/17- 2:55 PM

			//get bài viết
			$article = DB::table('hot_story as hot')
			->join('articles as ar', 'ar.id','=', 'hot.id_article')
			->leftjoin('authors as au', 'ar.id_author', '=', 'au.id')
			->get();


			return View::make('searches.index',compact('ganeral_configurations','new_job','locations','article'));
	}






	public function getStore()
	{
			$ganeral_configurations = $this->getGeneralConfigurations();

			$locations = $ganeral_configurations->locations;

			$result = $this->getResultSearch(Input::except('_token'));

			//$details = $this->getDetailJobByJobId($result);

			//$this->viewStructure($details);

			return View::make('searches.show',compact('result','locations','ganeral_configurations'));

			//return $this->viewStructure($result->data->jobs);
	}





	public function getDetail()
	{
			$job = $this->getDetailJobApi(Input::get('id_job'));
			return View::make('searches.detail',compact('job'));
	}




	public function postApply()
		{
				if( Input::hasFile("inputFile") )
				{

					$extension = Input::file('inputFile')->getClientOriginalExtension();

					if($extension == "pdf" || $extension == "doc" || $extension == "docx")
					{
							$data = $this->uploadCV();
							$file_name_with_full_path = realpath($data);


							$post = array(
								'file_contents' => '@' . $file_name_with_full_path,
								'job_id' => Input::get('job_id'),
								'application_subject' => 'Application for ' . Input::get('job_title'),
								'cover_letter' => '',
								'email' => Input::get('email'),
								'password' => Input::get('password'),
								'first_name' => Input::get('first_name'),
								'last_name' => Input::get('last_name'),
								'lang' => '1'
							);


							$result = $this->applyJob($post);

							$this->viewStructure($result);

					}else
					{
							return Redirect::back();
					}
				}else
				{
					return Redirect::back();
				}

		}







	/* FUNCTION CALL */

		// API get GENERAL CONFIGURATIONS
		public function getGeneralConfigurations()
		{
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, "https://api.vietnamworks.com/general/configuration");
				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_HTTPHEADER, array(
					'CONTENT-MD5: 8982065e30ea02cf02e93a83824cf65b7de1e69545ce8bed4f2bb3c98a862b70',
					'Content-Type: application/JSON', 'Accept: application/JSON'));
				curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
				curl_setopt($ch, CURLOPT_TIMEOUT, 36000); //timeout in seconds
				$results = curl_exec($ch);
				$results = json_decode($results);
				curl_close($ch);

				return $results->data;
		}






		protected function applyJob($data)
		{
			   $url = 'https://api.vietnamworks.com/jobs/applyAttach';
			   $apiKey = '8982065e30ea02cf02e93a83824cf65b7de1e69545ce8bed4f2bb3c98a862b70';

			   $ch = curl_init();
			   curl_setopt($ch, CURLOPT_URL, $url);
			   curl_setopt($ch, CURLOPT_POST, 1);
			   curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
			   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			   curl_setopt($ch, CURLOPT_HTTPHEADER, array(
				   'CONTENT-MD5: ' . $apiKey,
				   'Content-Type: multipart/form-data'
			   ));
			   $result = curl_exec($ch);
			   $results = json_decode($result);
			   $info = curl_getinfo($ch);

			   curl_close($ch);
			   return $results;
		}






		public function getDetailJobApi($jobId)
		{
				$url = 'https://api.vietnamworks.com/jobs/view' . '/job_id/' . $jobId;

				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, $url);
				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_HTTPHEADER, array(
					'CONTENT-MD5: 4c443c7e2c515d6b4b4d693c2f63434a7773226a614846733c4c4d4348', 'Content-Type: application/JSON', 'Accept: application/JSON'));
				curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
				curl_setopt($ch, CURLOPT_TIMEOUT, 36000); //timeout in seconds

				$results = curl_exec($ch);
				$results = json_decode($results);

				return $results;
		}





		public function getDetailJobByJobId($results)
		{
				$return = [];
				foreach ($results->data->jobs as $list_job)
				{
						$return[] = $this->getDetailJobApi($list_job->job_id);
				}

				return $return;
		}







		// API GET RESULT SEARCH
		public function getResultSearch($criteria)
		{
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, "https://api.vietnamworks.com/jobs/search");
				curl_setopt($ch, CURLOPT_POST, 1);
				curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($criteria));

				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_HTTPHEADER, array(
					'CONTENT-MD5: 4c443c7e2c515d6b4b4d693c2f63434a7773226a614846733c4c4d4348', 'Content-Type: application/JSON', 'Accept: application/JSON'));
				curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
				curl_setopt($ch, CURLOPT_TIMEOUT, 36000); //timeout in seconds
				$results = curl_exec($ch);
				return json_decode($results);

		}




		function uploadCV()
		{
					$file = Input::file('inputFile');
					$type_file = $file->getClientOriginalExtension();
					$file_name = substr(number_format(time() * mt_rand(),0,'',''),0,8);


					$upload_success = $file->move('uploads/CV/', $file_name.'.'.$type_file);
					if($upload_success){
						$avatar = 'uploads/CV/'.$file_name.'.'.$type_file;
						return  $avatar;
					}else
						return false;
		}




		public function viewStructure($data)
		{
				echo "<pre>";
				print_r($data);
				echo "</pre>";
		}




}