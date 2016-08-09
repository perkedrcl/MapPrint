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
		  	return View('index', ['response1' => $response]);
		} else {
			$email = new Email();
			$email->email = $email_post;
			$email->save();
			$response = 'Uspešno je sačuvan vaš email';
			return View('index', ['response1' => $response]);
		}
    }
    public function sendEmail(Request $request){
		$name = $request->input('name');
		$email = $request->input('email');
		$message = $request->input('message');
		$response = '';

		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$response = 'Email nije odgovarajućeg formata';
		}
		elseif (!filter_var($name, FILTER_SANITIZE_STRING)) {
			$response = 'Ime nije odgovarajućeg formata';
		}
		elseif (!filter_var($message, FILTER_SANITIZE_STRING)) {
			$response = 'Poruka nije odgovarajućeg formata';
		}

		if ($response !== '') return View('contact', ['response2' => $response]);
		else return View('contact', ['response2' => 'Uspešno ste poslali vaš email']);
    }
}
