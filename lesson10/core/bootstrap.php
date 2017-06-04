<?php
	$app = [];
	$app['config'] = require 'core/database/config.php';
	require 'database/Connection.php';
	require 'core/Router.php';
	require 'core/Request.php';
	require 'core/database/QueryBuilder.php';

	// $pdo = Connection::make();
	$app['database'] = new QueryBuilder(Connection::make($app['config']['database']));

?>