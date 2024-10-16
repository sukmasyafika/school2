<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setAutoRoute(true);
// utama
$routes->get('/', 'Pages::index');

// admin
$routes->get('/admin', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/admin/index', 'Admin::index', ['filter' => 'role:admin']);

// user
// $routes->get('/user', 'User::index', ['filter' => 'role:user']);
// $routes->get('/user/index', 'User::index', ['filter' => 'role:user']);

// kalo ada yg akses admin lalu yg di link adalah numerik maka arahkan ke cotroller admin masuk ke method detail ambil angkanya / id
$routes->get('/admin/(:num)', 'Admin::detail/$1', ['filter' => 'role:admin']);

// detail tenaga kerja
$routes->get('/tenaga/(:segment)', 'Tenaga::detail/$1', ['filter' => 'role:admin']);
