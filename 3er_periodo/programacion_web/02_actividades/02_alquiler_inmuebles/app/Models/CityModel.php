<?php
namespace App\Models;
use CodeIgniter\Model;

class CityModel extends Model{
    protected $table = 'city';
    protected $primaryKey = 'id_city';
    protected $allowedFields = ['id_country','name_city'];
}
?>