<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

$routes->match(['get', 'post'], 'login', 'UserController::login', ["filter" => "noauth"]);
// Admin routes
$routes->group("Admin", ["filter" => "auth"], function ($routes) {
    $routes->get("/", "Admin::index");
});
// Customer routes
$routes->group("Customer", ["filter" => "auth"], function ($routes) {
    $routes->get("/", "Customer::index");
});
$routes->get('logout', 'UserController::logout');

$routes->get('/product', 'Product');
$routes->get('/daftar_produk', 'Admin::daftar_produk');
$routes->get('/daftar_produk/delete/(:segment)', 'Admin::hapusProduk/$1');
$routes->get('/review_produk/delete/(:segment)', 'Admin::hapusUlasanProduk/$1');
$routes->get('/kritik_saran/delete/(:segment)', 'Admin::hapusKs/$1');
$routes->get('/product/(:any)', 'Product::details/$1');
$routes->get('/review_produk', 'Admin::review');
$routes->get('/contact', 'Contact');
$routes->get('/kritik_saran', 'Admin::kritikSaran');
$routes->get('/tentang_kami', 'About');



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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
