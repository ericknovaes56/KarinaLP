<?php

require_once(__DIR__."/vendor/autoload.php");

use CoffeeCode\Router\Router;

$router = new Router(URL_BASE);

$router->namespace("App\Core\Controller");

$router->get("/", "Pages\Home:render");

$router->dispatch();