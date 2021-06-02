<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// Se debe agregar la ruta para poder iniciar el controllador
$routes->get('/', 'Home::index');

$routes->get('/signin', 'SigninController::index');
$routes->post('/signin/login', 'SigninController::signIn');

$routes->get('/signup', 'SignupController::index');
$routes->post('/signup/create-account', 'SignupController::signUp');

$routes->get('/account/signout', 'HostController::logOut');

$routes->get('/account', 'ProfileController::index');
$routes->get('/account/edit-account', 'ProfileController::infoAccount');
$routes->post('/account/edit-account', 'ProfileController::editAccount');

$routes->get('/forbidden', 'AccessController::index');

$routes->get('/apartment', 'ApartmentController::index');
$routes->get('/apartment/create-apartment', 'ApartmentController::createApartment');
$routes->get('/apartment/detail-apartment', 'ApartmentController::detailApartmet');

$routes->post('/apartment/add-apartment', 'ApartmentController::addApartment');
$routes->get('/apartment/delete-apartment', 'ApartmentController::deleteApartment');
$routes->get('/apartment/update-apartment', 'ApartmentController::infoApartment');
$routes->post('/apartment/update-apartment/update', 'ApartmentController::updateApartment');

$routes->get('/reservation','ReservationController::index');
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
