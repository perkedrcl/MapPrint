<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Email;

class HomeController extends BaseController
{
	public function index() {
		return View('index');
	}

	public function getAbout() {
		return View('about');
	}

	public function getServices() {
		return View('services');
	}

	public function getContact() {
		return View('contact');
	}

    public function checkEmail(Request $request) {
		$email_post = $request->input('email');

		if (!filter_var($email_post, FILTER_VALIDATE_EMAIL)) {
			$response = 'Email nije validan';
		  	return View('index', ['response' => $response]);
		} else {
			$email = new Email();
			$email->email = $email_post;
			$email->save();
			$response = 'Uspešno je sačuvan vaš email';
			return View('index', ['response' => $response]);
		}
    }
    public function sendEmail(Request $request){

    }
}
