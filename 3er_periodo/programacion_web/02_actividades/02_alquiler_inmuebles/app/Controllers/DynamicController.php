<?php
namespace App\Controllers;
use App\Models\CountryModel;
use App\Models\CityModel;

class DynamicController extends BaseController{
    function index(){
        echo view('layouts/header');
		echo view('layouts/nav');

        $countryModel = new CountryModel();
        $data['countries'] = $countryModel -> orderBy('name_country','ASC') -> findAll();
        return view('signup_view', $data);

        echo view('layouts/footer');
    }

    function action(){
        if($this -> request -> getVar('action')){

        }
    }
}
?>