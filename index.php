<?php
require 'vendor/autoload.php';
require 'bootstrap.php';

$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $route) {
	require 'routes.php';
});

$routeInfo = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], trim($_REQUEST['route'],'/'));

switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
       	Response::json(array(),404,'Route not found');
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        Response::json(array(),405,'METHOD_NOT_ALLOWED');
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = explode('/', $routeInfo[1]);
        $obj = new $handler[0];
        $method = $handler[1];
        $vars = $routeInfo[2];
        call_user_func_array(array($obj,$method),$vars);
        break;
}