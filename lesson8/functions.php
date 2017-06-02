<?php
	function connectToDB(){
		try{
			return new PDO('mysql:host=127.0.0.1;dbname=mytodo;port=3306','root','123456');
		}
		catch(PDOException $e){
			die($e->getMessage());
		}
	}

	function fetchAll($pdo){
		$statement = $pdo->prepare('SELECT * FROM todos');
		$statement->execute();
		return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
	}
?>