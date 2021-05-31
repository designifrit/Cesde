<?php
namespace App\Models;
use CodeIgniter\Model;
use Exception;

class ApartmentModel extends Model
{   
    function readApartment(){
        try{
            $sql = "SELECT * FROM (((apartment INNER JOIN country ON apartment.idCountry = country.idCountry)INNER JOIN city ON apartment.idCity = city.idCity) INNER JOIN user ON apartment.idUser = user.idUser)";
        }catch(Exception $error){
			print_r($error -> getMessage());
		}
		
		$apartments = $this -> db -> query($sql);   // A través de esta variable se envia los datos al http
		return $apartments -> getResult();
	}

    function addApartment($idUser, $location, $address, $idCity, $idCountry, $review, $guest, $rom, $bed, $bathroom, $value, $photo, $url){
        try{
            $sql = "INSERT INTO apartment (idUser, location, address, idCity, idCountry, date, review, guest, rom, bed, bathroom, value, photo, url) VALUES ({$idUser}, '{$location}', '{$address}', {$idCity}, {$idCountry}, NOW(), '{$review}', $guest, $rom, $bed, $bathroom, $value, '{$photo}', '{$url}')";
        }catch(Exception $error){
			print_r($error -> getMessage());
		}

        $this -> db -> query($sql);
    }

    function updateApartment($idApartment, $location, $address, $idCity, $idCountry, $review, $guest, $rom, $bed, $bathroom, $value, $photo, $url){
        try{
			$sql = "UPDATE apartment SET location='{$location}', address='{$address}', idCity={$idCity}, idCountry={$idCountry}, date=NOW(), review='{$review}', guest={$guest}, rom={$rom}, bed={$bed}, bathroom={$bathroom}, value={$value}, photo='{$photo}', url='{$url}' WHERE idApartment={$idApartment}";
		}catch(Exception $error){
			print_r($error -> getMessage());
		}

        $this -> db -> query($sql);
	}

    function deleteApartment($idApartment){
        try{
            $sql = "DELETE FROM apartment WHERE idApartment={$idApartment}";
        }catch(Exception $error){
			print_r($error -> getMessage());
		}
		
        $this -> db -> query($sql);
    }

    function infoApartment($idApartment){
        try{
            $sql = "SELECT * FROM (((apartment INNER JOIN country ON apartment.idCountry = country.idCountry)INNER JOIN city ON apartment.idCity = city.idCity) INNER JOIN user ON apartment.idUser = user.idUser) WHERE idApartment={$idApartment}";
        }catch(Exception $error){
			print_r($error -> getMessage());
		}
		
		$idApartment = $this -> db -> query($sql);
		return $idApartment -> getResult();
	}
}