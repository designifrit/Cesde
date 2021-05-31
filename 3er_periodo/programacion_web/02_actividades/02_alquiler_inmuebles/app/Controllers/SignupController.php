<?php

namespace App\Controllers;
use App\Models\AccountModel;
use App\Models\CountryModel;
use App\Models\CityModel;
class SignupController extends BaseController
{
	public function index()
	{	
		$countryModel = new CountryModel();
		$cityModel = new CityModel();

		$data['country'] = $countryModel -> orderBy('country','ASC') -> findAll();
		$data['city'] = $cityModel -> orderBy('city','ASC') -> findAll();

		echo view('layouts/header');
		echo view('layouts/nav');
		echo view('signup_view', $data);
		echo view('layouts/footer');
	}

	public function signUp(){
		$accountModel = new AccountModel();
		$request = \Config\Services::request();

		$name = $request -> getPost('name');
		$lastName = $request -> getPost('last-name');
		$email = $request -> getPost('email');
		$password = $request -> getPost('password');
		$idCountry = $request -> getPost('country');
		$idCity = $request -> getPost('city');
		$description = $request -> getPost('description');
		$role = $request -> getPost('role');
		
		$photo = $request -> getFile('profile-photo');
		$imageName = $photo -> getRandomName();	// Crea un nombre random para la imagen
		$profilePhoto = "";

		if($photo -> isValid(0 && !$photo -> hasMoved())){
			$photo -> move('./uploads/perfil/', $imageName);	// La carpeta predefinida para move() es la carpeta public
			$profilePhoto = base_url().'/public/uploads/perfil/'.$imageName;
		}else if(! $photo->isValid())
		{
				throw new \RuntimeException($photo->getErrorString().'('.$photo->getError().')');
		}

		$accountModel -> createAccount($name, $lastName, $idCity, $idCountry, $email, $password, $role, $description, $profilePhoto);

		return redirect() -> to('/public');
	}
}