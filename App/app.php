<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

define("__PATH_ROOT__", __DIR__);

require_once('vendor/autoload.php');

use App\Routes\Router;

$requestUri = $_SERVER['REQUEST_URI'];

$server = new Router();
$server->run($requestUri);

