<?php

namespace App\Controllers;
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

	public function  signUp(){
		return redirect() -> to('/public');
	}
}