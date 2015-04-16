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

			return View::make('searches.index',compact('ganeral_configurations','new_job','locations'));
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
							$validator = Validator::make(
							    Input::all(),
							    array(
							        'last_name' => 'required',
							        'first_name' => 'required',
							        'email' => 'required|email',

							    )
							);
							if ($validator->fails())
							{
							    //
							}else
							{
								// full data
							}
							
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



		public function viewStructure($data)
		{
				echo "<pre>";
				print_r($data);
				echo "</pre>";
		}




}