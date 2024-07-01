<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Router\RouteCollection;
use CodeIgniter\Router\Route;

$routes = Services::routes(); // Get the routes service
// Default route: Redirect to login
$routes->setDefaultController('Login::index');

// Registration routes
$routes->add('register', 'Register::index');
$routes->add('register/save', 'Register::save');

// Login routes
$routes->add('login', 'Login::index');
$routes->add('login/authenticate', 'Login::authenticate');

// Dashboard routes
$routes->add('dashboard', 'Dashboard::index');

// Profile routes
$routes->add('profile', 'Profile::index');
$routes->add('profile/update', 'Profile::update');

// Search routes
$routes->add('search', 'Search::index');
$routes->add('search/results', 'Search::results');

return $routes;
