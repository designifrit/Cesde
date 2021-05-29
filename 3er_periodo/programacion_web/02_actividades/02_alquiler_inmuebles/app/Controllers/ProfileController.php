<?php

namespace App\Controllers;

class ProfileController extends BaseController
{
	public function index()
	{	
		echo view('layouts/header');
		echo view('layouts/nav');
		echo view('profile_view');
		echo view('layouts/footer');
	}

	public function infoAccount(){
		echo view('layouts/header');
		echo view('layouts/nav');
		echo view('profile_edit_view');
		echo view('layouts/footer');
	}
}