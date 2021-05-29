<?php

namespace App\Controllers;

class ReservationController extends BaseController
{
	public function index()
	{	
		echo view('layouts/header');
		echo view('layouts/nav');
		echo view('reservation_view');
		echo view('layouts/footer');
	}

	public function reservationEdit(){

	}
}