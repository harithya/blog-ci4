<?php

/*
* define backend route
*/
$routes->group('admin', ['namespace' => 'Modules\Backend\Controllers'], function ($routes) {
    //    Dashboard
    $routes->get('dashboard', 'Dashboard::index');
});
