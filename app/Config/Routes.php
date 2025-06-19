<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/utama', 'Utama::index');
$routes->get('/contact', 'Contact::index');
$routes->get('/portholio-details', 'PortholioDetails::index');
