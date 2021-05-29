<?php

namespace App\Controllers;
use App\Models\HomeModel;
class Home extends BaseController
{
	public function index()
	{	
		$apartment = new HomeModel();	// Instancia la clase ApartmentModel
        $resultApartment = $apartment -> readApartment();	// Lee los datos o Apartament de la BD

		// Trae los datos a través de un Array asociativo
		$data = array(
			"apartments" => $resultApartment
		);

		echo view('layouts/header');
		echo view('layouts/nav');
		echo view('home', $data);
		echo view('layouts/footer');
	}
}
