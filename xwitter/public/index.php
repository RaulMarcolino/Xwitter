<?php

require_once '../vendor/autoload.php';
require_once '../core/Router.php';

use Core\Router;

$router = new Router();
$router->run();