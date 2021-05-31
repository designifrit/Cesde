<?php

namespace App\Controllers;

class SigninController extends BaseController
{	
	public function __construct()
	{
		helper("form");
	}

	public function index()
	{	
		$validation =  \Config\Services::validation();

		$data = [];

		$rules = [
			'email' => 'required',
			'password' => 'required'
		];


		if($this -> request -> getMethod() == 'post'){
			
				if($this -> validate($rules)){
					echo "Listo para guardar";
				}else{
					$data['validation'] = $this -> validator;
				}
			}

		echo view('layouts/header');
		echo view('layouts/nav');
		return view('signin_view', $data);
		echo view('layouts/footer');
	}
		

	// public function signIn(){
	// 	$session = session();
	// 	$newdata = [
	// 		'username'  => 'johndoe',
	// 		'email'     => 'johndoe@some-site.com',
	// 		'logged_in' => TRUE
	// 	];
	// 	$session -> set($newdata);
	// 	return redirect() -> to('/public/profile_view');
	// }
}