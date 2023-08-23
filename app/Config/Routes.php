<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// --SHOW
$routes->view('/', 'home');
$routes->view('/login', 'login');
$routes->view('/register', 'register');
$routes->get('/logout', 'logout::logout');

$routes->get('/admin/karakter', 'admin::karakter');
$routes->get('/admin/jenis', 'admin::jenis');
$routes->get('/admin/akun', 'admin::akun');

$routes->get('/karakter/add', 'karakter::add');
$routes->get('/jenis/add', 'jenis::add');
$routes->get('/akun/add', 'user::add');

$routes->get('/delete/karakter/(:any)', 'karakter::delete/$1');
$routes->get('/delete/jenis/(:any)', 'jenis::delete/$1');
$routes->get('/delete/akun/(:any)', 'user::delete/$1');

$routes->get('/edit/karakter/(:any)', 'karakter::edit/$1');
$routes->get('/edit/jenis/(:any)', 'jenis::edit/$1');
$routes->get('/edit/akun/(:any)', 'user::edit/$1');

$routes->get('/konsultasi', 'guest::konsultasi');
$routes->get('/hasil', 'guest::hasil');
$routes->get('/hasil/cetak/(:any)', 'guest::cetak/$1');
$routes->get('/riwayat', 'guest::riwayat');
$routes->get('/riwayat/delete/(:any)', 'guest::delete/$1');
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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
