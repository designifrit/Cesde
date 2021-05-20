<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\DropdownModel;

class DropdownController extends Controller {

    public function index(){
        echo view('layouts/header');
		echo view('layouts/nav');
        

        helper(['form', 'url']);
        $this->DropdownModel = new DropdownModel();
        $data['countries'] = $this->DropdownModel->getCountry();

        return view('signup_view', $data);
        echo view('layouts/footer');
    }

    public function getCity() {
        $this->DropdownModel = new DropdownModel();

        $postData = array(
            'cities' => $this->request->getPost('cities'),
        );

        $data = $this->DropdownModel->getCity($postData);
        echo json_encode($data);
    }
}