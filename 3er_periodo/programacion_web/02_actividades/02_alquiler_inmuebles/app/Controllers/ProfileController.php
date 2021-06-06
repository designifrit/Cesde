<?php

namespace App\Controllers;

use App\Models\AccountModel;
use App\Models\ProfileModel;
use App\Models\CountryModel;
use App\Models\CityModel;

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

		$session = session();

		if($session -> get('role') == '1' || $session -> get('role') == '0'){
			// Muestra las Views en el orden especificado
			echo view('layouts/header');
			echo view('layouts/nav');
			echo view('profile_view', $data);
			echo view('layouts/footer');
		}else{
			return redirect() -> to(base_url('/public/forbidden'));
		}
	}

	public function deleteAccount(){
		
	}

	public function editAccount(){

		$session = session();

		if(!empty($session)){

			$accountModel = new AccountModel();
			$request = \Config\Services::request();

			$idUser = $session -> get('idUser');
			$name = $request -> getPost('name');
			$lastName = $request -> getPost('last-name');
			$idCity = $request -> getPost('city');
			$idCountry = $request -> getPost('country');
			$email = $request -> getPost('email');
			$password = $request -> getPost('password');
			$role = $request -> getPost('role');
			$description = $request -> getPost('description');

			$image = $request -> getFile('profile-photo');
			$profilePhoto = "";
			
			if($image -> isValid(0 && !$image -> hasMoved())){
				$imageName = $image -> getRandomName();

				$image -> move('./uploads/perfil/', $imageName);
				$profilePhoto = base_url().'/public/uploads/perfil/'.$imageName;
			}else if(! $image->isValid())
			{
				throw new \RuntimeException($image->getErrorString().'('.$image->getError().')');
			}
			
				$accountModel -> updateAccount($idUser, $name, $lastName, $idCity, $idCountry, $email, $password, $role, $description, $profilePhoto);
				return redirect() -> to('/public/account');
		}else{
			return redirect() -> to(base_url('/public/forbidden'));
		}
	}

	public function infoAccount(){
		$session = session();

		$countryModel = new CountryModel();
		$cityModel = new CityModel();
		
		$data['country'] = $countryModel -> orderBy('country','ASC') -> findAll();
		$data['city'] = $cityModel -> orderBy('city','ASC') -> findAll();

	if($session -> get('role') == '1' || $session -> get('role') == '0'){
		// Muestra las Views en el orden especificado
		echo view('layouts/header');
		echo view('layouts/nav');
		echo view('profile_edit_view', $data);
		echo view('layouts/footer');
	}else{
		return redirect() -> to(base_url('/public/forbidden'));
	}
}
}