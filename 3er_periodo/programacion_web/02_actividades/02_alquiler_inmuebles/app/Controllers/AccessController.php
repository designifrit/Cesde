<?php

namespace App\Controllers;

// Se conecta con el Modelo para la base de datos

class AccessController extends BaseController
{
    public function index(){
        echo view('layouts/header');
        echo view('Access_view');
    }
}