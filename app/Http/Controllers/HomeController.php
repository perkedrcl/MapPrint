<?php
namespace App\Http\Controllers;
use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Subscriber;
use App\Models\Story;

class HomeController extends BaseController
{
	private function getHostMail() {
		return 'szrmapprint@gmail.com';
	}
	public function index() {
		$news = Story::orderBy('added_on', 'desc')->limit(3)->get();
		return View('index', ['news' => $news]);
	}
	public function getAbout() {
		$news = Story::orderBy('added_on', 'desc')->limit(3)->get();
		return View('about', ['news' => $news]);
	}
	public function getServices() {
		$news = Story::orderBy('added_on', 'desc')->limit(3)->get();
		return View('services', ['news' => $news]);
	}
	public function getContact() {
		$news = Story::orderBy('added_on', 'desc')->limit(3)->get();
		return View('contact', ['news' => $news]);
	}
    public function subscribing(Request $request) {
    	try {
    		$email = $request->input('email');
    		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) throw new \Exception("Email nije validan", 1);
    		$subscriber = new Subscriber();
			$subscriber->email = $email;
			$subscriber->save();
			$response = 'Uspešno je sačuvan vaš email';
			return View('index', ['response1' => $response]);
    	} catch (\Exception $e) {
    		if ($e->getCode() === '23000') $response = 'U bazi već potosji email';
    		else $response = $e->getMessage();
    		return View('index'
    			, ['response1' => $response]);
    	}
    }
    public function question(Request $request){
		$name = $request->input('name');
		$email = $request->input('mail');
		$message = $request->input('msg');
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
		else {
			$to = self::getHostMail();
			$response = mail($email, $email, $message);
			if ($response === true) return View('contact', ['response2' => 'Uspešno ste poslali vaš email']);
			else return View('contact', ['response2' => $response]);
		}
    }
}
