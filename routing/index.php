<?php
// index.php
namespace routing;

require "Router.php";
require "Route.php";
spl_autoload_extensions('.php');
spl_autoload_register();

$router = new Router();
$router->register(new Route('/^\/login\/(\w+)$/', 'AuthenticationController', 'login'));
$router->handleRequest($_SERVER['REQUEST_URI']);
