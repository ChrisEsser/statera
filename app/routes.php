<?php


/** @var Router $router */
$router->addRoutes([
    ['GET', '', 'IndexController#index'],
    ['GET', '/dashboard', 'DashboardController#dashboard'],
    ['GET', '/profile', 'DashboardController#profile'],
    ['GET', '/settings', 'DashboardController#settings'],
    ['GET', '/notifications', 'DashboardController#notifications'],
]);