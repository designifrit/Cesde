<?php
namespace App\Controllers;
use App\Models\CountryModel;
use App\Models\CityModel;

class DynamicController extends BaseController{
    
    // Para HTTP requests [ getVar() ] > IncomingRequest class
    protected $mRequest;
    public function __construct()
    {
        $this->mRequest = service("request");
    }

    //Obtiene las vistas y los paises desde la DB
    // Luego envia paises a el html para el input
    function index()
    {
        echo view('layouts/header');
		echo view('layouts/nav');

        $countryModel = new CountryModel();
		$cityModel = new CityModel();
		
		$data['country'] = $countryModel -> orderBy('name_country','ASC') -> findAll();
		$data['city'] = $cityModel -> orderBy('name_city','ASC') -> findAll();

        echo view('signup_view', $data);
        echo view('layouts/footer');
    }

    function action()
	{
		if($this->mRequest->getVar('action'))
		{
			$action = $this->mRequest->getVar('action');

			if($action == 'get_city')
			{
				$cityModel = new cityModel();

				$citydata = $cityModel->where('id_country', $this->mRequest->getVar('id_country'))->findAll();

				echo json_encode($citydata);
			}
		}
	}
}
?>