<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');

$routes->get('product', 'ProductController::index');
$routes->get('product/prod', 'ProductController::prod');
$routes->add('product/add', 'ProductController::add');
$routes->add('product/edit/(:num)', 'ProductController::edit/$1');
$routes->post('product/save', 'ProductController::save');
$routes->get('product/delete/(:num)', 'ProductController::delete/$1');



$routes->get('category/products/(:any)', 'CategoryController::products/$1');

