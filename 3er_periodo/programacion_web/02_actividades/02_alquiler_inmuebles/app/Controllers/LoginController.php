<?php

namespace App\Controllers;

class LoginController extends BaseController
{
	public function index()
	{	
		echo view('layouts/header');
		echo view('layouts/nav');
		echo view('login_view');
		echo view('layouts/footer');
	}

	public function signIn(){
		$session = session();
		$newdata = [
			'username'  => 'johndoe',
			'email'     => 'johndoe@some-site.com',
			'logged_in' => TRUE
	];
		$session -> set($newdata);
		return redirect() -> to('/public/task/create');
	}
}