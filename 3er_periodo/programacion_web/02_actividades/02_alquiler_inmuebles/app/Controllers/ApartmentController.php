<?php

namespace App\Controllers;

// Se conecta con el Modelo para la base de datos
use App\Models\ApartmentModel;
use App\Models\CountryModel;
use App\Models\CityModel;
use Exception;

class ApartmentController extends BaseController
{
	public function index()
	{	
        $apartment = new ApartmentModel();	// Instancia la clase ApartmentModel
        $resultApartment = $apartment -> readApartment();	// Lee los datos o Apartament de la BD

		// Trae los datos a través de un Array asociativo
		$data = array(
			"apartments" => $resultApartment
		);
		
		// Muestra las Views en el orden especificado
		echo view('layouts/header');
		echo view('layouts/nav');
		echo view('apartment_view', $data);
		echo view('layouts/footer');
	}

	public function infoApartment(){
		$apartmentModel = new ApartmentModel();	// Instancia la clase TaskModel
		$request = \Config\Services::request();	// Activa el servicio de web services para poder obtener los datos

		$idApartment = $request -> getGet('id');	// A través del $request obtiene el id con GET, que es enviado por el botón
		$apartment = $apartmentModel -> infoApartment($idApartment);

		echo view('layouts/header');
		echo view('layouts/nav');
		echo view('apartment_update_view', array("apartment" => $apartment[0]));	// Pasa el arreglo a la vista como un objeto [] > id esta en la posicion 0
		echo view('layouts/footer');
	}

	public function createApartment(){
		// Permite restringir o permitir contenido a través de las cookies
		// En este caso por medio del inicio de sessión del usuario
		// $session = session();

		$countryModel = new CountryModel();
		$cityModel = new CityModel();
		
		$data['country'] = $countryModel -> orderBy('country','ASC') -> findAll();
		$data['city'] = $cityModel -> orderBy('city','ASC') -> findAll();

		// Muestra las Views en el orden especificado
		echo view('layouts/header');
		echo view('layouts/nav');
		echo view('apartment_create_view', $data);
		echo view('layouts/footer');
	}

	public function addApartment(){
		$apartmentModel = new ApartmentModel();	// Instancia la clase ApartmentModel
		$request = \Config\Services::request();	// Activa el servicio de web services para poder obtener los datos

		// A través de $request obtiene los datos en POST desde el formulario
		$idUser = $request -> getPost('idUser');
		$location = $request -> getPost('location');
		$address = $request -> getPost('address');
		$idCity = $request -> getPost('city');
		$idCountry = $request -> getPost('country');
		$review = $request -> getPost('review');
		$guest = $request -> getPost('guest');
		$rom = $request -> getPost('rom');
		$bed = $request -> getPost('bed');
		$bathroom = $request -> getPost('bathroom');
		$value = $request -> getPost('value');
		$url = $request -> getPost('url');

		$image = $request -> getFile('featured_image');
		$photo = "";	// Se crea la variable para asignar la ruta de almacenamiento
		
		// Si es válida la imagen y puede ser movida
		if($image -> isValid(0 && !$image -> hasMoved())){
			$imageName = $image -> getRandomName();	// Crea un nombre random para la imagen
			$image -> move('./uploads/images/', $imageName);	// La carpeta predefinida para move() es la carpeta public
			$photo = base_url().'/public/uploads/images/'.$imageName;
		}else if(! $image->isValid())
		{
				throw new \RuntimeException($image->getErrorString().'('.$image->getError().')');
		}
		
		$apartmentModel -> addApartment($idUser, $location, $address, $idCity, $idCountry, $review, $guest, $rom, $bed, $bathroom, $value, $photo, $url);	// Almacenar los datos en la BD

		return redirect() -> to('/public/apartment');	// Redirigir a la View
	}

	public function deleteApartment(){
		$apartmentModel = new ApartmentModel();	// Instancia la clase TaskModel
		$request = \Config\Services::request();	// Activa el servicio de web services para poder obtener los datos

		$idApartment = $request -> getGet('id');	// A través del $request obtiene el id con GET, que es enviado por el botón
		$apartmentModel -> deleteApartment($idApartment);	// Como ya se obtuvo el $id, se elimina de la base de datos

		return redirect() -> to('/public/apartment');
	}

	public function updateApartment(){
		$apartmentModel = new ApartmentModel();	// Instancia la clase TaskModel
		$request = \Config\Services::request();	// Activa el servicio de web services para poder obtener los datos

		// A través de $request obtiene los datos en POST desde el formulario
		$idApartment = $request -> getGet('id');
		$location = $request -> getPost('location');
		$address = $request -> getPost('address');
		$idCity = $request -> getPost('city');
		$idCountry = $request -> getPost('country');
		$review = $request -> getPost('review');
		$guest = $request -> getPost('guest');
		$rom = $request -> getPost('rom');
		$bed = $request -> getPost('bed');
		$bathroom = $request -> getPost('bathroom');
		$value = $request -> getPost('value');
		$url = $request -> getPost('url');

		$image = $request -> getFile('featured_image');
		$photo = "";	// Se crea la variable para asignar la ruta de almacenamiento
		
		// Si es válida la imagen y puede ser movida
		if($image -> isValid(0 && !$image -> hasMoved())){
			// $imageName = $image -> getRandomName();	// Crea un nombre random para la imagen
			$image -> move('./uploads/images/');	// La carpeta predefinida para move() es la carpeta public
			$photo = base_url().'/public/uploads/images/';
		}else if(! $image->isValid())
		{
				throw new \RuntimeException($image->getErrorString().'('.$image->getError().')');
		}
		
		$apartmentModel -> updateApartment($idApartment, $location, $address, $idCity, $idCountry, $review, $guest, $rom, $bed, $bathroom, $value, $photo, $url);	// Almacenar los datos en la BD

		return redirect() -> to('/public/apartment');
	}

	public function detailApartmet(){
		$apartmentModel = new ApartmentModel();	// Instancia la clase TaskModel
		$request = \Config\Services::request();	// Activa el servicio de web services para poder obtener los datos

		$idApartment = $request -> getGet('id');	// A través del $request obtiene el id con GET, que es enviado por el botón
		$apartment = $apartmentModel -> infoApartment($idApartment);

		echo view('layouts/header');
		echo view('layouts/nav');
		echo view('apartment_detail_view', array("apartment" => $apartment[0]));
		echo view('layouts/footer');
	}
}