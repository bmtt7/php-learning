<?php
	class Connection{

		public static function make(){
			try{
				return new PDO('mysql:host=127.0.0.1;dbname=mytodo;port=3306','root','123456');
			}
			catch(PDOException $e){
				die($e->getMessage());
			}
		}
	}

?>