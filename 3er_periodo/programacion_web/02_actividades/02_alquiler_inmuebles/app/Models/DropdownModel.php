<?php

namespace App\Models;

use CodeIgniter\Model;

class DropdownModel extends Model {

    public function __construct() {
        parent::__construct();
        //$this->load->database();
        $db = \Config\Database::connect();
    }

    public function getCountry() {

        $query = $this->db->query('SELECT * FROM countries');
        return $query->getResult();
    }

    public function getCity($postData) {
        $sql = 'SELECT * FROM cities WHERE countries=' . $postData['countries'];
        $query =  $this->db->query($sql);

        return $query->getResult();
    }    
}