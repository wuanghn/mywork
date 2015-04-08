<?php

class UsersController extends \BaseController {



	public function callApiLogin()
	{
			$criteria = array('user_email' => Input::get('email'), 'user_password' => Input::get('password'));
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, "https://api.vietnamworks.com/users/login");
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($criteria));
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_HTTPHEADER, array('CONTENT-MD5: 4c443c7e2c515d6b4b4d693c2f63434a7773226a614846733c4c4d4348', 'Content-Type: application/JSON', 'Content-Type: application/JSON'));
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
			curl_setopt($ch, CURLOPT_TIMEOUT, 36000); 

			$results = curl_exec($ch);
			$results = json_decode($results);

			return $results;
	}




	public function getLogin()
	{
			$results = $this->callApiLogin();

			if ($results->meta->code == 200 && $results->meta->message == 'OK') {
				print_r($results);
			    // save to session
			    //$this->session->set_userdata('userInfo', $results->data);

			} else {
			    // print to screen: login faile
			}
	}




	public function new_job()
	{
			//
	}



	public function getCatogary()
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

			echo "<pre>";
			print_r($results->data->categories);
			echo "</pre>";
	}




	public function getMarketing()
	{
			$criteria = array(
			    "job_title" => "",
			    "job_category" => 27,
			    "job_location" => 0,
			    "job_level" => 0,
			    "page_number" => 1
			);

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
			$results = json_decode($results);

			echo "<pre>";
			print_r($results);
			echo "</pre>";
	}



	public function postProRegis()
	{
			// proccess register
	}

}