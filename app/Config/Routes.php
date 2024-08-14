<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/test','Home::testcontroller');
$routes->get('users','Home::users');
$routes->get("blog/(:num)/(:any)",'Home::testroute/$1/$2');
