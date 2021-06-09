<?php

namespace App\Controllers;

use App\Models\ReservationModel;

class ReservationController extends BaseController
{
	public function index()
	{	
		$reservation = new ReservationModel();
		$session = session();
		
		$idUser = $session -> get('idUser');
		$resultReservation = $reservation -> readReservation($idUser);

		$data = array(
			"reservation" => $resultReservation,
		);

		if(!empty($session)){
			echo view('layouts/header');
			echo view('layouts/nav');
			echo view('reservation_view', $data);
			echo view('layouts/footer');
		}else{
			return redirect() -> to(base_url('/public/forbidden'));
		}
	}

	public function deleteReservation(){
		$reservation = new ReservationModel();	// Instancia la clase
		$request = \Config\Services::request();	// Activa el servicio de web services para poder obtener los datos

		$idReservation = $request -> getGet('id');	// A través del $request obtiene el id con GET, que es enviado por el botón
		$reservation -> deleteApartment($idReservation);	// Como ya se obtuvo el $id, se elimina de la base de datos

		return redirect() -> to('/public/apartment');
	}
}