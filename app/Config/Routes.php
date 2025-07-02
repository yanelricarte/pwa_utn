<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->get('/',                         'Home::index');
$routes->get('stock',                     'StockController::index');
$routes->get('stock/verDetalle/(:num)',   'StockController::verDetalle/$1');
$routes->get('stock/editar/(:num)',       'StockController::actualizarStockForm/$1');
$routes->post('stock/actualizar/(:num)',  'StockController::actualizarStock/$1');

/* 
$routes->get('productos/crear',           ''); // ← alta (form)
$routes->post('productos/guardar',        '');     // ← alta (guardar)
*/