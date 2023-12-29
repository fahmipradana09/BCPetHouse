<?php

namespace Config;

$routes = Services::routes();
if (file_exists(SYSTEMPATH.'Config/Routes.php')) {
    require SYSTEMPATH.'Config/Routes.php';
}
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Dashboard');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

$routes->get('/', 'Dashboard::index');

// $routes->get('/Ambulatoir', 'Ambulatoir::index');
// $routes->add('/Ambulatoir/detail','Ambulatoir::detail_ambulatoir');

// $routes->get('/RawatInap','RawatInap::index');

// $routes->get('/PetList','PetList::index');

