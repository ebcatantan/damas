<?php
$routes->group('departments', ['namespace' => 'Modules\SystemSettings\Controllers'], function($routes)
{
    $routes->get('/', 'Departments::index');
    $routes->get('(:num)', 'Departments::index/$1');
    $routes->get('show/(:num)', 'Departments::show_department/$1');
    $routes->match(['get', 'post'], 'add', 'Departments::add_department');
    $routes->match(['get', 'post'], 'edit/(:num)', 'Departments::edit_department/$1');
    $routes->delete('delete/(:num)', 'Departments::delete_department/$1');
});
