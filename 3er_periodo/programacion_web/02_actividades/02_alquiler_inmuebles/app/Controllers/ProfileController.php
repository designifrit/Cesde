<?php

namespace App\Controllers;
use App\Models\ProfileModel;

class ProfileController extends BaseController
{
	public function index()
	{	
		$user = new ProfileModel();
		$user -> readUser();
		$readUser = $user -> readUser();

		$data = array(
			"userLogin" => $readUser,
		);

		if(session('role') == 1){
			// Muestra las Views en el orden especificado
			echo view('layouts/header');
			echo view('layouts/nav');
			echo view('profile_view', $data);
			echo view('layouts/footer');
		}else{
			return redirect() -> to(base_url('/public/forbidden'));
		}
	}

	public function infoAccount(){
		$user = new ProfileModel();
		$request = \Config\Services::request();

		$id = $request -> getGet('id');
		$user -> deleteUser($id);

		return redirect() -> to('/public/account');
	}

	public function editAccount(){


		if(session('role') == 1){
			// Muestra las Views en el orden especificado
			echo view('layouts/header');
			echo view('layouts/nav');
			echo view('profile_edit_view');
			echo view('layouts/footer');
		}else{
			return redirect() -> to(base_url('/public/forbidden'));
		}
	}
}