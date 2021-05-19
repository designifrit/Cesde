<?php

namespace App\Controllers;
class SignupController extends BaseController
{
	public function index()
	{	
		echo view('layouts/header');
		echo view('layouts/nav');
		echo view('signup_view');
		echo view('layouts/footer');
	}

	public function  signUp(){
		return redirect() -> to('/public/task');
	}
}