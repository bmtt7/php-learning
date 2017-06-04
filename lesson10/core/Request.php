<?php

class Request{

	public function uri(){
		return $uri = trim($_SERVER['REQUEST_URI'], '/');
	}
}