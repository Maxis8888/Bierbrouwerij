<?php

require_once 'vendor/autoload.php';

$router = new Gears\Router();
$router->routesPath = 'app/routes.php';
$router->dispatch();