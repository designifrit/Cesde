<?php
namespace App\Models;
use CodeIgniter\Model;
use Exception;

class HomeModel extends Model
{   
    function readApartment(){
        try{
            $sql = "SELECT * FROM (((apartment INNER JOIN country ON apartment.idCountry = country.idCountry)INNER JOIN city ON apartment.idCity = city.idCity) INNER JOIN user ON apartment.idUser = user.idUser) WHERE date BETWEEN '2020-03-20 15:00:00' AND NOW() ORDER BY date DESC LIMIT 4";
        }catch(Exception $error){
			print_r($error -> getMessage());
		}
		
		$apartments = $this -> db -> query($sql);   // A través de esta variable se envia los datos al http
		return $apartments -> getResult();
	}
}