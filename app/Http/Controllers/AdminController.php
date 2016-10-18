<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\admin;

class AdminController extends BaseController
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
	

}
