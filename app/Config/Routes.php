<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('ver_clientes', 'Clientes::index');
$routes->get('ver_hoteles', 'Hoteles::index');
$routes->get('ver_reservaciones', 'Reservaciones::index');

// clientes
$routes->post('agregar_cliente', 'Clientes::agregarClientes');
$routes->get('nuevos_clientes', 'Clientes::nuevosClientes');
$routes->get('eliminar_clientes/(:num)', 'Clientes::eliminarClientes/$1');
$routes->get('buscar_clientes/(:num)', 'Clientes::buscarClientes/$1');
$routes->post('modificar_clientes', 'Clientes::modificarClientes');

// Hoteles
$routes->post('agregar_hotel', 'Hoteles::agregarHotel');
$routes->get('nuevos_hoteles', 'Hoteles::nuevosHoteles');
$routes->get('eliminar_hotel/(:num)', 'Hoteles::eliminarHotel/$1');
$routes->get('buscar_hotel/(:num)', 'Hoteles::buscarHotel/$1');
$routes->post('modificar_hotel', 'Hoteles::modificarHotel');

// Reservaciones
$routes->post('agregar_reservacion', 'Reservaciones::agregarReservacion');
$routes->get('nuevas_reservaciones', 'Reservaciones::nuevosReservaciones');
$routes->get('eliminar_reservacion/(:num)', 'Reservaciones::eliminarReservacion/$1');
$routes->get('buscar_reservaciones/(:num)', 'Reservaciones::buscarReservacion/$1');
$routes->post('modificar_reservacion', 'Reservaciones::modificarReservacion');