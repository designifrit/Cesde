<?php
namespace App\Models;
use CodeIgniter\Model;
class ApartmentModel extends Model
{   
    function readApartment(){
		$sql = "SELECT * FROM ((apartment INNER JOIN country ON apartment.id_country = country.id_country) INNER JOIN city ON apartment.id_city = city.id_city)";
		$apartments = $this -> db -> query($sql);   // A través de esta variable se envia los datos al http
		return $apartments -> getResult();
	}

    function addApartment($country, $city, $name, $address, $coordinates, $roms, $id_image, $value, $review){
        $sql = "INSERT INTO apartment (id_country, id_city, name, address, coordinates, roms, id_image, value, review) VALUES ({$country}, {$city}, '{$name}', '{$address}','{$coordinates}', {$roms},'{$id_image}', {$value}, '{$review}')";
        $this -> db -> query($sql);
    }

    function updateApartment($id_apartment){
		$sql = "SELECT * FROM ((apartment INNER JOIN country ON apartment.id_country = country.id_country) INNER JOIN city ON apartment.id_city = city.id_city) WHERE id_apartment={$id_apartment}";
		$id_apartment = $this -> db -> query($sql);
		return $id_apartment -> getResult();
	}

    function updateEditedApartment($id_apartment, $country, $city, $name, $address, $coordinates, $roms, $id_image, $value, $review){
		$sql = "UPDATE apartment SET country={$country}, city={$city}, address='{$address}', coordinates='{$coordinates}', roms={$roms}, id_image='{$id_image}', value={$value}, review='{$review}' WHERE id_apartment='{$id_apartment}'";
		$this -> db -> query($sql);
	}

    function deleteApartment($id_apartment){
        $sql = "DELETE FROM apartment WHERE id_apartment={$id_apartment}";
        $this -> db -> query($sql);
    }
}