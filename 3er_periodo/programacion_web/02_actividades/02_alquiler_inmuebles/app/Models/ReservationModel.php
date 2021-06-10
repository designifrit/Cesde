<?php
namespace App\Models;
use CodeIgniter\Model;
use Exception;

class ReservationModel extends Model
{
    function readReservation($idUser){
        try{
            $sql = "SELECT * FROM ((reservation INNER JOIN user ON reservation.idUser = user.idUser)INNER JOIN apartment ON reservation.idApartment = apartment.idApartment) WHERE reservation.idUser = {$idUser}";
        }catch(Exception $error){
			print_r($error -> getMessage());
		}
		
		$idUser = $this -> db -> query($sql);
		return $idUser -> getResult();
    }

    function deleteReservation($idReservation){
        try{
            $sql = "DELETE FROM reservation WHERE idReservation = {$idReservation}";
        }catch(Exception $error){
			print_r($error -> getMessage());
		}
		
        $this -> db -> query($sql);
    }
}