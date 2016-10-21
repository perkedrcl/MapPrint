<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends BaseController
{

	public function getAdmin() {
		return View('admin');
	}

}
