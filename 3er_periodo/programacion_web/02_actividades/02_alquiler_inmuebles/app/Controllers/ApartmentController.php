<?php

namespace App\Controllers;

// Se conecta con el Modelo para la base de datos
use App\Models\ApartmentModel;
use App\Models\CountryModel;
use App\Models\CityModel;

class ApartmentController extends BaseController
{
	public function index()
	{	
        $apartment = new ApartmentModel();	// Instancia la clase TaskModel
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

	public function create(){
		// Permite restringir o permitir contenido a través de las cookies
		// En este caso por medio del inicio de sessión del usuario
		$session = session();

		$countryModel = new CountryModel();
		$cityModel = new CityModel();
		
		$data['country'] = $countryModel -> orderBy('name_country','ASC') -> findAll();
		$data['city'] = $cityModel -> orderBy('name_city','ASC') -> findAll();

		// Muestra las Views en el orden especificado
		echo view('layouts/header');
		echo view('layouts/nav');
		echo view('create_apartment_view', $data);
		echo view('layouts/footer');
	}

	public function addApartment(){
		$apartmentModel = new ApartmentModel();	// Instancia la clase ApartmentModel
		$request = \Config\Services::request();	// Activa el servicio de web services para poder obtener los datos

		// A través de $request obtiene los datos en POST desde el formulario
		$country = $request -> getPost('country');
		$city = $request -> getPost('city');
		$name = $request -> getPost('name');
		$address = $request -> getPost('address');
		$coordinates = $request -> getPost('coordinates');
		$roms = $request -> getPost('roms');
		$value = $request -> getPost('value');
		$review = $request -> getPost('review');

		$image = $request -> getFile('featured_image');
		$imageName = $image -> getRandomName();	// Crea un nombre random para la imagen
		$imagePath = "";	// Se crea la variable para asignar la ruta de almacenamiento
		
		// Si es válida la imagen y puede ser movida
		if($image -> isValid(0 && !$image -> hasMoved())){
			$image -> move('./uploads/images/', $imageName);	// La carpeta predefinida para move() es la carpeta public
			$imagePath = base_url().'/public/uploads/images/'.$imageName;
		}
		
		$apartmentModel -> addApartment($country, $city, $name, $address, $coordinates, $roms, $imagePath, $value, $review);	// Almacenar los datos en la BD
		return redirect() -> to('/public/apartment');	// Redirigir a la View > task
	}

	public function deleteApartment(){
		$apartmentModel = new ApartmentModel();	// Instancia la clase TaskModel
		$request = \Config\Services::request();	// Activa el servicio de web services para poder obtener los datos

		$id_apartment = $request -> getGet('id');	// A través del $request obtiene el id con GET, que es enviado por el botón
		$apartmentModel -> deleteApartment($id_apartment);	// Como ya se obtuvo el $id, se elimina de la base de datos

		return redirect() -> to('/public/apartment');
	}

	public function updateApartment(){
		$apartmentModel = new ApartmentModel();	// Instancia la clase TaskModel
		$request = \Config\Services::request();	// Activa el servicio de web services para poder obtener los datos

		$id_apartment = $request -> getGet('id');	// A través del $request obtiene el id con GET, que es enviado por el botón
		$apartment = $apartmentModel -> updateApartment($id_apartment);

		echo view('layouts/header');
		echo view('layouts/nav');
		echo view('update_apartment', array("apartment" => $apartment[0]));	// Pasa el arreglo a la vista como un objeto [] > id esta en la posicion 0
		echo view('layouts/footer');
	}

	public function updateEditedApartment(){
		$apartmentModel = new ApartmentModel();	// Instancia la clase TaskModel
		$request = \Config\Services::request();	// Activa el servicio de web services para poder obtener los datos

		// A través de $request obtiene los datos
		$id_apartment = $request -> getGet('apartment');
		$country = $request -> getPost('country');
		$city = $request -> getPost('city');
		$name = $request -> getPost('name');
		$address = $request -> getPost('address');
		$coordinates = $request -> getPost('coordinates');
		$roms = $request -> getPost('roms');
		$image = $request -> getFile('featured_image');
		$value = $request -> getPost('value');
		$review = $request -> getPost('review');

		$apartmentModel -> updateEditedApartment($id_apartment, $country, $city, $name, $address, $coordinates, $roms, $image, $value, $review);	// Almacenar los datos en la BD

		return redirect() -> to('/public/apartment');
	}
}