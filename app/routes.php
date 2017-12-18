<?php


/** @var Router $router */
$router->addRoutes([

    ['GET', '', 'IndexController#index'],
    ['GET', '/dashboard', 'DashboardController#dashboard'],
    ['GET', '/account', 'DashboardController#account'],
    ['GET', '/investments', 'DashboardController#investments'],
    ['GET', '/notifications', 'DashboardController#notifications'],

    ['POST', '/signupprocess', 'AuthController#signup_process'],
    ['GET', '/signup/confirm', 'AuthController#signup_confirm'],

    ['POST', '/loginprocess', 'AuthController#login_process'],
    ['GET', '/login', 'AuthController#login'],
    ['GET', '/login/[:page]', 'AuthController#login'],

]);