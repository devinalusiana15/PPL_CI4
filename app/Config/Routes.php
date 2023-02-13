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
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');
$routes->get('create', "C_Mahasiswa::create");
$routes->post('store', "C_Mahasiswa::store");

$routes->get('/home', 'c_Home::index');
$routes->get('/info', 'c_Info::index');
$routes->get('/mahasiswa', 'C_Mahasiswa::display');
$routes->get('/viewdetail/(:num)', 'c_mahasiswa::detail/$1');
$routes->get('/delete/(:segment)', 'c_mahasiswa::delete/$1');
$routes->get('/edit/(:segment)', 'c_mahasiswa::edit/$1');

/* Login */
$routes->get('/', 'c_Login::index');
$routes->post('/cek_login', 'c_Login::cek_login');
$routes->get('/logout', 'c_Login::logout');