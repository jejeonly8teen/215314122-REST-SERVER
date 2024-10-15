<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->group('api', ['filter' => ['basicauth', 'apikey']], function($routes) {
    $routes->resource('mahasiswa', ['controller' => 'MahasiswaController']);
  }
);
