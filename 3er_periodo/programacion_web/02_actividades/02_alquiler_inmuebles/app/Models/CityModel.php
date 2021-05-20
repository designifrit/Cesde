<?php
namespace App\Models;
use CodeIgniter\Model;

class CityModel extends Model{
    protected $table = 'cities';
    protected $primaryKey = 'id_city';
    protected $allowedFields = ['name_country','name_city'];
}
?>