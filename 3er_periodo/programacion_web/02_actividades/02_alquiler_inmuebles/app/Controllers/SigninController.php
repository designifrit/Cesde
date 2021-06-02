<?php

namespace App\Controllers;
use App\Models\AccountModel;

class SigninController extends BaseController
{	
	public function index()
	{	
		echo view('layouts/header');
		echo view('layouts/nav');
		echo view('signin_view');
		echo view('layouts/footer');
	}
		

	public function signIn(){
		$request = \Config\Services::request();
		$email = $request -> getPost('email');
		$password = $request -> getPost('password');

		$login = new AccountModel();

		$dataLogin = $login -> loginAccount($email, $password);

		foreach($dataLogin as $row){
			if($email == $row -> email && $password == $row -> password){
				$dataLogin = [
					"idUser" => $row -> idUser,
					"name" => $row -> name,
					"lastName" => $row -> lastName,
					"idCity" => $row -> idCity,
					"idCountry" => $row -> idCountry,
					"email" => $row -> email,
					"password" => $row -> password,
					"role" => $row -> role,
					"description" => $row -> description,
					"profilePhoto" => $row -> profilePhoto
				];

				$session = session();
				$session -> set($dataLogin);
				
				if(!$email == $row -> email || !$password == $row -> password){
					echo "<h5>Correo o contraseña no válido</h5>";
					break;
				}else{
					if($rol = $row -> role ==  1){
						return redirect() -> to('/public/account');
					}else if($rol = $row -> role ==  0){
						return redirect() -> to('/public/account');
					}
				}
			}
		}
	}
}