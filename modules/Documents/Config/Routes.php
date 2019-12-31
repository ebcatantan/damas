<?php
$routes->group('document-types', ['namespace' => 'Modules\Documents\Controllers'], function($routes)
{
    $routes->get('/', 'DocumentTypes::index');
    $routes->get('(:num)', 'DocumentTypes::index/$1');
    $routes->get('show/(:num)', 'DocumentTypes::show_document_type/$1');
    $routes->match(['get', 'post'], 'add', 'DocumentTypes::add_document_type');
    $routes->match(['get', 'post'], 'edit/(:num)', 'DocumentTypes::edit_document_type/$1');
    $routes->delete('delete/(:num)', 'DocumentTypes::delete_document_type/$1');
});
