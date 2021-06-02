<?php
namespace App\Models;
use CodeIgniter\Model;
use Exception;

class AccountModel extends Model
{   
    public function loginAccount($email, $password){
        try{
            $sql = "SELECT * FROM ((user INNER JOIN country ON user.idCountry = country.idCountry)INNER JOIN city ON user.idCity = city.idCity) WHERE email = '{$email}' AND password = '{$password}'";
        }catch(Exception $error){
            var_dump($error -> getMessage());
        }

        $userLogin = $this -> db -> query($sql);
        return $userLogin -> getResult();
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
