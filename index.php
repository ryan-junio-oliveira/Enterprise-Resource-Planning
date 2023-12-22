<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once("./vendor/autoload.php");

use App\Routes\Router;

$requestUri = $_SERVER['REQUEST_URI'];

$route = new Router();
$route->run($requestUri);

