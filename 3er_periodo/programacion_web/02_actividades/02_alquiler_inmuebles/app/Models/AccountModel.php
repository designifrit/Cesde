<?php
namespace App\Models;
use CodeIgniter\Model;
use Exception;

class AccountModel extends Model
{   
    public function readAccount(){
        try{
            $sql = "SELECT idUser, name, lastName, idCity, idCountry, email, password, role, description, profilePhoto FROM user WHERE idUser = 1";
        }catch(Exception $error){
            var_dump($error -> getMessage());
        }

        $this -> db -> query($sql);
    }

    public function createAccount($name, $lastName, $idCity, $idCountry, $email, $password, $role, $description, $profilePhoto){
        try{
            $sql = "INSERT INTO `user`(`name`, `lastName`, `idCity`, `idCountry`, `email`, `password`, `role`, `description`, `profilePhoto`) VALUES ('{$name}','{$lastName}',{$idCity},{$idCountry},'{$email}','{$password}',{$role},'{$description}','{$profilePhoto}')";
        }catch(Exception $error){
			print_r($error -> getMessage());
		}

        $this -> db -> query($sql);
    }
}