<?php
namespace App\Models;
use CodeIgniter\Model;

class CountryModel extends Model{
    protected $table = 'countries';
    protected $primaryKey = 'id_country';
    protected $allowedFields = ['name_country'];
}
?>