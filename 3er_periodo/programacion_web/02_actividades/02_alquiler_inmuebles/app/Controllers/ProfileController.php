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

		echo view('layouts/header');
		echo view('layouts/nav');
		echo view('profile_view', $data);
		echo view('layouts/footer');
	}

	public function infoAccount(){
		$user = new ProfileModel();
		$request = \Config\Services::request();

		$id = $request -> getGet('id');
		$user -> deleteUser($id);

		return redirect() -> to('/public/account');
	}
}