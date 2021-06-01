<?php
namespace App\Models;
use CodeIgniter\Model;
use Exception;

class ProfileModel extends Model
{   
    function readUser(){
        $sql = "SELECT * FROM user";
        $user = $this -> db -> query($sql);
        return($user -> getResult());
    }

    function deleteUser($id){
        $sql = "DELETE FROM user WHERE idUser = {$id}";
        $this -> db -> query($sql);
    }
}