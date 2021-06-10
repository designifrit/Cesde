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
		$reservation = new ReservationModel();
		$request = \Config\Services::request();

		$idReservation = $request -> getGet('id');
		$reservation -> deleteApartment($idReservation);
		var_dump($idReservation);
		// return redirect() -> to('/public/reservation');
	}
}