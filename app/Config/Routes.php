<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('autos', 'AutosController::index');
$routes->get('catalogo', 'StockController::index');
$routes->get('stock/verDetalles/(:num)', 'StockController::verDetalles/$1');
$routes->get('agregarAuto', 'StockController::agregarAuto');
$routes->post('autos/guardar', 'StockController::guardarAuto');
