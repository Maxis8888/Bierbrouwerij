<?php

require_once 'vendor/autoload.php';

define('ROOT_DIR', dirname(__DIR__) . '/Bierbrouwerij');

$router = new Gears\Router();
$router->routesPath = 'app/routes.php';
$router->dispatch();