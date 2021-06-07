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
            $sql = "INSERT INTO `user`(`name`, `lastName`, `idCity`, `idCountry`, `email`, `password`, `role`, `description`, `profilePhoto`) VALUES ('{$name}','{$lastName}',{$idCity},{$idCountry},'{$email}','{$password}','{$role}','{$description}','{$profilePhoto}')";
        }catch(Exception $error){
			print_r($error -> getMessage());
		}

        $this -> db -> query($sql);
    }

    function updateAccount($idUser, $name, $lastName, $idCity, $idCountry, $email, $password, $role, $description, $profilePhoto){
        try{
            $sql = "UPDATE `user` SET `name`='{$name}',`lastName`='{$lastName}',`idCity`={$idCity},`idCountry`={$idCountry},`email`='{$email}',`password`='{$password}',`role`='{$role}',`description`='{$description}',`profilePhoto`='{$profilePhoto}' WHERE idUser = {$idUser}";
        }catch(Exception $error){
			print_r($error -> getMessage());
		}
		
		$idUser = $this -> db -> query($sql);
		return $idUser -> getResult();
	}

    function infoUser($idUser){
        try{
            $sql = "SELECT * FROM ((user INNER JOIN country ON user.idCountry = country.idCountry)INNER JOIN city ON user.idCity = city.idCity) WHERE idUser = {$idUser}";
        }catch(Exception $error){
			print_r($error -> getMessage());
		}
		
		$idUser = $this -> db -> query($sql);
		return $idUser -> getResult();
	}

    function deleteUser($idUser){
        try{
            $sql = "DELETE FROM user WHERE idUser={$idUser}";
        }catch(Exception $error){
			print_r($error -> getMessage());
		}
		
        $this -> db -> query($sql);
    }
}
