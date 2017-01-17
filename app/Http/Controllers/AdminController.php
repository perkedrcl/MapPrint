<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Models\Subscriber;
use App\Models\Letter;

class AdminController extends BaseController
{

	private function getHostMail() {
		return 'mapprintszr@gmail.com';
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


    //	$host_mail = self::getHostMail();
    	$header = 	'From: '.$host_mail."\r\n".
		    		'Reply-To: '.$host_mail;

		$subscribers_email = Subscriber::get(['email'])->toArray();

		$email_to = '';

		foreach ($subscribers_email as $sub_email) {
			$email_to = $email_to.' '.$sub_email['email'].',';
		}
	

	$email_to = rtrim($email_to, ",");
	
	mail($email_to, $subject, $text, $header);
	
	return redirect('admin');
   }

   public function read(Request $request) {
    	$subject = $request->input('subject');
    	$text = $request->input('text');

		$subscribers_email = Subscriber::get(['email'])->toArray();

		$email_to = '';

		foreach ($subscribers_email as $sub_email) {
			$email_to = $email_to.' '.$sub_email['email'].',';
		}
		
		var_dump($subscribers_email);
	}

	public function saveNews(Request $request){
		$headline = $request->input('headline');
    	$letter = new Letter();
		$letter->headline = $headline;
		$letter->save();
	}
	


}