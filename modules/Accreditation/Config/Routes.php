<?php
$routes->group('accreditation-templates', ['namespace' => 'Modules\Accreditation\Controllers'], function($routes)
{
    $routes->get('/', 'AccreditationTemplates::index');
    $routes->get('(:num)', 'AccreditationTemplates::index/$1');
    $routes->get('show/(:num)', 'AccreditationTemplates::show_accreditation_template/$1');
    $routes->match(['get', 'post'], 'add', 'AccreditationTemplates::add_accreditation_template');
    $routes->match(['get', 'post'], 'edit/(:num)', 'AccreditationTemplates::edit_accreditation_template/$1');
    $routes->delete('delete/(:num)', 'AccreditationTemplates::delete_accreditation_template/$1');

    $routes->match(['get', 'post'], 'add-parameter-item', 'AccreditationTemplates::add_parameter_item');
});
