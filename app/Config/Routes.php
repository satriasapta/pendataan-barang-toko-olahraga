<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
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
$routes->get('/', 'home::index', ['filter' => 'auth']);

$routes->get('/login', 'Login::index');
$routes->post('/login/auth', 'Login::auth');
$routes->get('/logout', 'Login::logout');

$routes->get('/data_admin', 'Admin::index', ['filter' => 'auth']);
$routes->get('/data_admin/create', 'Admin::create', ['filter' => 'auth']);
$routes->post('/data_admin/save', 'Admin::save', ['filter' => 'auth']);

$routes->get('/jenisbarang', 'Kategori::index', ['filter' => 'auth']);
$routes->post('/jenisbarang', 'Kategori::store', ['filter' => 'auth']);
$routes->get('/jenisbarang/edit/(:any)', 'Kategori::edit/$1', ['filter' => 'auth']);
$routes->put('/jenisbarang/(:any)', 'Kategori::update/$1', ['filter' => 'auth']);
$routes->get('/jenisbarang/create', 'Kategori::create', ['filter' => 'auth']);
$routes->delete('/jenisbarang/(:any)', 'Kategori::destroy/$1', ['filter' => 'auth']);

$routes->get('/barang', 'Barang::index', ['filter' => 'auth']);
$routes->get('/barang/create', 'Barang::create', ['filter' => 'auth']);
$routes->put('/barang/(:any)', 'Barang::update/$1', ['filter' => 'auth']);
$routes->get('/barang/edit/(:any)', 'Barang::edit/$1', ['filter' => 'auth']);
$routes->post('/barang/save', 'Barang::save', ['filter' => 'auth']);
$routes->delete('/barang/(:any)', 'Barang::destroy/$1', ['filter' => 'auth']);

$routes->get('/barang_masuk', 'BarangMasuk::index', ['filter' => 'auth']);
$routes->get('/barang_masuk/create', 'BarangMasuk::create', ['filter' => 'auth']);
$routes->post('/barang_masuk/save', 'BarangMasuk::save', ['filter' => 'auth']);
$routes->delete('/barang_masuk/delete/(:num)', 'BarangMasuk::delete/$1', ['filter' => 'auth']);
$routes->get('/export_barang_masuk', 'BarangMasuk::export_barang_masuk', ['filter' => 'auth']);

$routes->get('/barang_keluar', 'BarangKeluar::index', ['filter' => 'auth']);
$routes->get('/barang_keluar/create', 'BarangKeluar::create', ['filter' => 'auth']);
$routes->post('/barang_keluar/save', 'BarangKeluar::save', ['filter' => 'auth']);
$routes->delete('/barang_keluar/delete/(:num)', 'BarangKeluar::delete/$1', ['filter' => 'auth']);
$routes->get('/export_barang_keluar', 'BarangKeluar::export_barang_keluar', ['filter' => 'auth']);

$routes->get('/data_supplier', 'Supplier::index', ['filter' => 'auth']);
$routes->get('/data_supplier/create', 'Supplier::create', ['filter' => 'auth']);
$routes->post('/data_supplier/save', 'Supplier::save', ['filter' => 'auth']);
$routes->get('/data_supplier/edit/(:num)', 'Supplier::edit/$1', ['filter' => 'auth']);
$routes->post('/data_supplier/update/(:num)', 'Supplier::update/$1', ['filter' => 'auth']);
$routes->delete('/data_supplier/delete/(:num)', 'Supplier::delete/$1', ['filter' => 'auth']);



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
