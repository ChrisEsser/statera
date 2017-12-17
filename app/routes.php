<?php


/** @var Router $router */
$router->addRoutes([
    ['GET', '', 'IndexController#index'],
    ['GET', '/dashboard', 'DashboardController#dashboard'],
    ['GET', '/profile', 'DashboardController#profile'],
    ['GET', '/account', 'DashboardController#account'],
    ['GET', '/notifications', 'DashboardController#notifications'],
]);