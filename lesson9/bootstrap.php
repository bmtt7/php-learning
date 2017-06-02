<?php
	require 'database/Connection.php';
	require 'database/QueryBuilder.php';

	// $pdo = Connection::make();
	return new QueryBuilder(Connection::make());

?>