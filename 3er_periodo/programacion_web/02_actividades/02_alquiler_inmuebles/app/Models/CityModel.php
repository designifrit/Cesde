<?php
namespace App\Models;
use CodeIgniter\Model;

class CityModel extends Model{
    protected $table = 'city';
    protected $primaryKey = 'idCity';
    protected $allowedFields = ['idCountry','city'];
}
?>