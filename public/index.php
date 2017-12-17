<?php

session_start();

// some constants
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));

// load the environment variables from the main .env file
require ROOT . DS . 'vendor' . DS . 'autoload.php';

try {
    $dotenv = new Dotenv\Dotenv(ROOT);
    $dotenv->load();
} catch (Exception $e) {
    exit('Unable to load .env file.');
}


// load everything
require_once(ROOT . DS . 'frame' . DS . 'loader.php');

// site errors and field errors should always need to be unset if they exist
//unset($_SESSION['frame']['site_errors']);
unset($_SESSION['frame']['invalid_fields']);