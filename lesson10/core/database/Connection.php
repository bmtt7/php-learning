<?php
	class Connection{

		public static function make($config){
			try{
				//return new PDO('mysql:host=127.0.0.1;dbname=mytodo;port=3306','root','123456');

				return new PDO($config['connection'].';dbname='.$config['name'],
					$config['username'],
					$config['password'],
					$config['options']);
			}
			catch(PDOException $e){
				die($e->getMessage());
			}
		}
	}

?>