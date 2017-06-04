<?php
	require 'Task.php';
	require 'core/bootstrap.php';
	$router = new Router;
	require 'routes.php';
	// var_dump($_SERVER['REQUEST_URI']);
	// $uri = trim($_SERVER['REQUEST_URI'], '/');
	// require $router->direct($uri);
	$router = Router::load('routes.php');
	require $router->direct(Request::uri());




