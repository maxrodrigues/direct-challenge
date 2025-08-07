<?php

use App\Controllers\HomeController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index');

$routes->get('/', 'HomeController::index', ['as' => 'home']);
$routes->get('/add-medical-report', 'FormController::index', ['as' => 'create-report']);
$routes->post('/save-medical-report', 'SaveReportController::index', ['as' => 'save-report']);
$routes->get('/medical-report/(:num)', 'ShowReportController::index/$1', ['as' => 'show-report']);
