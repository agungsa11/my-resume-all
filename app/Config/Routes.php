<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'About::index');
$routes->get('/utama', 'Utama::index');
$routes->get('/contact', 'Contact::index');
$routes->get('/portholio-details', 'PortholioDetails::index');
$routes->set404Override(function() {
 echo view('errors/not_found');
});