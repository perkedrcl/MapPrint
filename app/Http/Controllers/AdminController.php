<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Models\Subscriber;
use App\Models\Story;

class AdminController extends BaseController
{

	private function getHostMail() {
		return 'mapprintszr@gmail.com';
	}

	private function getExcerptLimit() {
		return 50;
	}

	public function getAdmin() {
		if (isset($_SESSION['current_admin'])) {
			return View('admin');
		} else {
			return View('admin_login');
		}
	}

	public function adminLogin(Request $request) {
		$username = $request->input('username');
		$password = $request->input('password');
		$admin = Admin::where('username', '=', $username)->first();
		if (empty($admin)) throw new \Exception("Admin nije pronadjen", 1);
		if (Hash::check($password.$admin->password_salt, $admin->password)) $_SESSION['current_admin'] = $admin->id;
		return redirect('admin');
	}

	public function adminLogout() {
		unsset($_SESSION['current_admin']);
		return redirect('index');
	}


    public function sendEmail(Request $request) {
    	$subject = $request->input('subject');
    	$text = $request->input('text');

    	$host_mail = self::getHostMail();
    	$header = 	'From: '.$host_mail."\r\n".
		    		'Reply-To: '.$host_mail;

		$subscribers_email = Subscriber::get(['email'])->toArray();

		$email_to = '';

		foreach ($subscribers_email as $sub_email) {
			$email_to = $email_to.$sub_email['email'].', ';
		}
	
		$email_to = rtrim($email_to, ", ");
		
		mail($email_to, $subject, $text, $header);
		
		return redirect('admin');
   }

   public function readSubs() {
   		if (isset($_SESSION['current_admin'])) {
			$subscribers_emails = Subscriber::get(['email']);

			return view('readSubs', ['emails' => $subscribers_emails]);		
			//var_dump($subscribers_email); var_dump se samo koristi radi debagovanja koda nemoj tako da 
			//ispisujes promenljive!!!
		} else {
			return View('admin_login');
		}
	}

	public function saveNews(Request $request) {
		if (isset($_SESSION['current_admin'])) {
			$headline = $request->input('headline');
			$text = $request->input('story');

			$excerpt_limit = self::getExcerptLimit();
			$excerpt = substr($text, 0, $excerpt_limit);
			if (strrpos($excerpt, '.') !== false) $excerpt = substr($excerpt, 0, strrpos($excerpt, '.') + 1);
			if (strlen($text) > $excerpt_limit) $excerpt .=' ...';

			//Kreira se objekat 
	    	$story = new Story();
			$story->headline = $headline;
			$story->story_text = $text;
			$story->excerpt = $excerpt;
			$story->save();

			return redirect('admin');
		} else {
			return View('admin_login');
		}
	}
}
