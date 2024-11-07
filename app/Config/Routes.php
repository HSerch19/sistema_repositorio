<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//Rutas Publicas
$routes->get('/', 'Home::index');
$routes->get('/LoginView', 'Home::login');
$routes->get('/RegisterView', 'Home::register');

//Rutas Usuario
$routes->post('/form', 'LoginController::verificarUsuario');


//Rutas Admin

