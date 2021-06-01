<?php

namespace App\Controllers;
use App\Models\HostModel;

class HostController extends BaseController
{
	public function index()
	{	
        
	}

	public function logOut(){
        $session = session();
        $session -> destroy();
        return redirect() -> to(base_url('/public/signin'));
	}
}