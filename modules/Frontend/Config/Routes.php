<?php

/*
* define frontend route
*/
$routes->group('frontend', ['namespace' => 'Modules\Frontend\Controllers'], function ($routes) {
    //    Dashboard
    $routes->get('home', 'Home::index');
});
