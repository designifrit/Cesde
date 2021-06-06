<?php

namespace App\Controllers;

class ReservationController extends BaseController
{
	public function index()
	{	
		$session = session();
		
		if(!empty($session)){
			echo view('layouts/header');
			echo view('layouts/nav');
			echo view('reservation_view');
			echo view('layouts/footer');
		}else{
			return redirect() -> to(base_url('/public/forbidden'));
		}
	}

	public function reservationEdit(){

	}
}