<?php
	require 'Task.php';
	require 'functions.php';
	// try{
	// 	$pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodo;port=3306','root','123456');
	// }
	// catch(PDOException $e){
	// 	die($e->getMessage());
	// }
 
	/*$statement = $pdo->prepare('SELECT * FROM todos');
	$statement->execute();
	var_dump($statement->fetchAll(PDO::FETCH_OBJ));
	$tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');*/

	$pdo = connectToDB();
	$tasks = fetchAll($pdo);
	require 'index.view.php';
