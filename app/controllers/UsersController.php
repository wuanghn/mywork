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




	    public function postProccessLogin() {

	        $email = Input::get('email');
	        $password = Input::get('password');
	        // call login api

	        $criteria = array('user_email' => $email, 'user_password' => $password);
	        $ch = curl_init();
	        curl_setopt($ch, CURLOPT_URL, 'https://api.vietnamworks.com/users/login');
	        curl_setopt($ch, CURLOPT_POST, 1);
	        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($criteria));
	        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	        curl_setopt($ch, CURLOPT_HTTPHEADER, array('CONTENT-MD5: 4c443c7e2c515d6b4b4d693c2f63434a7773226a614846733c4c4d4348', 'Content-Type: application/JSON', 'Content-Type: application/JSON'));
	        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
	        curl_setopt($ch, CURLOPT_TIMEOUT, 36000); //timeout in seconds

	        $results = curl_exec($ch);
	        $results = json_decode($results);

	        if ($results->meta->code == 200 && $results->meta->message == 'OK') 
	        {
	        	$info = $results->data->profile;
	        	$info->password = $password;
	            Session::put('user_profile', $info);
	            return json_encode($info);
	        } else {
	// print to screen: login faile
	            echo 'false';
	        }
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

	public function getLogout()
	{
		Session::forget('user_profile');
		return Redirect::back();
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
			$urlRegister = 'https://api.vietnamworks.com/users/register';
			$chRegister = curl_init();
			
			$postField = array(
			    'email' => Input::get('email'),
			    'password' => Input::get('password'),
			    'firstname' => Input::get('first_name'),
			    'lastname' => Input::get('last_name'),
			    'lang' => 1 // Vietnamese
			);

			curl_setopt($chRegister, CURLOPT_URL, $urlRegister);
			curl_setopt($chRegister, CURLOPT_POST, 1);
			curl_setopt($chRegister, CURLOPT_POSTFIELDS, json_encode($postField));
			curl_setopt($chRegister, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($chRegister, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($chRegister, CURLOPT_HTTPHEADER, array(
			    'CONTENT-MD5: 4c443c7e2c515d6b4b4d693c2f63434a7773226a614846733c4c4d4348', 'Content-Type: application/JSON', 'Accept: application/JSON'));
			curl_setopt($chRegister, CURLOPT_CONNECTTIMEOUT, 0);
			curl_setopt($chRegister, CURLOPT_TIMEOUT, 36000); //timeout in seconds

			$resultsRegister = curl_exec($chRegister);
			curl_close($chRegister);
			$resultsRegister = json_decode($resultsRegister);

					
			if ($resultsRegister->meta->code == 200 && $resultsRegister->meta->message == 'Success') {
				$object = new stdClass();
				$object->email = Input::get('email');
				$object->first_name = Input::get('first_name');
				$object->last_name = Input::get('last_name');
				$object->password = Input::get('password');
				
				Session::put('user_profile',$object);

				return json_encode($object);
			}else{
				return "false";
			}
	}



	public function getCheckEmailExist()
	{
			$email = Input::get('email');
			$url = 'https://api.vietnamworks.com/users/account-status/email' . '/' . urlencode($email);
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

			$ret = '';
			if (isset($results->data)) {
			    $ret = $results->data->accountStatus;
			}

			$ret = json_encode($ret);
			echo $ret;
	}

}